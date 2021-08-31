<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPShopify\ShopifySDK;
use PHPShopify\AuthHelper;

class AuthorizeController extends Controller
{
    public function index()
    {
        ShopifySDK::config([
            'ShopUrl' => 'ttanaka-test.myshopify.com',   // アプリをインストールするショップURL
            'ApiKey' => 'c0fca3837c2b2ca04883e4f7fd3b8354',  // アプリ管理画面に表示されるAPIキー
            'SharedSecret' => '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', // アプリ管理画面に表示されるAPIシークレットキー
        ]);


        $scopes = 'read_products,write_products,read_script_tags,write_script_tags'; // 作成したいshopifyアプリに与えたい権限を記載する。別途公式参照(https://shopify.dev/api/usage/access-scopes)

        $redirectUrl = 'https://881f-240f-3a-c381-1-b95e-abff-3bb5-53cb.ngrok.io/callback';           // アプリのリダイレクトURL
        AuthHelper::createAuthRequest($scopes, $redirectUrl);

        exit;
    }
}
