<?php

Route::get('/', ['as' => 'home', 'uses' => function()
{
    return View::make('homepage');
}]);

Route::get('dashboard', function()
{
    if (Auth::check()) return 'logged in';

    return 'still not logged in';
});

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

Route::get('celebrities/lists', function() {
    if (Cache::has('celebrities.lists')) {
        return Cache::get('celebrities.lists');
    }

    $lists = Celebrity::get(['name as value', 'twitter_handle as handle']);

    Cache::forever('celebrities.lists', $lists);
    return $lists;
});