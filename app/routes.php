<?php

Route::get('/', ['as' => 'home', 'uses' => function()
{
    return View::make('homepage');
}]);

//Route::get('abraham/login', function() {
//    $auth = new \Abraham\TwitterOAuth\TwitterOAuth(getenv('twitter.consumer_key'), getenv('twitter.consumer_secret'));
//    $request = $auth->oauth('request_token', ['oauth_callback' => 'http://falebrity.dev/twitter-success']);
//
//    Session::put('oauth_access_token', $request['oauth_token']);
//    Session::put('oauth_token_secret', $request['oauth_token_secret']);
//
//    if ($request->response->getHttpCode == 200) {
//        return Redirect::to('http://')
//    }
//});

Route::get('/twitter/login', function()
{
    $sign_in_twitter = TRUE;
    $force_login = FALSE;
    $callback_url = 'http://' . $_SERVER['HTTP_HOST'] . '/twitter/callback';

    Twitter::set_new_config(['token' => '', 'secret' => '']);

    $token = Twitter::getRequestToken($callback_url);

    if( isset( $token['oauth_token_secret'] ) ) {
        $url = Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);

        Session::put('oauth_state', 'start');
        Session::put('oauth_request_token', $token['oauth_token']);
        Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

        return Redirect::to($url);
    }
    return Redirect::to('twitter/error');
});

Route::get('twitter/callback', function() {
    // You should set this route on your Twitter Application settings as the callback
    // https://apps.twitter.com/app/YOUR-APP-ID/settings
    if(Session::has('oauth_request_token')) {
        $request_token = [
            'token' => Session::get('oauth_request_token'),
            'secret' => Session::get('oauth_request_token_secret'),
        ];

        Twitter::set_new_config($request_token);

        $oauth_verifier = FALSE;
        if(Input::has('oauth_verifier')) {
            $oauth_verifier = Input::get('oauth_verifier');
        }

        // getAccessToken() will reset the token for you
        $token = Twitter::getAccessToken( $oauth_verifier );
        if( !isset( $token['oauth_token_secret'] ) ) {
            return Redirect::to('/')->with('flash_error', 'We could not log you in on Twitter.');
        }

        $credentials = Twitter::query('account/verify_credentials');
        if( is_object( $credentials ) && !isset( $credentials->error ) ) {
            // $credentials contains the Twitter user object with all the info about the user.
            // Add here your own user logic, store profiles, create new users on your tables...you name it!
            // Typically you'll want to store at least, user id, name and access tokens
            // if you want to be able to call the API on behalf of your users.

            // This is also the moment to log in your users if you're using Laravel's Auth class
            // Auth::login($user) should do the trick.
            dd($credentials);
            return Redirect::to('login')
                                ->with('notification', "Congrats! You've successfully signed in!")
                                ->with('alert_type', 'success');
        }
        return Redirect::to('/')->with('flash_error', 'Crab! Something went wrong while signing you up!');
    }
});

Route::get('twitter/error', function() {
    return Session::all();
});

Route::get('dashboard', function()
{
    return View::make('dashboard');
});

# LOGIN
Route::get('login', 'SessionController@create');
Route::post('sessions', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');

# PROFILE
Route::get('{handle}', 'CelebrityController@show');

# USER REGISTRATION
Route::get('register', 'UserController@create');
Route::post('users', 'UserController@store');

Route::get('domain', function()
{
    return View::make('domain');
});

Route::get('compare', function() {
   return 'Compare';
});