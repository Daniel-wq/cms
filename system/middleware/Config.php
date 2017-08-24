<?php namespace system\middleware;

use houdunwang\middleware\build\Middleware;
use houdunwang\request\Request;
use system\model\Config as ConfigModel;
class Config implements Middleware{
	//执行中间件
    public function run($next) {
        //增加检测是否已经安装
        if (!is_file('lock.php') && !preg_match('#system/install#',Request::get('s'))){
            go('system/install/copyright');
        }

        //如果是备份控制器，那么不用执行中间件，如果表全部被删除，一旦使用还原就会触发全局中间件，但是没有config表就会报错
        if (is_file('lock.php')) {
            if (CONTROLLER != 'backup') {
                $model = ConfigModel::find(1);
                if ($model) {
                    $data = $model->pluck('content');
                    v('config', json_decode($data, true));
                }
            }
        }
        //模板路径
        $template = 'template/' . ( IS_MOBILE ? 'mobile' : 'web' );
        //定义静态资源常量
        define( '__TEMPLATE__', __ROOT__ . '/' . $template );
        define( 'TEMPLATE',  $template );
        $next();
    }
}