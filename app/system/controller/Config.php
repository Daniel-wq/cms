<?php namespace app\system\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\view\View;
use system\model\Config as ConfigModel;
use system\model\User as UserModel;
class Config extends Common{
    /**
     * 网站配置
     */
    public function setting(){
        $model = ConfigModel::find(1) ?: new ConfigModel();
        if(IS_POST){
            $post = Request::post();
            $model->content = json_encode($post,JSON_UNESCAPED_UNICODE);
            $model->save();
            return $this->setRedirect('refresh')->success('保存成功');
        }

        $model = $model['content'] ? json_decode($model['content'],true) : [];
        return View::make()->with(compact('model'));
    }


    /**
     * 修改密码
     */
    public function changePassword(){
        if (IS_POST){
            //获得数据
            $post = Request::post();
            //p($post);
            //新密码不得少于4位
            if (strlen($post['password1']) < 4){
                return ['valid'=>false,'message'=>'新密码不得少于4位'];
            }

            //两次密码是否一致
            if ($post['password1'] != $post['password2']){
                return ['valid'=>false,'message'=>'两次密码不一致'];
            }

            //旧密码是否正确
            $model = UserModel::find(Session::get('user.uid'));
            $userData = $model->first();
            //p($userData->toArray());exit;

            if (!password_verify($post['password'],$userData['password'])){
                return ['valid'=>false,'message'=>'旧密码错误'];
            }

            //修改密码
            $model->password = password_hash($post['password1'],PASSWORD_DEFAULT);
            $model->save();
            return ['valid'=>true,'message'=>'修改成功'];

        }

        return View::make();
    }
}
