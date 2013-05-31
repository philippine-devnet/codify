<?php

class RolesTableSeeder extends Seeder{

	public function run(){

		DB::table('roles')->delete();
		$roles = array(
				'admin',
				'moderator',
				'user'
			);
		foreach($roles as $role){
			$r = new Role;
			$r->role_name = $role;
			$r->role_slug = Str::slug($role);
			$r->save();
		}
		$mainRole = Role::whereRole_slug('admin')->first();
		$mainUser = User::whereUsername('admin')->first();
		$mainUser->role_id = $mainRole->id;
		$mainUser->save();
	}

}