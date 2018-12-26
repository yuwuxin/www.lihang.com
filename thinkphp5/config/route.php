<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::pattern([
    'id' => '\d+',
    'name' => '\w+',
]);
/*
//url
Route::get('api/','api/index/index');

Route::get('api/sites','api/index/sites');
//Route::get('api/sites','api/index/sites',['cache'=>3600]);

Route::post('api/token','api/index/token');

//可选变量 id?
Route::get('item-<name><id?>','api/index/sites',[],['name'=>'[a-zA-Z]+','id'=>'\d+']);

//支持对路由参数的可选定义 []
Route::get('api/:year/[:month]$','api/index/index');

//路由完全匹配 $
Route::get('api/:year/[:month]$','api/index/index');

//全局MISS路由
Route::miss('api/index/miss');

//闭包定义
Route::get('hello/:name',function($name){
    return 'hello i am '.$name;
});*/