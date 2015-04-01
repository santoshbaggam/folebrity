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
        $celebrities = Celebrity::with('details', 'domains', 'categories')->get(['twitter_handle as handle'])->toArray();

        $celebrities = getProfiles($celebrities);

        return View::make('celebrities.index', compact('celebrities'));
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

        // request to generate new tokens if anything goes wrong.. behalf of the client!

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