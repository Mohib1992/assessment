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

		$this->call('UserSeeder');
		$this->command->info('Seeding Completed');
//		$this->call('MenuSeeder');
	}

}
class AllSeeder extends Seeder {

	public function run()
	{
		DB::table('user')->delete();
		DB::table('post')->delete();
		DB::table('pages')->delete();
		DB::table('project')->delete();
		DB::table('service')->delete();
		DB::table('tags')->delete();
		DB::table('employee')->delete();
		DB::table('news')->delete();
        DB::table('language')->delete();
        DB::table('translation')->delete();
        DB::table('translation_key')->delete();

		DB::unprepared(file_get_contents(app_path().'\database\database.sql'));
	}
}

