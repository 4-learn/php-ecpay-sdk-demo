<?php

return [
    // 測試環境設定
    'test_mode' => env('ECPAY_TEST_MODE', true),
    
    // 商店資訊
    'merchant_id' => env('ECPAY_MERCHANT_ID', '2000132'),
    'hash_key' => env('ECPAY_HASH_KEY', '5294y06JbISpM5x9'),
    'hash_iv' => env('ECPAY_HASH_IV', 'v77hoKGq4kWxNNIS'),
    
    // API 網址
    'action_url' => env('ECPAY_TEST_MODE', true) 
        ? 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5'
        : 'https://payment.ecpay.com.tw/Cashier/AioCheckOut/V5',
    
    // 回傳網址
    'return_url' => env('ECPAY_RETURN_URL', ''),
    'notify_url' => env('ECPAY_NOTIFY_URL', ''),
    'client_back_url' => env('ECPAY_CLIENT_BACK_URL', ''),
];

