<?php
/** .-------------------------------------------------------------------
 * | 函数库
 * '-------------------------------------------------------------------*/

function default_pic($img){
    return $img ?: 'resource/images/nopic.jpg';
}

if (isset($_GET['s'])){
    //把s参数变成数组
    $info = explode('/',strtolower($_GET['s']));
    //如果是s=admin/category/lists,那么变成数组之后单元总数是3
    if (count($info) == 3){
        define('APP',$info[0]);
        define('CONTROLLER',$info[1]);
        define('ACTION',$info[2]);
    }
}

/**
 * 简化路径
 * @param $path
 * @param array $params
 * @return string
 */
//?m=student&a=controller/grade/store
//url('student.grade.store')
function url($path,$params=[]){
    //把数组['bid'=>1,'aid'=>2] 转换成 bid=1&aid=2
    $args = http_build_query($params);
    $arr = explode('.',$path);

    return __WEB__ . "?m={$arr[0]}&a=controller/{$arr[1]}/{$arr[2]}&{$args}";
}