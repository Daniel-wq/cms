<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateCategoryTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'category', function ( Blueprint $table ) {
            //catname,pid,description,linkurl,orderby,thumb
			$table->increments( 'cid' );
			$table->char( 'catname','30' )->comment('栏目名称');
			$table->integer( 'pid' )->comment('父级id');
			$table->string( 'description' )->comment('栏目描述');
			$table->string( 'linkurl' )->comment('栏目跳转地址');
			$table->smallint( 'orderby' )->comment('排序');
			$table->string( 'thumb' )->comment('栏目缩略图');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'category' );
    }
}