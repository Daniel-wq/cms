<?php namespace app\admin\controller;


use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\session\Session;
use houdunwang\view\View;
use system\model\User as UserModel;

class User extends Common
{
    /**
     * 登陆
     * @return mixed
     */
    public function login()
    {
        if (IS_POST) {
            $post = Request::post();
            $username = trim($post['username']);
            $password = trim($post['password']);
            //p($post);
            //如果用户名或密码为空
            if (empty($username) || empty($password)) {
                return ['valid' => false, 'message' => '用户名或密码不能为空'];
            }
            //用户是否存在
            $userData = UserModel::where('username', $username)->first();
            if (!$userData) {
                return ['valid' => false, 'message' => '用户名不存在'];
            }
            //密码是否正确
            if (!password_verify($password, $userData['password'])) {
                return ['valid' => false, 'message' => '密码错误'];
            }

            Session::set('user', ['uid' => $userData['uid'], 'username' => $username]);
            return ['valid' => true, 'message' => '登陆成功'];
        }
//$password = password_hash('admin',PASSWORD_DEFAULT);
        //p($password);exit;
        //打印框架所定义的常量
        //print_const();exit;
        return View::make();
    }


    /**
     * 退出登陆
     * @return array
     */
    public function logout(){
        Session::flush();
        return $this->setRedirect(__WEB__ .'/login')->success('退出成功');
    }


}
