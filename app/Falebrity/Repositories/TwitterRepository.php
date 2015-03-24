<?php

namespace Falebrity\Repositories;

use App;
use Cache;
use Carbon\Carbon;
use Celebrity;
use Session;
use Twitter;

class TwitterRepository {

    public function getUserTimeline($handle)
    {
        return $this->get($handle);
    }

    public function get($handle)
    {
        $celebrity = Celebrity::where('twitter_handle', $handle)->first();

//        dd($celebrity->updated_at->diffInMinutes());
        if ($celebrity->updated_at->diffInMinutes() > 1) {
            $old_cache = Cache::tags('twitter')->get($handle);

            $new_cache = $this->queryTwitter($handle);

            if (Cache::tags('twitter')->has($handle))
            {
                $this->instaPush(cacheDiff($old_cache, $new_cache));
            }

            $celebrity->updated_at = Carbon::now();
            $celebrity->save();

            Cache::tags('twitter')->forever($handle, $new_cache);
        }

        return Cache::tags('twitter')->get($handle);
    }

    public function queryTwitter($handle)
    {
        return Twitter::getUserTimeline([
            'screen_name' => $handle,
            'include_rts' => false,
            'format' => 'array',
            'count' => 200
        ]);
    }

    public function instaPush($tweets)
    {
        foreach ($tweets as $tweet) {
            App::make('Pusher')->trigger('tweetChannel', 'newTweet', [
                'tweet' => $this->parse($tweet)
            ]);
        }
    }

    public function parse($tweet)
    {
        $tweet['time'] = Twitter::ago($tweet['time']);

        return $tweet;
    }

}