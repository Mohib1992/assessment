<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNews extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//add value to the news table
		DB::table('newses')->insert(array(
			'title'=>'this is the title',
			'publication_date'=> date('y-m-d h:m:s'),
			'description'=>'this is the description',
			'image'=>'no image',
			'status'=>'published'				
		));
		
				DB::table('newses')->insert(array(
			'title'=>'this is the title2',
			'publication_date'=> date('y-m-d h:m:s'),
			'description'=>'this is the description',
			'image'=>'no image',
			'status'=>'published'				
		));
		
				DB::table('newses')->insert(array(
			'title'=>'this is the title3',
			'publication_date'=> date('y-m-d h:m:s'),
			'description'=>'this is the description',
			'image'=>'no image',
			'status'=>'published'				
		));
		
				DB::table('newses')->insert(array(
			'title'=>'this is the title4',
			'publication_date'=> date('y-m-d h:m:s'),
			'description'=>'this is the description',
			'image'=>'no image',
			'status'=>'published'				
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//droping entities
		DB::table('newses')
			->where('id','=','this is the title')
			->delete();
	}

}
