<?php
namespace modules\base\controller;
use houdunwang\request\Request;
use modules\base\model\BaseContent;
use modules\HdController;

class Wechat extends HdController{

    /**
     * 关键词列表
     * @return string
     */
	public function lists(){
	    //echo 456;
		//$data = BaseContent::get();
		$data = BaseContent::where('module','base')->field('*,base_content.content as con')->join('keywords','content_id','=','bid')->get();
		//p($data->toArray());exit;
		return $this->display('',compact('data'));
	}

    /**
     * 关键词的添加和修改
     * @return array|mixed
     */
	public function post(){
	    $bid = Request::get('bid');
	    $model = BaseContent::find($bid) ?: new BaseContent();
	    if (IS_POST){
	        $post = Request::post();
	        //1、添加或者修改到回复内容表base_content
            $model['content'] = $post['content'];
            $model->save();
            //1、添加或者修改到关键词表keywords
            $data = [
                 'content_id' => $model['bid'],
                 'content' => $post['keywords']
            ];
            $this->saveKeywords($data);
            //return $this->setRedirect(url('base.wechat.lists'))->success('保存成功');
            echo $this->setRedirect(url('base.wechat.lists'))->success('保存成功');
            exit;
        }
        //分配关键词的旧数据
        $this->assignKeywords($bid);
	    return $this->display('',compact('model'));

    }

    /**
     * 删除关键字
     * @return array
     */
    public function remove(){
	    $bid = Request::get('bid');
	    //1、删除回复内容表
        BaseContent::find($bid)->destory();
        //2、删除关键词表
        $this->removeKeywords($bid);
        //return $this->setRedirect(url('base.wechat.lists'))->success('删除成功');
        echo $this->setRedirect(url('base.wechat.lists'))->success('删除成功');
        exit;
    }
}



























