<?php

use Folebrity\Repositories\TwitterRepository;

class SudoController extends BaseController {

	private $twitter;

    public function __construct(TwitterRepository $twitter)
    {
        $this->twitter = $twitter;
    }

	public function cacheAll()
	{

	}

	public function cache($handle)
	{

	}
}