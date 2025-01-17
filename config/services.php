<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' => [
        'client_id' => 'Ov23liMFQjS7Bpogie78',
        'client_secret' => '64430c08dc7876543a82194937d675885744f343',
        'redirect' => env('GITHUB_CLIENT_REDIRECT'),
    ],

    'google' => [
        'client_id' => '732991157520-7g2lkp8jnv4o2hrmpgt4ck4ke5ei2afc.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
