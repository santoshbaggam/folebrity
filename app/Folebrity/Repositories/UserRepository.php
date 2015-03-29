<?php

namespace Folebrity\Repositories;

use User;
use Session;

class UserRepository {

    public function create($credentials)
    {
        $user = new User;
        $user->twitter_id = $credentials->id;
        $user->name = $credentials->name;
//        $user->access_token = Session::get('oauth_request_token');
//        $user->access_token_secret = Session::get('oauth_request_token_secret');
        $user->save();

        return $user;
    }

    public function find($twitter_id)
    {
        return User::where('twitter_id', $twitter_id)->first();
    }

}