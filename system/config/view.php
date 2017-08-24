<?php
return [
    /*
    |--------------------------------------------------------------------------
    | 模板目录
    |--------------------------------------------------------------------------
    | 只参路由模式有效
    | 控制器访问时无效
    */
    'path'        => 'view',

    /*
    |--------------------------------------------------------------------------
    | 模板文件默认扩展名
    |--------------------------------------------------------------------------
    | 当使用模板时没有添加扩展名将使用下面定义的扩展名
    */
    'prefix'      => '.php',

    /*
    |--------------------------------------------------------------------------
    | 扩展标签
    |--------------------------------------------------------------------------
    | 用于定义扩展的模板标签
    */
    'tags'=> [system\tag\Common::class],

    /*
    |--------------------------------------------------------------------------
    | 左边界符
    |--------------------------------------------------------------------------
    | 用于定义模板标签的左边界符
    */
    'tag_left'    => '<',

    /*
    |--------------------------------------------------------------------------
    | 右边界符
    |--------------------------------------------------------------------------
    | 用于定义模板标签的右边界符
    */
    'tag_right'   => '>',

    /*
    |--------------------------------------------------------------------------
    | 缓存目录
    |--------------------------------------------------------------------------
    | 框架支持缓存模板文件用于减少服务器压力
    | 下面的配置项是定义缓存文件的存放目录
    */
    'cache_dir'   => 'storage/view/cache',

    /*
    |--------------------------------------------------------------------------
    | 编译目录
    |--------------------------------------------------------------------------
    | 模板引擎支持一次编译生成PHP代码这样可以提供系统运行性能
    | 下面的配置项是定义编译文件的保存目录
    */
    'compile_dir' => 'storage/view/compile',
];