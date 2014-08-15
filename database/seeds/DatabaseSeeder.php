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
		DB::table('page')->delete();
		DB::table('project')->delete();
		DB::table('service')->delete();
		DB::table('team')->delete();
		DB::table('tag')->delete();
		DB::table('employee')->delete();
		DB::table('comment')->delete();
		
		
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
		
		$webTeam = Team::create(array(
			'name' => 'Web Developer',
			'description' => 'This is our web developer team'		
		));
		
		$this->command->info('team created');
		
		$employee1 = Employee::create(array(
			'name' => 'moin',
			'description' => 'this is description for moin',
			'image' => 'no image found',
			'team_id' => $webTeam->id
		));
		
		$employee2 = Employee::create(array(
			'name' => 'mishu',
			'description' => 'this is description for mishu',
			'image' => 'no image found',
			'team_id' => $webTeam->id
		));
		
		$this->command->info('employee created');
		
		/*
		$first_page = Page::create(array(
			
			'page_title' => 'First Page',
			'page_content' => 'this is first page',
			'image'=> 'no image',
			'video' => 'no video',
			'status' => 'publish'
		
		));
		
		$this->command->info('page created');
		
		$tag = Tag::create(array(
			
			'tag' => 'help',
			'frequency' => 7
		
		));
		
		$this->command->info('tag created');
		*/
		$post1 = Post::create(array(
		
			'title' => 'database error',
			'description' => 'this is description',
			'tages' => 'help',
			'status' => 'publish',
			'user_id' => $moin->id
		
		));
		
		$this->command->info('post created');
	}
}
