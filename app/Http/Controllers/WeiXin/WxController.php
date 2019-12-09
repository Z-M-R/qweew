<?php

namespace App\Http\Controllers\WeiXin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WxController extends Controller
{

    /*
        处理接入
    */
    public function wechat()
    {
        $token = '76b8fd82c97b80f0b4e23';    //开发提前设置好的 token
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $echostr = $_GET["echostr"];
        
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
    
        if( $tmpStr == $signature ){    //验证通过
            echo $echostr;
        }else{
            die("not ok");
        }
    }


    /*
        接收微信推送事件
    */
    public function receiv()
    {
        $log_file = "wx.log";
        //将接收的数据记录到日志文件
        $xml = file_get_contents("php://input");
        $data =date('Y-m-d H:i:s')  . $xml;
        file_put_contents($log_file,$data,FILE_APPEND);   //追加写
    }


    /*
        获取用户基本信息
    */
    public function getUserInfo()
    {
        $url = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN';

    }
}
