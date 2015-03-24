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
        if (Auth::check()) return 'logged in';

        return 'still not logged in';
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