<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id')->unsigned();
			$table->string('username', 100)->unique();
			$table->string('email', 100)->unique();
			$table->string('firstname', 64);
	   		$table->string('lastname', 64);
			$table->string('password', 64);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('users');
	}

}
