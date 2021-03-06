<?php
$config = [
    /*
    |--------------------------------------------------------------------------
    | 开启字段缓存
    |--------------------------------------------------------------------------
    */
    'cache_field' => true,

    /*
    |--------------------------------------------------------------------------
    | 字段缓存目录
    |--------------------------------------------------------------------------
    |
    | 用于设置表字段的缓存目录
    | 为了即时看到效果,当开启DEBUG模式时字段不进行缓存
    */
    'cache_dir'   => 'storage/field',

    /*
    |--------------------------------------------------------------------------
    | 主机
    |--------------------------------------------------------------------------
    |
    | 当 read与 write都设置的值时以下配置将不起作用
    | 开发时建议使用IP地址进行设置
    | 因为通过命令行操作数据库时使用URL将不会成功
    */
    'host'        => env('DB_HOST', '127.0.0.1'),

    /*
    |--------------------------------------------------------------------------
    | 数据为类型
    |--------------------------------------------------------------------------
    */
    'driver'      => env('DB_DRIVER', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | 连接数据库的帐号
    |--------------------------------------------------------------------------
    */
    'user'        => env('DB_USER', 'root'),

    /*
    |--------------------------------------------------------------------------
    | 连接数据库的密码
    |--------------------------------------------------------------------------
    */
    'password'    => env('DB_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | 使用的数据库名称
    |--------------------------------------------------------------------------
    */
    'database'    => env('DB_DATABASE', ''),

    /*
    |--------------------------------------------------------------------------
    | 数据表前缀
    |--------------------------------------------------------------------------
    | 如果设置了表前缀在使用 查询构造器 、 模型等功能使用表时不需要添加前缀,系统会自动帮你添加
    */
    'prefix'      => env('DB_PREFIX', ''),

    /*
    |--------------------------------------------------------------------------
    | 读写分离配置
    |--------------------------------------------------------------------------
    |
    | read为读取数据的数据库列表
    | write为写入数据的数据库列表
    */
    'read'        => [],
    'write'       => [],
];
if(is_file('data/database.php')){
    $config = array_merge($config,include 'data/database.php');
}
//p($config);
return $config;