<?php

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);

Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'PageController@dashboard']);

# DOMAIN
Route::get('celebrities', 'CelebrityController@index');

# LOGIN
Route::get('twitter/login', 'SessionController@create');
Route::get('twitter/callback', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');

# PROFILE
Route::get('{handle}', 'CelebrityController@show');

# INSTA-SEARCH
Route::post('celebrities/q', 'CelebrityController@search');

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

App::singleton('Pusher', function($app) {
    $keys = $app['config']->get('services.pusher');
    return new Pusher($keys['public'], $keys['secret'], $keys['app_id']);
});

Route::get('celebrities/lists', 'PageController@getLists');