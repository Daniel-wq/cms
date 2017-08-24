<?php namespace app\system\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\backup\Backup as BackupService;
class Backup extends Common {
    /**
     * 备份
     */
    public function run(){
        $config = [
            'size' => 2,//分卷大小单位KB
            'dir'  => 'backup/' . date( "Ymdhis" ),//备份目录
        ];
        $status = BackupService::backup( $config, function ( $result ) {
            if ( $result['status'] == 'run' ) {
                //备份进行中
                $msg = $result['message'];
                //刷新当前页面继续下次
                //echo "<script>setTimeout(function()		{location.href='{$_SERVER['REQUEST_URI']}'},100);</script>";
                echo view('',compact('msg'));
                exit;
            } else {
                //备份执行完毕
                //echo $result['message'];
                echo $this->setRedirect('lists')->success($result['message']);
                //因为在闭包中，所以用exit代替return
                exit;
            }
        } );
        if($status===false){
            //备份过程出现错误
            echo  BackupService::getError();
        }
    }

    /**
     * 备份列表
     * @return mixed
     */
    public function lists(){
        $dirs = BackupService::getBackupDir('backup');
        //p($dirs);
        return view('',compact('dirs'));
    }

    /**
     * 还原备份
     */
    public function recovery() {
        //要还原的备份目录
        $config=['dir'=>Request::get('path')];
        $status = BackupService::recovery( $config, function ( $result ) {
            if ( $result['status'] == 'run' ) {
                //还原进行中
                $msg = $result['message'];
                //刷新当前页面继续执行
                //echo "<script>setTimeout(function(){location.href='{$_SERVER['REQUEST_URI']}'},1000);</script>";
                echo view('',compact('msg'));
                exit;
            } else {
                //还原执行完毕
                //echo $result['message'];
                echo $this->setRedirect('lists')->success($result['message']);
                //因为在闭包中，所以用exit代替return
                exit;
            }
        } );
        if($status===false){
            //还原过程出现错误
            echo  Backup::getError();
        }
    }


    /**
     * 删除备份
     * @return array
     */
    public function remove(){
        Dir::del(Request::get('path'));
        return $this->setRedirect('lists')->success('删除成功');
    }
}
