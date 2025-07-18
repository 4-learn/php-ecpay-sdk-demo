<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-ecpay', function () {
    try {
        // 測試 SDK 是否能正常載入
        $factory = new \Ecpay\Sdk\Factories\Factory([
            'hashKey' => config('ecpay.hash_key'),
            'hashIv' => config('ecpay.hash_iv'),
        ]);
        
        return response()->json([
            'status' => 'success',
            'message' => '綠界 SDK 載入成功！',
            'config' => [
                'merchant_id' => config('ecpay.merchant_id'),
                'test_mode' => config('ecpay.test_mode'),
            ]
        ]);
        
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'SDK 載入失敗：' . $e->getMessage()
        ]);
    }
});
