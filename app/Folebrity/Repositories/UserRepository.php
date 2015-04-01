<?php

namespace Folebrity\Repositories;

use User;
use Session;

class UserRepository {

    public function create($credentials)
    {
        $user = new User;
        $user->twitter_id = $credentials->id;
        $user->twitter_handle = $credentials->screen_name;
        $user->name = $credentials->name;
        $user->save();

        return $user;
    }

    public function find($twitter_id)
    {
        return User::where('twitter_id', $twitter_id)->first();
    }

}