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
	
	return View::make('hello');		
	
});

Route::get('newses',array('as'=>'newses','uses'=>'NewsesController@get_index'));
Route::get('news/{id}',array('as'=>'news', 'uses'=>'NewsesController@view'));
Route::get('newses/new', array('as'=>'new_news', 'uses'=>'NewsesController@add_new'));
Route::post('newses/create', array('uses'=>'NewsesController@create'));
Route::get('news/{id}/edit', array('as'=>'edit_news','uses'=>'NewsesController@edit'));
Route::put('newses/update',array('uses'=>'NewsesController@update'));
Route::delete('newses/delete',array('uses'=>'NewsesController@delete'));
