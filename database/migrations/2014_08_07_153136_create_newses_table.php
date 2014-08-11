<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create newses table
		Schema::create('newses',function($table){
			
				$table->increments('id');
				$table->string('title');
				$table->timestamp('publication_date');
				$table->text('description');
				$table->string('image');
				$table->string('status');
				$table->timestamp('updated_at');
				$table->timestamp('created_at');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//destroy newses table
		Schema::drop('newses');
		
	}

}
