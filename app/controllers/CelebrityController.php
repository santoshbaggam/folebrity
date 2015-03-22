<?php

use Cache;
use Falebrity\Repositories\TwitterRepository;

class CelebrityController extends BaseController {

    private $twitter;

    public function __construct(TwitterRepository $twitter)
    {
        $this->twitter = $twitter;
    }

    public function index()
    {

    }

    public function show($handle)
    {
        $response = $this->twitter->getUserTimeline($handle);

        $response_obj = json_decode($response);

        // if tokens are invalid or expired
        if (isset($response_obj->errors)) {
            if ($response_obj->errors[0]->code == (88 || 89))
                $response = Cache::get('twitter'.$handle);
        }

        return $response;
    }

}