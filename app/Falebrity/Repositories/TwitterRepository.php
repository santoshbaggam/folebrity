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

        dd($celebrity->updated_at->diffInMinutes());
        if ($celebrity->updated_at->diffInMinutes() > 1) {
            dd('querying');
            $old_cache = Cache::tags('twitter')->get($handle);

            $new_cache = Twitter::getUserTimeline([
                'screen_name' => $handle,
                'format' => 'array',
                'include_rts' => false
            ]);

            if (Cache::tags('twitter')->has($handle))
            {
                $this->instaPush($old_cache, $new_cache);
            }

            $celebrity->updated_at = Carbon::now();
            $celebrity->save();

            Cache::tags('twitter')->forever($handle, $new_cache);
        }

        return Cache::tags('twitter')->get($handle);
    }

    public function instaPush($old_data, $new_data)
    {

    }

}