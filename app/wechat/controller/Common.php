<?php namespace app\wechat\controller;

use houdunwang\middleware\Middleware;
use houdunwang\route\Controller;

class Common extends Controller{
    //动作
    public function __construct(){
        //用中间件验证是否登陆
        Middleware::set('auth');
    }
}
