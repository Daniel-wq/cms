<?php namespace system\middleware;

use houdunwang\middleware\build\Middleware;
use houdunwang\session\Session;

class Auth implements Middleware{
	//执行中间件
	public function run($next) {
	    //判断用户是否登陆
         if (!Session::get('user')){

             return message('请登录',__ROOT__ . '/login');
         }
        //echo "中间件执行了";
         $next();
	}
}