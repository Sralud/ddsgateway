<?php

return [
    'users1' => [
        'base_uri' => env('USERS1_SERVICE_BASE_URL', 'https://lumen-api-1rq3.onrender.com'),
        'secret' => env('USERS1_SERVICE_SECRET'),
    ],

    'users2' => [
        'base_uri' => env('USERS2_SERVICE_BASE_URL', 'https://ddsbe2-zdn1.onrender.com'),
        'secret' => env('USERS2_SERVICE_SECRET'),
    ],
];