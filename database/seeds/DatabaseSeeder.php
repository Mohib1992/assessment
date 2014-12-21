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

		$this->call('AllSeeder');
		$this->command->info('Seeding Completed');
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

		$admin = User::create(array(
			'email' => 'moin@khan.com',
			'password' => Hash::make('1234'),
			'role' => 'admin'		
		));
		
		$this->command->info('User created');

        $english = Language::create([
            'code'=> 'eng'
        ]);

        $german = Language::create([
            'code'=> 'ger'
        ]);

		$this->command->info('Language created');


		$short = Translation::create([

			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	Lorem ipsum dolor sit amet',
			'translation_key_id' => '12',
			'language_id' => $english

		]);

		$short = Translation::create([

			'content' => 'Due to our geographical situation and professional background we have some advantages. To learn more, please follow the link.',
			'translation_key_id' => '13',
			'language_id' => $english

		]);

		$this->command->info('Short description created');


	}
}

