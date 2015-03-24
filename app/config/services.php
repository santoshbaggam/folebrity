<?php

return [

    'pusher' => [
        'public' => getenv('pusher.public'),
        'secret' => getenv('pusher.secret'),
        'app_id' => getenv('pusher.app_id'),
    ],

];