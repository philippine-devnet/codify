<?php

use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('profiles',function($table){
			$table->increments('id');
			$table->integer('user_id')->unique();
			$table->string('email_address');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('occupation');
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
		//
		Schema::drop('profiles');
	}

}