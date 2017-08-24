<?php namespace system\middleware;

use houdunwang\middleware\build\Middleware;
use system\model\WechatConfig as WechatConfigModel;
class WechatConfig implements Middleware{
	//执行中间件
	public function run($next) {
         $info = WechatConfigModel::first()->toArray();
         $dbConfig = json_decode($info['content'],true);
         //数据库配置项和系统的配置项合并，并且数据库配置项优先级高
        $newConfig = array_merge(c('wechat'),$dbConfig);
        //在写回配置项
        c('wechat',$newConfig);
         $next();
	}
}