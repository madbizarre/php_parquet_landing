<?php

return [

    'mailgun' => [
        'domain' => 'sandbox755ce66a5004448882858c5166f6fde6.mailgun.org',
        'secret' => 'key-3cbb997db7fe3af835f37d8a8fdcad92',
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
