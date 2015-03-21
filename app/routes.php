<?php

Route::get('/', function()
{
	return View::make('homepage');
});

Route::get('profile', function()
{
    return View::make('profile');
});

Route::get('domain', function()
{
    return View::make('domain');
});
