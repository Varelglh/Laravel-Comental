<?php

return [

    'driver' => env('SESSION_DRIVER', 'database'), // Gunakan 'database' sebagai driver
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,

    'files' => storage_path('framework/sessions'),

    'cookie' => env('SESSION_COOKIE', 'laravel_session'),

    'path' => '/',
    'domain' => env('SESSION_DOMAIN', null),
    'secure' => env('SESSION_SECURE_COOKIE', false),
    'http_only' => true,
    'same_site' => null,

    'store' => null,

    'lottery' => [2, 100],

    'cookie_lifetime' => 43200,

    'database' => [
        'connection' => env('SESSION_CONNECTION', null),
    ],

    'table' => 'sessions',  // Nama tabel sessions
];
