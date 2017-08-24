<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateSlideTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'slide', function ( Blueprint $table ) {
            //title,url,displayorder,thumb
		    $table->increments( 'id' );
		    $table->string( 'title' )->comment('幻灯片标题');
		    $table->string( 'url' )->comment('幻灯片地址');
		    $table->string( 'displayorder' )->comment('幻灯片显示要求');
		    $table->string( 'thumb' )->comment('幻灯片翻阅');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'slide' );
    }
}