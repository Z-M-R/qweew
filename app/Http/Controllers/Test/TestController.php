<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Client;

class TestController extends Controller
{
    /*
        请求百度
    */
    public function baidu()
    {
        $url = 'https://theory.gmw.cn/2019-12/05/content_33377331.htm';
        $client = new Client();
        $response = $client->request('GET',$url);
        echo $response->getBody();
    }
}
