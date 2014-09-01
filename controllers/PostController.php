<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('blog.postList')
				->with('post',Post::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('blog.insert');
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
			'title.required'	  => 'Title Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',			
			'tages.required'=> 'Tages Should not be empty!.',			
			'status.required'	  => 'Publish the news or not?',					
		);
		
		$rules = array(
			'title'      => 'required',
			'description'=> 'required',			
			'tages'		 => 'required',			
			'cover_image'=> 'required',			
			'status'     => 'required'
		);
				
		$validator = Validator::make(Input::all(),$rules,$messages);


		if($validator->fails()):
			return Redirect::to('/admin/post/new')
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$post = new Post;
			$post->title = Input::get('title');
			$post->description = Input::get('description');								
			$image = Input::file('cover_image');			
			$post->cover_image = $image->getClientOriginalName();			
			$post->status = Input::get('status');					
			$image->move('images/',$post->cover_image);
			$post->tages = Input::get('tages');			
			$post->save();									

			Session::flash('Message','Post Created Successfully!');
			return Redirect::to('/admin/post');
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
		return View::make('blog.view')
				->with('post',Post::find($id));				
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
		return View::make('blog.edit')->with('post',Post::find($id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */ 
	public function update()
	{
		//
		$id = Input::get('id');
		$messages = array(
			'title.required'	  => 'Title Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',			
			'tages.required'=> 'Tages Should not be empty!.',			
			'status.required'	  => 'Publish the news or not?',					
		);
		
		$rules = array(
			'title'      => 'required',
			'description'=> 'required',			
			'tages'		 => 'required',						
			'status'     => 'required'
		);
				
		$validator = Validator::make(Input::all(),$rules,$messages);


		if($validator->fails()):
			return Redirect::to('/admin/post/edit/'.$id)
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->description = Input::get('description');										
			$image = Input::file('cover_image');			
			
			if(!empty($image)) :
				$post->cover_image = $image->getClientOriginalName();			
				$image->move('images/',$post->cover_image);
			endif;
			
			$post->status = Input::get('status');								
			$post->tages = Input::get('tages');			
			$post->save();									

			Session::flash('Message','Post Created Successfully!');
			return Redirect::to('/admin/post');
		endif;
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
		$post = Post::find($id);
		$post->delete();
	}

	public function allPosts()
	{
		return Post::all();
	}

}
