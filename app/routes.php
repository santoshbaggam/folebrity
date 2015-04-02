<?php

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home'])->before('guest');

// Route::get('/', function() {

// });

Route::get('favourites', ['as' => 'favourites', 'uses' => 'PageController@favourites'])->before('auth');

Route::post('favourite', 'UserController@favourite')->before('auth');
Route::post('unfavourite', 'UserController@unfavourite')->before('auth');

# DOMAIN
Route::get('celebrities', 'CelebrityController@index');
Route::post('celebrities', 'CelebrityController@index');

# LOGIN
Route::get('twitter/login', 'SessionController@create')->before('guest');
Route::get('twitter/callback', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');

# COMPARE
Route::get('compare', 'PageController@compare');
Route::post('compare', 'PageController@compareShow');

# PROFILE
Route::get('{handle}', 'CelebrityController@show');

# INSTA-SEARCH
Route::post('celebrities/q', 'CelebrityController@search');

# USER REGISTRATION
// Route::get('register', 'UserController@create');
// Route::post('users', 'UserController@store');

App::singleton('Pusher', function($app) {
    $keys = $app['config']->get('services.pusher');
    return new Pusher($keys['public'], $keys['secret'], $keys['app_id']);
});

Route::get('celebrities/lists', 'PageController@getLists');

View::composer(['partials.buttons.fav-btn', 'partials.buttons.fav-btn-sm'], function($view) {
    $favourites = [];

    if (Auth::check())
        $favourites = Auth::user()->favourites()->get()->lists('id');

    $view->with('favourites', $favourites);
});

View::composer('partials.sidebar.activity', function($view) {
    $profiles = Cache::get('celebrities.lists');

    $tweets = activityFeed($profiles)->take(20)->toArray();

    $view->with('tweets', $tweets);
});

View::composer(['partials.header', 'partials.sidebar.filters'], function($view) {
    $domains = Domain::with('categories')->where('status', 1)->get();
    $categories = Category::with('domains')->get();

    $view->with(compact('domains', 'categories'));
});

View::composer('partials.sidebar.recommendations', function($view) {
    $handles = Celebrity::orderByRaw('RAND()')->take(3)->get(['twitter_handle as handle']);
    $profiles = getProfiles($handles->toArray());

    $view->with(compact('profiles'));
});

Route::group(['before' => 'admin', 'prefix' => 'super'], function() {
    Route::get('name', function() 
    {
        return 'super user';
    });
});

# DB Calls
// DB::listen(function($sql, $bindings, $time)
// {
//     var_dump($sql, $time);
// });