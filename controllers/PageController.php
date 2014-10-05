<?php

class PageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	//initializing Regirect Routes
	
	private $pageHome = '/admin/page';
	private $pageEdit = '/admin/page/edit' ;
	private $pageNew  = '/admin/page/new' ;
	 
	 
	public function index()
	{
		//
		return View::make('page.pageList')
			 	->with('page',Page::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('page.insert');
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
			'page_title.required'=> 'Page Title Should not be empty!.',
			'page_content.required'=> 'Page Content Should not be empty!.',			
			'status.required'=> 'Publish the PAge or not!.',					
		);
		
		$rules = array(
			'paeg_title'  => 'required',
			'page_content'=> 'required',			
			'status'      => 'required'
		);
		
		$inputs = array(
			'title' => Input::get('page_title'),
			'description' => Input::get('page_content'),			
			'status' => Input::get('status')
		
		);
		$validator = Validator::make($inputs,$rules,$messages);


		if($validator->fails()):
			return Redirect::to($this->pageNew)
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$page = new Page;
			$page->page_title = Input::get('title');
			$page->page_content = Input::get('description');	
			$this->uploadStaff($page,'image');										
			$this->uploadStaff($page,'video');										
			$page->status = Input::get('status');		
			$page->save();									

			Session::flash('Message','News Created Successfully!');
			return Redirect::to($this->pageHome);
		endif;
		
	}
	
	private function uploadStaff($object,$staffName)
	{
		$staff = Input::file($staffName);		
		if(!empty($staff)) :
			$object->$staffName = $staff->getClientOriginalName();								
			$staff->move('images/',$object->$staffName);			
		endif;
		
		//return $object;		
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
		return View::make('page.pages');				
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
		return View::make('blog.edit')
				->with('page',Page::find($id));
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
			'page_title.required'=> 'Page Title Should not be empty!.',
			'page_content.required'=> 'Page Content Should not be empty!.',			
			'status.required'=> 'Publish the PAge or not!.',					
		);
		
		$rules = array(
			'paeg_title'  => 'required',
			'page_content'=> 'required',			
			'status'      => 'required'
		);
		
		$inputs = array(
			'title' => Input::get('page_title'),
			'description' => Input::get('page_content'),			
			'status' => Input::get('status')
		
		);
		$validator = Validator::make($inputs,$rules,$messages);


		if($validator->fails()):
			return Redirect::to($this->pageEdit)
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$page = Page::find($id);
			$page->page_title = Input::get('title');
			$page->page_content = Input::get('description');	
			$this->uploadStaff($page,'image');										
			$this->uploadStaff($page,'video');										
			$page->status = Input::get('status');		
			$page->save();									

			Session::flash('Message','Page Updated Successfully!');
			return Redirect::to($this->pageHome);
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
		$page = Page::find($id);
		$page->delete();
		return Redirect::to($this->pageHome);
		
	}	
}
