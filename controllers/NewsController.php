<?php

class NewsController extends \BaseController {

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
		$validation = News::validate(Input::all());
		
		if($validation->fails()):
			/*return Redirect::to()
					->withErrors($validation)
					->withInput(Input::all());*/
		else :
			$news = new News;
			
			$news->title = Input::get('title');
			$news->description = Input::get('description');
			$news->cover_image = Input::get('cover_image');
			$news->status = Input::get('status');
			$news->save();
			
			Session::flash('Message','News Created Successfully!');
			return Redirect::to('');
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
	}


}
