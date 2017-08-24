<?php namespace app\admin\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\view\View;
use system\model\Category as CategoryModel;
use system\model\Article;
class Category extends Common
{

    /**
     * 栏目列表
     */
    public function lists()
    {
        //获得树状结构
        $data = CategoryModel::getTreeData();
        //载入模板并传参
        return View::make()->with(compact('data'));
    }

    /**
     * 栏目的添加和编辑
     */
    public function post()
    {
        //获得要修改的id
        $cid = Request::get('cid');
        //如果是编辑通过find获得模型，如果是添加重新实例化模型
        $model = CategoryModel::find($cid) ?: new CategoryModel();
        if (IS_POST) {
            //save同时具有添加和编辑的动作
            $model->save(Request::post());
            //跳转
            return $this->setRedirect(u('lists'))->success('保存成功');
        }
        //处理所属栏目
        //所属栏目（父级栏目）不能是自己也不能是自己的子栏目
        $catData = CategoryModel::getNoMine($cid);
        return View::make()->with(compact('catData', 'model'));

    }


    /**
     * 删除栏目
     * @return array
     */
    public function remove()
    {
        //获得要删除数据的id
        $cid = Request::get('cid');
        //判断是否有子栏目
        if (CategoryModel::where('pid', $cid)->first()) {
            return $this->setRedirect('back')->success('请先删除子栏目');
        }
        //判断该栏目下是否有文章
        if (Article::where('category_cid',$cid)->first()){
            return $this->setRedirect('back')->success('请先删除该栏目下面的文章');
        }
        //删除栏目
        CategoryModel::find($cid)->destory();
        return $this->setRedirect(u('lists'))->success('删除成功');
    }
}
