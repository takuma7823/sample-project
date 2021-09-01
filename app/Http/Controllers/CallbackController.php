<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPShopify\ShopifySDK;
use PHPShopify\AuthHelper;
use App\Models\Store;

class CallbackController extends Controller
{
    public function index(Request $request)
    {
        ShopifySDK::config([
            'ShopUrl' => 'ttanaka-test.myshopify.com',
            'ApiKey' => 'c0fca3837c2b2ca04883e4f7fd3b8354',
            'SharedSecret' => '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',
        ]);
        $value = $request->input('shop');
        $accessToken = AuthHelper::getAccessToken();
        Store::insert($value,$accessToken);
        if (!isset($accessToken))
        {
            exit;
        }
        $config = ShopifySDK::$config;
        // ShopifySDKオブジェクト 取得
            $shopify = new ShopifySDK([
                'ShopUrl' => $config['ShopUrl'],
                'AccessToken' => $accessToken
            ]);
        return view('welcome');
     }
     public function index2() {
        return view('welcome');
    }
}
