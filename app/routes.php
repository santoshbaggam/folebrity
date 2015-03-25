<?php

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);

Route::get('favourites', ['as' => 'favourites', 'uses' => 'PageController@favourites']);

Route::post('favourite', 'UserController@favourite');
Route::post('unfavourite', 'UserController@unfavourite');

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

//View::composer('partials.activity', function($view) {
//    $feeds = Tweet::orderBy('time', 'DESC')->paginate(20);
//    $view->with('feeds', $feeds);
//});

App::singleton('Pusher', function($app) {
    $keys = $app['config']->get('services.pusher');
    return new Pusher($keys['public'], $keys['secret'], $keys['app_id']);
});

Route::get('celebrities/lists', 'PageController@getLists');

View::composer('partials.favourite.fav-btn', function($view) {
    $favourites = [];
    if (Auth::check())
        $favourites = Auth::user()->favourites()->get()->lists('id');

    $view->with('favourites', $favourites);
});