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
		
		$admin = User::create(array(
			'name' => 'moin khan',
			'password' => Hash::make('1234'),
			'role' => 'admin'		
		));
		
		$this->command->info('User created');
		
		$moin = Employee::create(array(
		
			'name' => 'moin',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'image' => 'images/member03.jpg',		
		));
		
		$mishu = Employee::create(array(
		
			'name' => 'mishu',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'image' => 'images/member02.jpg',			
		));
		
		$this->command->info('employee created');
		
		$moin = News::create(array(
		
			'title' => 'News 1',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'cover_image' => 'news_img.jpg',		
		));
		
		$mishu = News::create(array(
		
			'title' => 'News 2',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'cover_image' => 'news_img1.jpg',			
		));
		
		$this->command->info('News created');
		
		$tag = Tag::create(array(
			'tag' => 'Lorem ipsum',
			'frequency' => 2		
		));
		
		$tag = Tag::create(array(
			'tag' => 'Strategy',
			'frequency' => 3		
		));
		
		$this->command->info('Tags created');
		
		$post1 = Post::create(array(
			'title' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'cover_image' => 'images/blog1.jpg',
			'tages' => 'Lorem ipsum',
			'status' => 'publish',
			'user_id' => $admin->id		
		));
		
		$post1 = Post::create(array(
			'title' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'cover_image' => 'images/blog2.jpg',
			'tages' => 'Lorem ipsum',
			'status' => 'publish',
			'user_id' => $admin->id		
		));
		
		$post1 = Post::create(array(
			'title' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'cover_image' => 'images/blog3.jpg',
			'tages' => 'Lorem ipsum',
			'status' => 'publish',
			'user_id' => $admin->id		
		));
		
		$this->command->info('Post created');
		
		Project::create(array(
			'project_title' => '',
			'description' => '',
			'cover_image' => 'images/client-logo1.png',
			'status' => 'publish'				
		));
		
		Project::create(array(
			'project_title' => '',
			'description' => '',
			'cover_image' => 'images/client-logo2.png',
			'status' => 'publish'				
		));
		Project::create(array(
			'project_title' => '',
			'description' => '',
			'cover_image' => 'images/client-logo3.png',
			'status' => 'publish'				
		));
		Project::create(array(
			'project_title' => '',
			'description' => '',
			'cover_image' => 'images/client-logo4.png',
			'status' => 'publish'				
		));
		
		Project::create(array(
			'project_title' => '',
			'description' => '',
			'cover_image' => 'images/client-logo5.png',
			'status' => 'publish'				
		));
		
		Project::create(array(
			'project_title' => '',
			'description' => '',
			'cover_image' => 'images/client-logo6.png',
			'status' => 'publish'				
		));
		
		Project::create(array(
			'project_title' => '',
			'description' => '',
			'cover_image' => 'images/client-logo7.png',
			'status' => 'publish'				
		));
		
		$this->command->info('Project create');
		
		Page::create(array(
			'page_title'=> 'Sample page',
			'page_content'=> 'This is sample page',
			'video'=> 'none',
			'image'=> 'none',
			'status'=> 'publish'		
		));
		
		$this->command->info('Page created');
	}
}

