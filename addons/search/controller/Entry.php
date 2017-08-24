<?php
namespace addons\search\controller;
use houdunwang\db\Db;
use houdunwang\request\Request;
use modules\HdController;
use system\model\Article;

class Entry extends HdController {
	public function index(){
		$keywords = Db::table('search_keywords')->orderby('times','desc')->get();
		return $this->display('',compact('keywords'));
	}

	public function search(){
		$keywords = Request::get('keywords');
		//p($keywords);exit;
		//搜索文章标题或者内容
		$arcModel = Article::where('title','like',"%{$keywords}%")->orwhere('content','like',"%{$keywords}%")->paginate(1);
		$arcData = $arcModel->toArray();
		//p($arcData);exit;
		//搜索到关键词处理,前提是能搜索到文章的关键词
		if($arcData){
			$where = ['keywords',$keywords];
			$searchKeywords = Db::table('search_keywords')->where($where)->first();
			if($searchKeywords){
				//搜索到搜索次数加1
				Db::table('search_keywords')->where($where)->increment('times',1);
			}else{
				//否则为新的关键词插入到数据库
				Db::table('search_keywords')->insert(['keywords'=>$keywords,'times'=>1]);
			}
		}

		return view(TEMPLATE . '/search.html',compact('arcModel','arcData','keywords'));
	}

	public function remove(){
		Db::table('search_keywords')->where('kid',Request::get('kid'))->delete();
		return $this->setRedirect(url('search.entry.index'))->success('删除成功');
	}


}