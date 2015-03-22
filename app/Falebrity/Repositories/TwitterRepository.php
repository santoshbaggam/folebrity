<?php

namespace Falebrity\Repositories;

class TwitterRepository {

    public function getUserTimeline($handle)
    {
        Twitter::set_new_config([
            'token' => 'oauth_request_token',
            'secret' => Session::get('oauth_request_token_secret')
        ]);

        return Twitter::getUserTimeline([
            'screen_name' => $handle,
            'format' => 'json'
        ]);
    }

}