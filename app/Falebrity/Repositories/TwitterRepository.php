<?php

namespace Falebrity\Repositories;

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

        if ($celebrity->updated_at->diffInMinutes() > 5) {
            $old_cache = (Cache::tags('twitter')->has($handle)) ? Cache::tags('twitter')->get($handle) : [];

            $new_cache = Twitter::getUserTimeline([
                'screen_name' => $handle,
                'format' => 'json'
            ]);

            // now so diff and push to Pusher..
            \Log::info('diff_cache', array_diff($old_cache, $new_cache));

            $celebrity->updated_at = Carbon::now();
            $celebrity->save();

            Cache::tags('twitter')->forever($handle, $new_cache);
        }

        return Cache::tags('twitter')->get($handle);
    }

}