<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserToArticalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articals', function(Blueprint $table)
		{
            //指定文章所属用户ID
			$table->integer('user_id')->unsigned();

            //生成外键，并且删除用户时，同时删除用户的文章
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articals', function(Blueprint $table)
		{
			//
		});
	}

}
