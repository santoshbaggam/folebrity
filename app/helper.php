<?php

use Carbon\Carbon;

function cacheDiff($old_cache, $new_cache)
{
    $old = getTweets($old_cache);
    $new = getTweets($new_cache);

    $array = array_map(function($new) use($old) {
        if ( ! in_array($new['id'], array_fetch($old, 'id')) ) {
            return $new;
        }
    }, $new);

    return array_filter($array);
}

function getProfileDetails($user) {

    $user = array_dot($user);

    return [
        'id' => $user['id'],
        'name' => $user['name'],
        'handle' => $user['screen_name'],
        'profile_pic' => str_replace('_normal', '_400x400', $user['profile_image_url']),
        'description' => [
            'about' => $user['description'],
            'location' => $user['location'],
            'url' => ($user['url']) ? $user['entities.url.urls.0.display_url'] : ''
        ],
        'statistics' => [
            'tweets' => $user['statuses_count'],
            'following' => $user['friends_count'],
            'followers' => $user['followers_count'],
        ]
    ];
}

function getTweets($tweets)
{
    return array_map(function($tweets) {

        $tweet = array_dot($tweets);

        return [
            'id' => $tweet['id'],
            'time' => $tweet['created_at'],
            'tweet' => $tweet['text'],
            'user' => [
                'id' => $tweet['user.id'],
                'name' => $tweet['user.name'],
                'handle' => $tweet['user.screen_name'],
                'profile_pic' => $tweet['user.profile_image_url'],
            ],
            'entities' => [
                'reply' => ($tweet['in_reply_to_status_id']) ? $tweet['in_reply_to_screen_name'] : '',
//                'photo' => ($tweet['entities.urls.display_url']) ?: '',
//                'video' => ($tweet['entities.urls.display_url']) ?: ''
            ]
        ];
    }, $tweets);
}

function getTimeLink($time, $id)
{
    $dateTime = new DateTime($time);
    $d = Carbon::instance($dateTime);

    return '<a href="#' . $id . '" data-toggle="tooltip" class="tooltips" title="' . $d->diffForHumans() . '" data-original-title="' . $d->diffForHumans() . '">' . $d->toFormattedDateString() . '</a>';
}

function getTopProfiles($handles)
{
    $profiles = getProfiles($handles)->toArray();

    uasort($profiles, function($a, $b) {
        return $b['statistics.followers'] - $a['statistics.followers'];
    });

    return new \Illuminate\Support\Collection($profiles);
}

function getProfiles($handles)
{
    $profiles = array_map(function($handles) {
        $timeline = Cache::tags('twitter')->get($handles['handle']);
        return array_dot(getProfileDetails($timeline[0]['user']));
    }, $handles);

    return new \Illuminate\Support\Collection($profiles);
}

function activityFeed($handles)
{
    $tweets = [];

    foreach($handles as $handle) {
        $timeline = getTweets( Cache::tags('twitter')->get($handle['handle']) );

        foreach($timeline as $tweet) {
            $time = $tweet['time'];
            $dt = new \DateTime($time);
            $carbon = Carbon::instance($dt);

            $tweet['rel_time'] = $carbon->timestamp;
            $tweet['time'] = Twitter::ago($time);

            $tweets[] = array_dot($tweet);
        }
    }

    uasort($tweets, function($a, $b) {
        return $b['rel_time'] - $a['rel_time'];
    });

    return new \Illuminate\Support\Collection($tweets);
}