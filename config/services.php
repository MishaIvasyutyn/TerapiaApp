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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '892527307895889',
        'client_secret' => '004f5bd2b70bd03a391895b2d14dd37b',
        'redirect' => 'https://test-amif.herokuapp.com/callback/facebook',
    ],
    'google' => [
        'client_id' => '664219392601-08pfl18hdffgj686uhdb2vom6rs4mbaj.apps.googleusercontent.com',
        'client_secret' => '_MiXBJXshuGqIF_V17E9SC4H',
        'redirect' => 'https://test-amif.herokuapp.com/callback/google',
    ],

];
