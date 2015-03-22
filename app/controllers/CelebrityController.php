<?php

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
        return $this->twitter->getUserTimeline($handle);
    }

}