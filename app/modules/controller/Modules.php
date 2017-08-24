<?php namespace app\modules\controller;

use houdunwang\database\Schema;
use houdunwang\dir\Dir;
use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\validate\Validate;
use houdunwang\view\View;
use system\model\Keywords;
use system\model\Modules as ModulesModel;

class Modules extends Common {

    /**
     * 分配第三方插件模块的信息
     */
    public function assignModules(){
        //获取非系统模块的数据
        $modules = ModulesModel::where('is_system',0)->get();
        View::with(compact('modules'));
    }


    /**
     * 模块列表
     * @return mixed
     */
    public function lists(){
        //获取addons目录下面的插件目录
        $data = Dir::tree('addons');
        //p($data);
        //获取安装过的第三方插件模板，是一个一维数组
        $modules = ModulesModel::where('is_system',0)->lists('name');
        //循环设计好的插件
        foreach ($data as $k =>$v){
            //获取插件的信息
            $jsonFile = "addons/" . $v['basename'] . '/package.json';
            $arr = json_decode(file_get_contents($jsonFile),true);
            //如果安装过的installed标识1，否则0
            $arr['installed'] = in_array($v['basename'],$modules) ? 1 : 0;
            $data[$k] = $arr;

        }

        $this->assignModules();
        //p($data);
        return view('',compact('data'));

    }

    /**
     * 设计模块
     * @return array
     */
    public function design() {
        if ( IS_POST ) {
            //p(Request::post());
            $post = Request::post();
            //验证（一定要搞明白，为什么要先验证！！！）
            $res = Validate::make( [
                [ 'name', 'regexp:/^[a-zA-Z]\w+$/ ', '模块标识必须为数字字母下划线的组合且必须以字母开头', Validate::MUST_VALIDATE ]
            ], $post );
            if ( $res === false ) {
                return Validate::getError();
            }
            //模块的标识
            $name = $post['name'];
            //1、是否存在模块目录
            if ( is_dir( 'addons/' . $name ) ) {
                return $this->error( '模块目录已存在' );
            }
            //2、是否存在数据库的记录
            if ( ModulesModel::where( 'name', $name )->first() ) {
                return $this->error( '模块已存在' );
            }
            //3、创建模块的目录和processor文件
            $this->createModule( $name );

            //保存模块信息文件创建
            //三个json(阻止中文编码，美观打印，阻止转义)
            file_put_contents('addons/' . $name . '/package.json',json_encode($post,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

            return $this->setRedirect( u( 'lists' ) )->success( '设计模块成功' );
        }

        $this->assignModules();
        return View::make();

    }

    /**
     * 安装
     * @return array
     */
    public function install(){
        $jsonFile = "addons/" . Request::get('name') . '/package.json';
        $post = json_decode(file_get_contents($jsonFile),true);
        $model = new ModulesModel();
        $model->save($post);
        //创建模块插件的表
        if ($post['sql']) Schema::sql($post['sql']);
        return $this->setRedirect(u('lists'))->success('安装成功');
    }




    /**
     * 创建模块目录和文件
     * @param $name
     */
    private function createModule( $name ) {
        $dirs = [
            "controller",
            "system",
            "model",
            "template"
        ];
        foreach ( $dirs as $d ) {
            $d = "addons/{$name}/" . $d;
            is_dir( $d ) || mkdir( $d, 0777, true );
        }
        //创建微信处理的类
        $str = <<<str
<?php
namespace addons\\{$name}\system;
use modules\HdProcessor;
class Processor extends HdProcessor {
    public function handle(\$kid){
    
    }
}
str;
        file_put_contents( 'addons/' . $name . '/system/Processor.php', $str );
        $str = <<<str
<?php
namespace addons\\{$name}\controller;
use modules\HdController;
class Entry extends HdController {
    public function index(){
    
    }
}
str;
        file_put_contents( 'addons/' . $name . '/controller/Entry.php', $str );


    }

    /**
     * 卸载模块
     * @return array
     */
    public function uninstall() {
        $name = Request::get( 'name' );
        //1.删除数据库内容
        $data = ModulesModel::where( "name='{$name}'")->delete();
        //2.删除关键词表的数据
        Keywords::where("module",$name)->delete();


        return $this->setRedirect( u( 'lists' ) )->success( '卸载成功' );

    }



}
































