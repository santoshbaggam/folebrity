<?php

// You can find the keys here : https://dev.twitter.com/

return array(
	'API_URL'             => 'api.twitter.com',
	'API_VERSION'         => '1.1',
	'USE_SSL'             => true,

	'CONSUMER_KEY'        => getenv('twitter.consumer_key'),
	'CONSUMER_SECRET'     => getenv('twitter.consumer_secret'),
	'ACCESS_TOKEN'        => '',
	'ACCESS_TOKEN_SECRET' => '',
);