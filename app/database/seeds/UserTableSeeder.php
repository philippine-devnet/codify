<?php

class UserTableSeeder extends Seeder{

	public function run(){

		DB::table('users')->delete();
		$user = User::create(array('username'=>'admin','password'=>Hash::make('pitg_rocks')));
		$profile = Profile::create(array('email_address'=>'admin@admin.com','user_id'=>$user->id,'first_name'=>'Phil','middle_name'=>'Development','last_name'=>'Network','occupation'=>'Core Admin | PITG'));
	}

}