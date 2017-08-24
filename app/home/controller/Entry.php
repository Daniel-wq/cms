<?php namespace app\home\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\view\View;
use system\model\Category;
use system\model\Modules;
use system\model\Article;
class Entry extends Controller
{
    private $template;
    //构造方法，实例化类时 自动执行
    public function __construct() {
        //?m=student&a=controller/grade/lists
        //模块运行处理
        $this->runModule();

    }

    /**
     * 首页
     * @return bool|mixed
     */
    public function index() {


        //1、获得数据库中栏目表的内容
        //2、为了在页面头部，遍历数据显示
        $CategoryData = Category::get();
        //p($CategoryData->toArray());
        //载入页面并传入数据
        return $this->display('index.html',compact('CategoryData'));

    }

    /**
     * 列表页
     */
    public function lists(){
        //1、获得数据库中栏目表的数据
        //2、为了在列表页显示数据库中数据
        $CategoryData = Category::get();
        //1、获得栏目表中相应的单条数据
        //2、为了判断该条数据是否是封面栏目
        $model = Category::find(Request::get('cid'));
        //1、组合路径
        //2、如果是封面栏目就进入cover页面，如果不是就进入列表页面
        $tpl = $model['iscover'] ? 'cover.html' : 'lists.html';
        //载入页面并传入数据
        return $this->display($tpl,compact('CategoryData'));

    }

    /**
     * 内容页
     */
    public function content(){
        $aid = Request::get('aid');
        //获得对应文章的数据
        $hdcms = Article::find($aid);
        //dd($hdcms);
        $catname = $hdcms->category->catname;
//        dd($catname);
        $hdcms = $hdcms->toArray();
        //处理文章点击次数
        Article::where('aid',$aid)->increment('click',1);
        //文章的栏目名称
        $hdcms['catname'] = $catname;
        //载入页面并传入参数
        return $this->display('content.html',compact('hdcms'));

    }

    /**
     * 运行模板
     * @return bool|mixed
     */
    public function runModule() {
        //?m=student&a=controller/grade/lists
        $get = Request::get();
        //接收m和a的get参数，并且转为小写，因为目录全是小写
        $m = strtolower( $get['m'] );
        //查询模块数据库的信息
        $modules = Modules::where('name',$m)->first();
        //控制器类名和方法名
        $a = strtolower( $get['a'] );
        if ( $m && $a && $modules) {
            //处理类名和方法名
            $a = explode( '/', $a );
            //p($a);判断是系统模块还是第三方插件模块
            $dir = $modules['is_system'] ? 'modules' : 'addons';
            //$className = "\addons\student\controller\Grade";
            $className = "\\{$dir}\\{$m}\\{$a[0]}\\" . ucfirst( $a[1] );
            //echo $className;
            echo call_user_func_array( [ new $className, $a[2] ], [] );
            exit;
        }

        return false;

    }

    /**
     * 自定义的载入页面的方法
     * @param $tpl
     * @param array $var
     * @return mixed
     */
    private function display($tpl,$var = []){
//        dd(TEMPLATE . '/' . $tpl);
        return view(TEMPLATE . '/' . $tpl,$var);
    }
}























