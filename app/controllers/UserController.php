<?php

class UserController extends BaseController {

    public function create()
    {
        return View::make('users.create');
    }

    public function store()
    {
    	$validation = Validator::make(Input::all(), [
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

		if ($validation->fails())
			return Redirect::to('register')
                                ->withInput()
                                ->withErrors($validation->messages());

		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		Auth::login($user);

		return Redirect::to('/login')->with('notification', 'Registered! Login now.')
										->with('alert_type', 'success');
	}

    public function favourite()
    {
        $id = Input::get('id');
        if (!Auth::check())
            return Redirect::back()->with('notification', 'You need to sign in first.')
                                   ->with('alert_type', 'danger');

        Auth::user()->favourites()->attach($id);

        return Redirect::back();
    }

    public function unfavourite()
    {
        $id = Input::get('id');
        if (!Auth::check()) return Redirect::back()->with('notification', 'You need to sign in first.')
            ->with('alert_type', 'danger');

        Auth::user()->favourites()->detach($id);

        return Redirect::back();
    }

}