<?php

use Folebrity\Repositories\TwitterRepository;

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

        return Celebrity::with('details.country', 'domains', 'categories')->get();
    }

    public function show($handle)
    {
        try
        {
            $timeline = $this->twitter->getUserTimeline($handle);
        }
        catch (Exception $e)
        {
            $timeline = Cache::tags('twitter')->get($handle);
        }

//        if tokens are invalid or expired
//        if (isset($timeline['errors'])) {
//            if ($timeline['errors'][0]['code'] == (88 || 89))
//                $timeline = Cache::tags('twitter')->get($handle);
//        }

        $data = [
            'profile' => getProfileDetails($timeline[0]['user']),
            'tweets'  => getTweets($timeline)
        ];

        return View::make('celebrities.profile')->with($data);
    }

    public function search()
    {
        $q = Input::get('q');
        return Redirect::to("/$q");
    }

}