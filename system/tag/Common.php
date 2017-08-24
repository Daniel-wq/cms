<?php namespace system\tag;
use houdunwang\request\Request;
use houdunwang\view\build\TagBase;
use system\model\Modules;

class Common extends TagBase {
	/**
	 * 标签声明
	 * @var array
	 */
	public $tags = [
			'line' => [ 'block' => false ],
			'next' => [ 'block' => false ],
			'prev' => [ 'block' => false ],
			'tag'  => [ 'block' => true, 'level' => 4 ],
			'navigation'  => [ 'block' => true, 'level' => 4 ],
			'category'  => [ 'block' => true, 'level' => 4 ],
			'arc'  => [ 'block' => true, 'level' => 4 ],
			'slide'  => [ 'block' => true, 'level' => 4 ],
			'clicks'  => [ 'block' => true, 'level' => 4 ],
	];

	//next 下一篇 标签
    public function _next($attr,$content,&$view){
        $aid = Request::get('aid');
        $str = <<<str
<?php
\$next = \system\model\Article::where('aid>{$aid}')->orderby('aid','ASC')->first();
if(\$next):
?>
<a href="<?php echo __ROOT__ . '/a_' . \$next['aid'] . '.html' ?>"><?php echo \$next['title'] ?></a>
<?php else: ?>
没有了
<?php endif ?>
str;

        return $str;

    }

    //prev 上一篇 标签
    public function _prev($attr,$content,&$view){
        $aid = Request::get('aid');
        $str = <<<str
<?php
\$prev = \system\model\Article::where('aid<{$aid}')->orderby('aid','DESC')->first();
if(\$prev):
?>
<a href="<?php echo __ROOT__ . '/a_' . \$prev['aid'] . '.html' ?>"><?php echo \$prev['title'] ?></a>
<?php else: ?>
没有了
<?php endif ?>
str;

        return $str;

    }




	//navigation 导航条  标签
    public function _navigation( $attr, $content, &$view ) {
        $rows = isset($attr['rows']) ? $attr['rows'] : 10000;

        $str = <<<str
<?php
\$CategoryData = \system\model\Category::where("pid",0)->limit($rows)->get();
\$CategoryData = \$CategoryData ? \$CategoryData->toArray() : [];
foreach(\$CategoryData as \$field): 
?>
{$content}
<?php endforeach ?>
str;

        return $str;
    }

    //category 栏目 标签
    public function _category( $attr, $content, &$view ) {
        //获取对应cid的数据
        $cid = isset($attr['cid']) ? $attr['cid'] : null;
        $pid = isset($attr['pid']) ? $attr['pid'] : null;
        //组合where条件
        $cidWhere = $cid ? "cid={$cid}" : '';
        $pidWhere = $pid ? "pid={$pid}" : '';
        if ($cidWhere && $pidWhere){
            $where = $cidWhere . 'and' . $pidWhere;
        }elseif($pidWhere){
            $where = $pidWhere;
        }elseif ($cidWhere){
            $where = $cidWhere;
        }else{
            $where = "1=1";
        }

        //截取的条数
        $rows = isset($attr['rows']) ? $attr['rows'] : 10000;
        $str = <<<str
<?php
\$CategoryData = \system\model\Category::where('$where')->limit($rows)->get();
\$CategoryData = \$CategoryData ? \$CategoryData->toArray() : [];
foreach(\$CategoryData as \$field):
\$field['url'] = __ROOT__ . '/c_' . \$field['cid'] . '.html';
?>
{$content}
<?php endforeach ?>
str;
        return $str;

    }

    //article 文章 标签
    public function _arc( $attr, $content, &$view ) {
        $cid = isset($attr['cid']) ? $attr['cid'] : Request::get('cid',NULL);
        $where = $cid ? "category_cid={$cid} and isrecycle=0" : 'isrecycle=0';
        //截取条数
        $rows = isset($attr['rows']) ? $attr['rows'] : 10000;
        $str = <<<str
<?php
\$AticleModel = \system\model\Article::where('$where')->paginate($rows);
\$AticleData = \$AticleModel ? \$AticleModel->toArray() : [];
foreach(\$AticleData as \$field):
\$field['thumb'] = __ROOT__ . '/' . \$field['thumb'];
\$field['url'] = __ROOT__ . '/a_' . \$field['aid'] . '.html';
?>
{$content}
<?php endforeach ?>
str;
        return $str;

    }

    //slide 幻灯片 标签
    public function _slide( $attr, $content, &$view ) {
        $str = <<<str
<?php
\$slideData = \system\model\Slide::get();
\$slideData = \$slideData ? \$slideData->toArray() : [];
foreach(\$slideData as \$field):
\$field['thumb'] = __ROOT__ . '/' . \$field['thumb'];
?>
{$content}
<?php endforeach ?>
str;
        return $str;

    }
	//line 标签
	public function _line( $attr, $content, &$view ) {
		return 'link标签 测试内容';
	}

	//tag 标签 调取插件的数据
	public function _tag( $attr, $content, &$view ) {
		static $obj = [];
		$info = explode('.',$attr['action']);
		//判断模块是否是系统模块
        $className = (Modules::where('name',$info[0])->pluck('is_system') ? 'modules' : 'addons') . '\\' . $info[0] . '\system\Tag';
        //判断是否需要实例化，避免重复进行实例化
        if (!isset($obj[$className])){
            $obj[$className] = new $className;
        }
        return call_user_func_array([$obj[$className],$info[1]],[$attr,$content]);
	}


    public function _clicks( $attr, $content, &$view ){
        $rows = isset($attr['rows']) ? $attr['rows'] : 10000;
        $cid = isset($attr['cid']) ? $attr['cid'] : Request::get('cid',Null);
        $where = $cid ? "category_cid={$cid} and isrecycle=0" : "isrecycle=0";
        $str = <<<str
<?php
\$clickData = \system\model\Article::where('$where')->orderby('click','DESC')->get();
\$clickData = \$clickData ? \$clickData->toArray() : [];
foreach(\$clickData as \$field): 
\$field['url'] = __ROOT__ . '/a_' . \$field['aid'] . '.html';
?>
{$content}
<?php endforeach ?>
str;

        return $str;
    }

}