<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateUserTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'user', function ( Blueprint $table ) {
            //username,password
		    $table->increments( 'uid' );
		    $table->char( 'username',30 )->comment('用户名');
		    $table->string( 'password' )->comment('用户密码');
		    $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'user' );
    }
}