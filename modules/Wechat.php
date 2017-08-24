<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 15:16
 */

namespace modules;


use houdunwang\request\Request;
use houdunwang\view\View;
use system\model\Keywords;

trait Wechat
{
    /**
     * 添加修改关键词
     */
    public function saveKeywords($data){
        if(!isset($data['content']) || empty($data['content'])){
            return false;
        }
        $m = isset($data['module']) ? $data['module'] : Request::get('m');
        //$data中已经有content_id和content，再把模块补上
        $data['module'] = $m;
        //添加或者编辑
        $where = [
            ['module',$m],
            ['content_id',$data['content_id']]
        ];
        $model = Keywords::where($where)->first() ?: new Keywords();
        $model->save($data);
    }

    /**
     * 分配关键词
     */
    public function assignKeywords($bid){
        $where = [
            ['content_id', $bid],
            ['module',Request::get('m')]
        ];
        $data = Keywords::where($where)->first();
        View::with('keywords',$data);
    }


    /**
     * 删除关键词
     */
    public function removeKeywords($bid){
        $where = [
            ['content_id', $bid],
            ['module',Request::get('m')]
        ];
        Keywords::where($where)->delete();
    }


}