<?php


namespace app\admin\controller;

use houdunwang\route\Controller;
use system\model\User;

class Entry extends Common
{
    public function index()
    {
    	//查询操作
	    //$data = User::get()->toArray();
	    //$data = User::find(1)->toArray();
	    //$data = User::where('username','user')->first()->toArray();
	    //p($data);

	    //添加和修改操作
//	    $model = User::find(3) ?: new User();
//	    $model->username = 'guest';
//	    $model->password = 'mima123';
//	    $model->save();


        return View::make();
    }


    public function lists(){
	    return View::make();

    }
}