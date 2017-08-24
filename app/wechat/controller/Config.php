<?php namespace app\wechat\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\view\View;
use system\model\WechatConfig;

class Config extends Common {
    /**
     * 微信配置
     */
    public function setting(){
        $model = WechatConfig::find(1) ?: new WechatConfig();
        if (IS_POST){
            return $this->saveConfig($model);
        }

        //把json转为数组
        $model = $model['content'] ? json_decode($model['content'],true) : [];
        //处理第一次没有数据的时候的默认token和encodingaeskey
        if (!$model){
            $model['token'] = md5(time());
            $model['encodingaeskey'] = md5(microtime(true)) . substr(md5(time()),0,11);
        }

        return View::make()->with(compact('model'));
    }


    /**
     * 回复消息
     * @return array
     */
    public function reply(){
        $model = WechatConfig::find(1) ?: new WechatConfig();
        if (IS_POST){
            return $this->saveConfig($model);
        }
        $model = $model['content'] ? json_decode($model['content'],true) : [];
        return View::make()->with(compact('model'));
    }

    /**
     * 保存设置
     * @param $model
     * @return array
     */
    public function saveConfig($model){
        $post = Request::post();
        $model['content'] = json_encode(array_merge(json_decode($model['content'],true),$post),JSON_UNESCAPED_UNICODE);
        $model->save();
        return $this->setRedirect('refresh')->success('保存成功');
    }







}
























