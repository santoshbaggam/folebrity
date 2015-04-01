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
        $c = new Celebrity;

        if (Input::has('domains')) {
            $c = $c->whereHas('domains', function($q) {
                $q->whereIn('domains.id', Input::get('domains'));
            });
        }

        if (Input::has('categories')) {
            $c = $c->whereHas('categories', function($q) {
                $q->whereIn('categories.id', Input::get('categories'));
            });
        }

        if (Input::has('gender')) {
            $c = $c->whereHas('details', function($q) {
                $q->whereIn('details.gender', Input::get('gender'));
            });
        }

        $celebrities = getProfiles($c->get(['twitter_handle as handle'])->toArray());

        Input::flash();
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