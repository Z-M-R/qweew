<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

// Route::get('/info',function(){
//     // info();
// });

Route::get('/user/adduser','User\LoginController@addUser');
Route::get('/user/add','User\LoginController@add');
Route::get('/test/baidu','Test\TestController@baidu');

// 微信开发

Route::get('/wx','WeiXin\WxController@wechat');

