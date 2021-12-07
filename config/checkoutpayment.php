<?php

return [
    'LIVE' => [
        'CHECKOUT_SK'   => env('CHECKOUT_LIVE_SK'),
        'CHECKOUT_PK'   => env('CHECKOUT_LIVE_PK'),
    ],
    'SANDBOX' => [
        'CHECKOUT_SK' => env('CHECKOUT_SANDBOX_SK'),
        'CHECKOUT_PK' => env('CHECKOUT_SANDBOX_PK'),
    ]
];
