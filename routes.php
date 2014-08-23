<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
					
	$news = new NewsController;		
	return View::make('index.index')			
		->with('newses',$news->getAllNews());			
	
});

Route::get('/admin',function(){
	
	return View::make('admin.admin');
	
});


Route::get('/team', array('as'=>'team','uses'=>'EmployeeController@index'));

Route::get('/client', function(){
	
	return View::make('client.client');		
	
});

Route::get('/project', array('uses'=>'ProjectController@index'));

Route::get('/blog',function(){
	
	$posts = new PostController;
	$tagController = new TagController;
	return View::make('blog.blog')
		->with('posts',$posts->allPosts())
		->with('totalTag',$tagController->getTotalTag())
		->with('tags',$tagController->getAllTags());			
});

Route::get('/contact', function(){
	
	return View::make('contact.contact');		
	
});

Route::get('/page/{id}',array('as'=>'pages','uses'=>'PageController@getPage'));

Route::get('/admin/news',array('as'=>'newses','uses'=>'NewsController@index'));
Route::get('/admin/news/new',function(){
	
	return View::make('newses.insert')->with('news',News::all());
	
});
/*
Route::get('news/{id}',array('as'=>'news', 'uses'=>'NewsesController@view'));
Route::get('newses/new', array('as'=>'new_news', 'uses'=>'NewsesController@add_new'));
Route::post('newses/create', array('uses'=>'NewsesController@create'));
Route::get('news/{id}/edit', array('as'=>'edit_news','uses'=>'NewsesController@edit'));
Route::put('newses/update',array('uses'=>'NewsesController@update'));
Route::delete('newses/delete',array('uses'=>'NewsesController@delete'));
*/