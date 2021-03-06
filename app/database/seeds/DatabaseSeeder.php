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

		// $this->call('UserTableSeeder');
		$this->call('FieldsTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('PhotosTableSeeder');
		$this->call('ScoresTableSeeder');
	}

}