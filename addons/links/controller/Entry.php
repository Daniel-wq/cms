<?php
namespace addons\links\controller;
use addons\links\model\Links;
use houdunwang\request\Request;
use modules\HdController;
class Entry extends HdController {
    /**
     * 显示页面
     */
    public function index(){
        $data = Links::orderBy('orderby','asc')->get();
        //载入页面并传入数据
        return $this->display('',compact('data'));
    }

    /**
     * 添加
     */
    public function post(){
        $model = Links::find(Request::get('id')) ?: new Links();
        if (IS_POST){
            $model->save(Request::post());
            //p($model);
            return $this->setRedirect(url('links.Entry.index'))->success('保存成功');
        }
        return $this->display('',compact('model'));
    }

    /**
     * 删除
     * @return array
     */
    public function remove(){
        Links::find(Request::get('id'))->destory();
        return $this->setRedirect(url('links.entry.index'))->success('删除成功');
    }
}