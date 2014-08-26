<?php

class NewsController extends \BaseController
{

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/

	public $restfull = true;


	public function index()
	{
		//
		return View::make('newses.view')
		->with('newses',News::all());
	}

	public function getAllNews()
	{
		return News::all();
	}
	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		//
	}


	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store()
	{
		//
		$messages = array(
			'title.required'=> 'Title Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',			
			'status.required'=> 'Publish the news or not!.',					
		);
		
		$rules = array(
			'title'      => 'required',
			'description'=> 'required',			
			'status'     => 'required'
		);
		
		$inputs = array(
			'title' => Input::get('title'),
			'description' => Input::get('description'),
			'cover_image' => Input::file('cover_image'),
			'status' => Input::get('status')
		
		);
		$validator = Validator::make($inputs,$rules,$messages);


		if($validator->fails()):
			return Redirect::to('/admin/news/new')
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$news = new News;
			$news->title = Input::get('title');
			$news->description = Input::get('description');								
			$image = Input::file('cover_image');			
			$news->cover_image = $image->getClientOriginalName();			
			$news->status = Input::get('status');					
			$image->move('images/',$news->cover_image);
			$news->save();									

			Session::flash('Message','News Created Successfully!');
			return Redirect::to('/admin/news');
		endif;

	}


	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function show($id)
	{
		//
	}


	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function edit($id)
	{
		//
		$news = News::find($id);
		return View::make('newses.edit')
				->with('news',$news);
	}


	/**
	* Update the specified resource in storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function update($id)
	{
		//
	}


	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy($id)
	{
		//
		var_dump($id);
	}


}
