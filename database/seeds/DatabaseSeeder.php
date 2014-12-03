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
        DB::table('language_translation')->delete();

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

        $key = TranslationKey::create([
            'code' => rand()
        ]);
        $translation_in_english = Translation::create([
            'translation_key_id' => $key->code,
            'content' => 'Born on the 29th of September 1982 in Colombo, Sri Lanka, Nuwan is the creative mind behind "3Spire”. Interested in art, design and technical development, he completed his master’s degree in Information’s Management and is working as a project manager in one of the world’s largest insurance companies. Prior to his current role he managed big budget projects throughout the DACH  (Germany-Austria-Switzerland) region for some of the largest IT- companies worldwide. Hence he is confident with customer dealings across multiple regions.
             Combining his knowledge, interests and philanthropic approach to start a sustainable business has been on his mind ever since he entered the job market and after multiple years of being professionally active within the IT sector, Nuwan feels that the time is right to start with 3Spire.'
        ]);

        $english->translation()->attach($translation_in_english->id);

        $employee = Employee::create([
            'name' => 'Nuwan Gomes,MSc',
            'employee_description_id' => $translation_in_english->translation_key_id,
            'image' => 'member01_jpg_srz.00.jpg'
        ]);

        $this->command->info('database seeded');

        $getEmp = Employee::where('id','=',$employee->id)->first();
        $trans = Translation::where('translation_key_id','=',$getEmp->employee_description_id)->first();
        $this->command->info($trans->content);

        $key = TranslationKey::create([
            'code' => rand()
        ]);
        $translation_in_english = Translation::create([
            'translation_key_id' => $key->code,
            'content' => 'Born on the 29th  of September 1983 in Vienna, Austria, Robi is known to be a committed analytical thinking perfectionist. After graduating with a master’s degree in Information’s Management he gathered extensive working experience in one of the world’s major economic municipalities, London, UK. Thereafter he returned to Vienna and continued his career as a project manager for the world’s largest cable provider. Robi is known to be a meticulously working professional who is eager to capture details. Having been employed by globally established companies and gathering valuable experience in the fields of consulting and project management has given Robi great confidence in meeting customer needs and managing diverse complicated tasks which will be an essential
             component within 3Spire.'
        ]);

        $english->translation()->attach($translation_in_english->id);

        $employee = Employee::create([
            'name' => 'Robi Rahman,MSc',
            'employee_description_id' => $translation_in_english->translation_key_id,
            'image' => 'member01_jpg_srz.00.jpg'
        ]);

        $this->command->info('database seeded');

        $getEmp = Employee::where('id','=',$employee->id)->first();
        $trans = Translation::where('translation_key_id','=',$getEmp->employee_description_id)->first();
        $this->command->info($trans->content);


        /*
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
		
		$this->command->info('Page created');*/
	}
}

