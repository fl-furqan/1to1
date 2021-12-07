<?php

return [
    'mode' => env('CHECKOUT_MODE', 'sandbox'),
    'checkout_secret_key' => env('CHECKOUT_SK'),
    'checkout_public_key' => env('CHECKOUT_PK'),
    'checkout_link' => env('CHECKOUT_LINK'),
];
