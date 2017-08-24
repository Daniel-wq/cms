<?php namespace app\wechat\controller;


use system\model\Modules;
use houdunwang\middleware\Middleware;
use houdunwang\route\Controller;
use houdunwang\wechat\WeChat;
use system\model\Keywords;

class Api extends Controller{


    //创建构造方法
    public function __construct()
    {
        Middleware::set('wechatconfig');
        //框架提供的微信验证
        WeChat::valid();
    }


    /**
     * 回复消息
     */
    public function handle(){
        //消息管理模块
        $instance = WeChat::instance('message');
        //判断是否是关注事件
        if ($instance->isSubscribeEvent()){
            //向用户回复消息
            $instance->text(c('wechat.subscribe'));
        }

        //处理关键词回复
        $this->handleKeywords($instance->Content);

        //回复默认消息
        $instance->text(c('wechat.default'));
    }

    /**
     * 处理关键词回复 [用户给微信公账号发送的关键词内容]
     * @param $content
     */
    private function handleKeywords($content){
        //去关键词表查询到属于什么模块
        $keywordsModel = Keywords::where('content',$content)->first();
        //知道了模块的信息
        $modulesModel = Modules::where('name',$keywordsModel['module'])->first();
        if($modulesModel['is_wechat']){
            //$name = ($modulesModel['is_system'] ? 'modules' : 'addons') . "\\{$modulesModel['name']}\system\Processor";
            $name = ($modulesModel['is_system'] ? 'modules' : 'addons') . "\\{$modulesModel['name']}\system\Processor";
            call_user_func_array([new $name,'handle'],[$keywordsModel['content_id']]);
		}

    }
}
