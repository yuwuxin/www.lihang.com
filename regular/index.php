<?php
/**
 * Created by PhpStorm.
 * User: lihang
 * Date: 18-12-10
 * Time: 下午4:34
 */
require "libs/Smarty.class.php";

class index
{
    public function __construct()
    {
        $this->index();
    }

    public function index(){
        $smarty = new Smarty();
        $smarty->assign('title','正则表达式！');
        $smarty->display('templates/index.tpl');
    }
}

new index();