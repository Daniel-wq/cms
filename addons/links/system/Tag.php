<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/25
 * Time: 20:28
 */

namespace addons\links\system;


class Tag
{
    public function lists($attr,$content){
        $rows = isset($attr['rows']) ? $attr['rows'] : 10000;
        $str = <<<str
<?php
\$linksData = \addons\links\model\Links::orderBy('orderby','asc')->get();
foreach(\$linksData as \$field):
?>
{$content}
<?php endforeach ?>
str;
        return $str;

    }

    public function index(){
        return 'index';
    }
}