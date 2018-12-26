<?php
/**
 * Created by PhpStorm.
 * User: lihang
 * Date: 18-12-17
 * Time: 下午4:29
 */

namespace app\api\controller;


use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    public function _initialize()
    {
        echo 'init<br/>';

        //Request::hook('index',$this->info());
    }

    public function index()
    {

        //$request = Request::instance();

        /*// 获取当前域名
        echo $request->domain() . '<br/>';

        // 获取当前入口文件
        echo $request->baseFile() . '<br/>';

        //当前模块
        echo $request->module() . '<br/>';

        //当前控制器
        echo $request->controller() . '<br/>';

        //获取当前方法
        echo $request->action() . '<br/>';

        //获取参数
        //print_r($request->param());
        //print_r($request->only('id'));
        print_r($request->except('id')) . '<br/>';

        //获取路由
        print_r($request->route()) . '<br/>';

        echo '调度信息：';
        print_r($request->dispatch()) .'<br/>';

        echo request()->isGet() .'<br/>';

        echo $request->header('host');

        echo "version 1.0.0";
        $this->success('新增成功', 'User/list');*/
        $user = '';

        Request::instance()->bind('user',$this->sites());
        echo $user;
    }

    public function sites()
    {

        $result = Db::query('select * from app_channel where id=?',[66]);

        return ['data' => $result, 'code' => 1, 'message' => '操作完成'];
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

    public function miss()
    {
        return ['code' => 1, 'data' => array(), 'message' => 'fuck! What do you want?'];
    }
}