<?php
/**
 * Created by PhpStorm.
 * User: lihang
 * Date: 18-12-17
 * Time: 下午4:29
 */

namespace app\api\controller;


class Index
{
    public function index()
    {
        echo "version 1.0.0";
    }

    public function sites()
    {
        $data = ['name' => 'thinkphp', 'url' => 'thinkphp.cn'];
        return ['data' => $data, 'code' => 1, 'message' => '操作完成'];
    }

    public function info()
    {
        echo "api info ...";
    }

    public function token()
    {
        $data = ['token' => md5('token')];
        return ['code' => 1, 'data' => $data, 'message' => '操作完成'];
    }
}