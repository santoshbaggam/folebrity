<?php

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);

Route::get('/', function() {
        return Twitter::getUserTimeline([
            'screen_name' => 'santoshbaggam',
            'include_rts' => false,
            'format' => 'array',
            'count' => 200
        ]);
    $c = new Celebrity;

    if (Input::has('domains')) {
        $c = $c->whereHas('domains', function($q) {
            $q->whereIn('domains.id', Input::get('domains'));
        });
    }

    if (Input::has('categories')) {
        $c = $c->whereHas('categories', function($q) {
            $q->whereIn('categories.id', Input::get('categories'));
        });
    }

    return $c->get();

});

Route::get('favourites', ['as' => 'favourites', 'uses' => 'PageController@favourites']);

Route::post('favourite', 'UserController@favourite');
Route::post('unfavourite', 'UserController@unfavourite');

# DOMAIN
Route::get('celebrities', 'CelebrityController@index');

# LOGIN
Route::get('twitter/login', 'SessionController@create');
Route::get('twitter/callback', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');

# COMPARE
Route::get('compare', 'PageController@compare');
Route::post('compare', 'PageController@compareShow');

Route::get('domain', function() {
    return View::make('domain');
});

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

View::composer('partials.sidebar.filters', function($view) {

    $domains = Domain::with('categories')->where('status', 1)->get();
    $categories = Category::with('domains')->get();

    $view->with(compact('domains', 'categories'));
});

# DB Calls
// DB::listen(function($sql, $bindings, $time)
// {
//     var_dump($sql, $time);
// });