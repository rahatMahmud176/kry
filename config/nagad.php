<?php

return [
    'sandbox_mode' => env('NAGAD_MODE', 'sandbox'),
    'merchant_id' => env('NAGAD_MERCHANT_ID',''),
    'merchant_number' => env('NAGAD_MERCHANT_NUMBER',''),
    'callback_url' => env('NAGAD_CALLBACK_URL', env('APP_URL').'/nagad/callback')
];
