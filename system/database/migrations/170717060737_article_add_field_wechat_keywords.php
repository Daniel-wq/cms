<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class article_add_field_wechat_keywords extends Migration {
    //执行
    public function up() {
        Schema::table( 'article', function ( Blueprint $table ) {
            $table->string( 'wechat_keywords' )->add();
        } );
    }

    //回滚
    public function down() {
        Schema::dropField( 'article', 'wechat_keywords' );
    }
}