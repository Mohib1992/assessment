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

Route::get('/',
	function()
	{
		$news = new NewsController;
		return View::make('index.index')
		->with('newses',$news->getAllNews());

	});

Route::get('/admin',
	function()
	{

		return View::make('admin.admin');

	});


Route::get('/team', array('as'  =>'team','uses'=>'EmployeeController@index'));
Route::get('/admin/employee/list', array('as'  =>'admin.employee.list','uses'=>'EmployeeController@EmployeeList'));
Route::get('/admin/employee/list/{lan}', array('as'  =>'admin.employee.list','uses'=>'EmployeeController@EmployeeList'));
Route::get('/admin/employee/list/{lan}', array('as'  =>'admin.employee.list','uses'=>'EmployeeController@EmployeeList'));
Route::resource('/admin/employee','EmployeeController');
Route::resource('/team','EmployeeController');

Route::get('/client','ClientController@index');
Route::get('/admin/client/list',array('as'=>'admin.employee.list','uses'=>'ClientController@ClientList'));
Route::resource('/admin/client','ClientController');



Route::get('/project', array('uses'=>'ProjectController@index'));

Route::get('/blog',
	function()
	{
		$posts         = new PostController;
		$tagController = new TagController;
		return View::make('blog.blog')
		->with('posts',$posts->allPosts())
		->with('totalTag',$tagController->getTotalTag())
		->with('tags',$tagController->getAllTags());
	});
Route::get('/admin/post',array('uses'=>'PostController@index'));
Route::get('/admin/post/view/{id}',array('uses'=>'PostController@show'));
Route::get('/admin/post/new',array('uses'=>'PostController@create'));
Route::post('/admin/post/create',array('uses'=>'PostController@store'));
Route::get('/admin/post/edit/{id}',array('uses'=>'PostController@edit'));
Route::put('/admin/post/update',array('uses'=>'PostController@update'));

Route::get('/contact',
	function()
	{

		return View::make('contact.contact');

	});

Route::resource('/page','PageController');
Route::resource('/admin/page','PageController');
Route::resource('/admin/news','NewsController');


/*
Route::get('/news/{id}',array('uses'=>'NewsController@getNewsById'));
Route::get('/admin/news',array('as'  =>'newses','uses'=>'NewsController@index'));
Route::get('/admin/news/new',
	function()
	{

		return View::make('newses.insert')->with('news',News::all());

	});
Route::post('/admin/news/create', array('uses'=>'NewsController@store'));
Route::delete('/admin/news/delete',array('uses'=>'NewsController@destroy'));
Route::get('/admin/news/edit/{id}', array('as'  =>'edit_news','uses'=>'NewsController@edit'));
Route::put('/admin/news/update',array('as'  =>'update_news','uses'=>'NewsController@update'));
*/
/*
Route::get('news/{id}',array('as'=>'news', 'uses'=>'NewsesController@view'));
Route::get('newses/new', array('as'=>'new_news', 'uses'=>'NewsesController@add_new'));
*/


Route::get('/about',function(){

    $page = Page::find(5);
    return View::make('page.page')
        ->with('page',$page);
});

Route::get('/advantage',function(){

    $page = Page::find(6);
    return View::make('page.page')
        ->with('page',$page);
});

Route::get('/services/it',function(){

    $page = Page::find(3);
	return View::make('page.page')
            ->with('page',$page);
	
});

Route::get('/services/garments',function(){

    $page = Page::find(4);
    return View::make('page.page')
        ->with('page',$page);
	
});


/*
 *
 * Routes for menusbar in admin panel
 */

Route::resource('/admin/menu','MenuController',array(

    'only' => array('index','update','edit')
));


Route::resource('admin/content','ContentController');