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
		
		
		$moin = User::create(array(
		
			'name' => 'moin',
			'link' => 'no link',
			'picture_link' => 'no image',
			'role' => 'admin'
		));
		
		$mishu = User::create(array(
		
			'name' => 'mishu',
			'link' => 'no link',
			'picture_link' => 'no image',
			'role' => 'user'
		));
		
		$this->command->info('user created');
		
	
	}
}
