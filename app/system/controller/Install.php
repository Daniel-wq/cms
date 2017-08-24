<?php namespace app\system\controller;


use houdunwang\dir\Dir;
use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\validate\Validate;
use system\model\User;

class Install extends Controller{
    /**
     * 构造方法，检测是否已经安装
     * Install constructor.
     */
    public function __construct()
    {
        //如果已经安装，则不需要访问当前
        $this->isInstalled();
    }

    /**
     * 检测是否已经安装
     * @return mixed
     */
    public function isInstalled(){
        if (is_file('lock.php')){
            return view('isInstalled');
            //return $this->setRedirect(u('admin.user.login'))->success('系统已经安装，不允许重复安装');
        }
    }
    /**
     * 版权信息页面
     */
    public function copyright(){
        return view();
    }

    /**
     * 环境检测页面
     * @return mixed
     */
    public function environmental(){
        $data['php_version'] = PHP_VERSION;//php版本信息
        //检测版本是否符合要求
        $data['version'] = version_compare($data['php_version'],'5.6','>');
        $data['server_software'] = $_SERVER['SERVER_SOFTWARE'];
        $data['pdo'] = extension_loaded('pdo');
        $data['curl'] = extension_loaded('curl');
        $data['gd'] = extension_loaded('gd');
        return view('',compact('data'));
    }

    /**
     * 连接数据库
     * @return array|mixed
     */
    public function database(){
        if (IS_POST){
            $post = Request::post();
            //1、做验证
            Validate::make([
                ['host','required','主机地址不能为空',Validate::MUST_VALIDATE],
                ['user','reauired','用户名不能为空',Validate::MUST_VALIDATE],
                ['password','reauired','密码不能为空',Validate::MUST_VALIDATE],
                ['database','reauired','数据库名称不能为空',Validate::MUST_VALIDATE],
            ]);
            //2、连接数据库
            try{
                $dsn = "mysql:host={$post['host']};dbname={$post['database']}";
                $pdo = new \PDO($dsn,$post['user'],$post['password']);
                //将用户提交的数据库信息写入文件中
                Dir::create('data');
                file_put_contents('data/database.php',"<?php\r\nreturn ".var_export($post,true).";?>");

            }catch (\Exception $e){
                return $this->error($e->getMessage());
            }
            return $this->success('连接成功');
        }
        return view();
    }

    /**
     * 创建数据表
     */
    public function tables(){


        $sql = file_get_contents('./cms.sql');
        //$2y$10$x1j7kE8/pM.hGrmVxc8o0uZqoxFhvvSiDWco3cKVBRwfS9N3yNw26
        //cli('hd seed:make');
        //给用户表写入数据
        $post = include 'data/database.php';
        $sql = str_replace(['CREATE TABLE `','INSERT INTO `'],['CREATE TABLE `' . $post['prefix'],'INSERT INTO `' . $post['prefix']],$sql);
        //执行sql文件
        Schema::sql($sql);
        $model = new User();
        $model['username'] = $post['admin_username'];
        $model['password'] = password_hash($post['admin_password'],PASSWORD_DEFAULT);
        $model->save();
        go('system/install/finish');
    }

    public function finish(){
        if (is_file('data/database.php')){
            file_put_contents('lock.php','');
        }
        return view();
    }
}
