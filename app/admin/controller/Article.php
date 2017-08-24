<?php namespace app\admin\controller;

use houdunwang\db\Db;
use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\view\View;
use system\model\Article as ArticleModel;
use system\model\Category;
use modules\Wechat;

/**
 * 继承Common是因为需要登陆后才能进行该操作
 * Class Article
 * @package app\admin\controller
 */
class Article extends Common {

    //1、使用Wechat
    //2、因为在操作微信关键词回复文章时，需要将关键词保存到keywords表
    use Wechat;
    /**
     * 文章列表
     */
    public function lists(){
        //获得recycle的值
        $recycle = Request::get('recycle');
        //p($recycle);
        //如果recycle有的话，那么就是查询回收站内容
        $where = $recycle ? 'isrecycle=1' : 'isrecycle=0';
        //排序//关联表
        $data = ArticleModel::field('*,article.orderby as article_orderby')->orderBy('article.orderby','ASC')->where($where)->join('category','category_cid','=','cid')->paginate(v('config.rows'));

        //$data = Db::table('article')->leftJoin('category','category_cid','=','category.cid')->where($where)->get();
        //p($data->toArray());
        //p($cdata->toArray());
        return View::make()->with(compact('data'));
    }

    /**
     * 删除到回收站
     * @return array
     */
    public function remove(){
//        $model = ArticleModel::find(Request::get('aid'));
//        $model->save(['title'=>$model['title'],'isrecycle'=>1]);
        //ArticleModel::find(Request::get('aid'))->save(['isrecycle'=>1]);

        //将选中的那条文章的isrecycle的值改成1,等同于将该条文章删除到回收站中
        Db::table('article')->where("aid",Request::get('aid'))->update(['isrecycle'=>'1']);

        return $this->setRedirect(u('lists'))->success('删除成功');
    }

    /**
     * 还原
     */
    public function recover(){
//        $model = ArticleModel::find(Request::get('aid'));
//        $model->save(['title'=>$model['title'],'isrecycle'=>0]);
        //ArticleModel::find(Request::get('aid'))->save(['isrecycle'=>0]);

        //将选中的那条文章的isrecycle的值改成0,等同于将该条文章还原到列表页中
        Db::table('article')->where("aid",Request::get('aid'))->update(['isrecycle'=>'0']);

        return $this->setRedirect(u('lists'))->success('还原成功');

    }

    /**
     * 彻底删除
     */
    public function realRemove(){
        //获得选中的那条数据的并彻底删掉
        ArticleModel::find(Request::get('aid'))->destory();
        return $this->setRedirect(u('lists'))->success('删除成功');

    }



    /**
     * 添加和编辑
     */
    public function post(){
        $aid = Request::get('aid');
        $model = $aid ? ArticleModel::find($aid) : new ArticleModel();
        if(IS_POST){
            $post = Request::post();
            $model->save(Request::post());
            //添加关键词
            $data = [
                'module'     => 'article',
                'content'    => $post['wechat_keywords'],
                'content_id' => $model['aid']
            ];
            $this->saveKeywords( $data );

            return $this->setRedirect(u('lists'))->success('保存成功');
        }
        //获得所属栏目数据
        $catData = Category::getTreeData();
        return view('',compact('catData','model'));

    }


}
