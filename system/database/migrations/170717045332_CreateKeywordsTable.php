<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateKeywordsTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'keywords', function ( Blueprint $table ) {
			$table->increments( 'kid' );
            $table->char( 'module');
            $table->char( 'content');
            $table->smallint( 'content_id');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'keywords' );
    }
}