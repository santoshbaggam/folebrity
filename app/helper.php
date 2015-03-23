<?php

use Carbon\Carbon;

function getProfileDetails($user) {

    $user = array_dot($user);

    return (object) [
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

        return (object) [
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

function getTimeLink($time)
{
    $dateTime = new DateTime($time);
    $d = Carbon::instance($dateTime);

    return '<a href="#" data-toggle="tooltip" class="tooltips" title="' . $d->diffForHumans() . '" data-original-title="' . $d->diffForHumans() . '">' . $d->toFormattedDateString() . '</a>';
}