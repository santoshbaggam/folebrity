<?php

class PageController extends BaseController {

    public function home()
    {
        $profiles = $this->getLists()->toArray();

        $profiles = getTopProfiles($profiles)->take(10)->toArray();

        return View::make('home')->with('profiles', $profiles);
    }

    public function dashboard()
    {
        $favourites = Auth::user()->favourites()->get(['twitter_handle as handle'])->toArray();

        if ($favourites)
        {
            $favourites = getTopProfiles($favourites)->toArray();
        }

//        dd($favourites);

        return View::make('dashboard')->with('favourites', $favourites);
    }

    public function getLists()
    {
        Cache::forget('celebrities.lists');

        if (Cache::has('celebrities.lists')) {
            return Cache::get('celebrities.lists');
        }

        $lists = Celebrity::get(['name as value', 'twitter_handle as handle']);

        Cache::forever('celebrities.lists', $lists);

        return $lists;
    }
}