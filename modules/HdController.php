<?php
namespace modules;
use houdunwang\middleware\Middleware;
use houdunwang\request\Request;
use houdunwang\route\Controller;
use system\model\Modules;

class HdController extends Controller {
    /**
     * 构造函数
     */

    public function __construct()
    {
        //使用中间件验证是否登陆
        Middleware::set('auth');
    }

    //载入微信的插件类
    use Wechat;
    /**
     * 载入模板
     * @param string $tpl
     * @param array $var
     *
     * @return mixed
     */
    public function display($tpl = '',$var = []){
        //echo 123;
        //m=student&a=controller/grade/lists
        //模块名称
        $m = Request::get('m');
        //控制器和方法名称
        $a = strtolower(Request::get('a'));
        $arr = explode('/', $a);
        //p($arr);exit;
        //有可能用户自己传递模板名称
        if(empty($tpl)){
            $method = $arr[2];
        }else{
            $method = $tpl;
        }
        $module = Modules::where('name',$m)->first();

        $template = ($module['is_system'] ? 'modules' : 'addons') . "/{$m}/template/{$arr[1]}/{$method}";

        //return view($template,$var);
        echo view($template,$var);
        exit;
    }
}