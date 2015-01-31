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
// this is main project
Route::get('/',
	function()
	{
		$news = new NewsController;

//		foreach (Config::get('database.mysql') as $database) {
//				echo $database.'<br>';
//		}


		/*
		foreach ($news->getAllNews() as $n) {

			foreach($n as $k)
			{
				echo $k;
			}
		}*/


		return View::make('index.index')
			->with('newses',$news->getAllNews());


	});

Route::get('/admin',
	function()
	{
		if(Auth::check())
			return View::make('admin.admin');
		else return View::make('login.login');


	});

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
		return "Page under development";
//		$posts         = new PostController;
//		$tagController = new TagController;
//		return View::make('blog.blog')
//		->with('posts',$posts->allPosts())
//		->with('totalTag',$tagController->getTotalTag())
//		->with('tags',$tagController->getAllTags());
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
Route::post('/contact/feedback',function(){

	$data = [
		'email' => Input::get('email'),
		'msg' => Input::get('message')
	];

	Mail::send('contact.feedback',$data,function($message){

		$message->to('3Spire@localhost.com')
				->cc('moin.uoda@gmail.com')
				->subject('FeedBack from viewer');
	});

	Redirect::back()
			->with('success','Message send successfully');
});

Route::resource('/page','PageController');
Route::resource('/admin/page','PageController');
Route::resource('/admin/news','NewsController');
Route::get('/admin/news/{news}/published','NewsController@changeNewsStatus');
Route::get('/admin/news/{news}/unpublished','NewsController@changeNewsStatus');
Route::resource('/news','NewsController',array(
	'only' => 'show'
));

Route::get('/team', array('as'  =>'team','uses'=>'EmployeeController@index'));
Route::get('/about',function(){

    $page = Page::find(5);
    return View::make('page.page')
        ->with('page',$page)
		->with('employees',Employee::all());
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


Route::resource('admin/content','ContentController',[

	'only' => array('index','update','edit')
]);


Route::get('admin/login',function(){
	return View::make('login.login');
});
Route::resource('admin/user','UserController');
Route::post('admin/check','UserController@login');
Route::get('admin/logout','UserController@logOut');

