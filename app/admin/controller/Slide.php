<?php namespace app\admin\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use system\model\Slide as SlideModel;
class Slide extends Controller{
    /**
     * 幻灯片列表
     */
    public function lists(){
        $data = SlideModel::get();
        return view('',compact('data'));
    }

    public function post(){
        $id = Request::get('id');
        $model = SlideModel::find($id) ?: new SlideModel();
        if (IS_POST){
            $model->save(Request::post());
            return $this->setRedirect('lists')->success('保存成功');
        }
        return view('',compact('model'));
    }
}
