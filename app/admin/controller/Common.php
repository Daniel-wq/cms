<?php namespace app\admin\controller;

use houdunwang\middleware\Middleware;
use houdunwang\route\Controller;

class Common extends Controller{
    /**
     * 自动加载方法
     * Common constructor.
     */
    public function __construct(){
        //使用中间件验证是否登陆
        Middleware::set('auth',['except'=>['login','logout']]);
    }
}
