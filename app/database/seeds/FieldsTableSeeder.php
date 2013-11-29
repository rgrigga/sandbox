<?php

class FieldsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('fields')->truncate();

		$fields = array(
			array('name'=>"foooo"),
			array('name'=>"bar"),
			array('name'=>"baz"),


		);

		// Uncomment the below to run the seeder
		DB::table('fields')->insert($fields);
	}

}
