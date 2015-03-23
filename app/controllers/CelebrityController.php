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
        if (Input::has('domain')) {
            return Domain::where('name', ucfirst(Input::get('domain')))->first()->celebrities;
        }

        return Celebrity::all();
    }

    public function show($handle)
    {
        $timeline = $this->twitter->getUserTimeline($handle);

        // if tokens are invalid or expired
        if (isset($timeline['errors'])) {
            if ($timeline['errors'][0]['code'] == (88 || 89))
                $timeline = Cache::tags('twitter')->get($handle);
        }
return $timeline;
        $profile = getProfileDetails($timeline);

        $timeline = getTweets($timeline);

        return View::make('celebrities.profile')
                            ->with('profile', $profile)
                            ->with('tweets', $timeline);
    }

}