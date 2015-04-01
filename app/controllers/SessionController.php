<?php

use Folebrity\Repositories\UserRepository;

class SessionController extends BaseController {

    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function create()
    {
        $sign_in_twitter = TRUE;
        $force_login = FALSE;
        $callback_url = 'http://' . $_SERVER['HTTP_HOST'] . '/twitter/callback';

        Twitter::reconfig(['token' => '', 'secret' => '']);

        $token = Twitter::getRequestToken($callback_url);

        if(isset($token['oauth_token_secret'])) {
            $url = Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);

            Session::put('oauth_state', 'start');
            Session::put('oauth_request_token', $token['oauth_token']);
            Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

            return Redirect::to($url);
        }
        return Redirect::back()->with('notification', 'Darn! Something went wrong!')
                               ->with('alert_type', 'error');;
    }

    public function store()
    {
        if (Session::has('oauth_request_token')) {
            $request_token = [
                'token' => Session::get('oauth_request_token'),
                'secret' => Session::get('oauth_request_token_secret'),
            ];

            Twitter::reconfig($request_token);

            $oauth_verifier = FALSE;
            if (Input::has('oauth_verifier')) {
                $oauth_verifier = Input::get('oauth_verifier');
            }

            $token = Twitter::getAccessToken( $oauth_verifier );
            if ( !isset($token['oauth_token_secret']) ) {
                return Redirect::to('/')->with('flash_error', 'We could not log you in on Twitter.');
            }

            $credentials = Twitter::query('account/verify_credentials');

            if ( is_object( $credentials ) && !isset( $credentials->error ) ) {
                $user = $this->user->find($credentials->id);

                if (!$user) {
                    $user = $this->user->create($credentials);
                }

                Auth::login($user);

                return Redirect::to('favourites')
                    ->with('notification', "Congrats! You've successfully signed in!")
                    ->with('alert_type', 'success');
            }

            return Redirect::to('/')->with('error', 'Crab! Something went wrong while signing you up!');
        }

    }

    public function destroy()
    {
        Auth::logout();

        Session::forget('oauth_state');
        Session::forget('oauth_request_token');
        Session::forget('oauth_request_token_secret');

        return Redirect::home();
    }

}