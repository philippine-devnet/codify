<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!!!!');
		$this->call('RolesTableSeeder');
		$this->command->info('Roles Table Seeded!!!');
		$this->call('CategoryTableSeeder');
		$this->command->info('Category table has been seeded..');
		$this->call('ThreadTableSeeder');
		$this->command->info('Thread table has been seeded');
	}

}