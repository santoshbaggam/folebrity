<?php

Route::get('/', ['as' => 'home', 'uses' => function()
{
//    return View::make('homepage');
}]);

Route::get('dashboard', function()
{
    if (Auth::check()) return 'logged in';

    return 'still not logged in';
});

# LOGIN
Route::get('twitter/login', 'SessionController@create');
Route::get('twitter/callback', 'SessionController@store');
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