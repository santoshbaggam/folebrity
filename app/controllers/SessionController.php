<?php

class SessionController extends BaseController {

    public function create()
    {
        return View::make('sessions.create');
    }

    public function store()
    {
        $attempt = Auth::attempt([
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ]);

        if ($attempt) return Redirect::intended('dashboard');

        return Redirect::to('login')->withErrors('Please check your email and password.');
    }

    public function destroy()
    {
        Auth::logout();

        return Redirect::home();
    }

}