<?php
// develop by moin
class NewsesController extends BaseController{
	
	public $restful = true;
	
	public function get_index()
	{
		return View::make('newses.index')
				->with('title','from controller')
				->with('newses',News::all());
	}
	
	public function view($id)
	{
		return View::make('newses.view')
				->with('title','from controller')
				->with('news',News::find($id));
	}
	
	public function edit($id)
	{
		return View::make('newses.edit')
					->with('title','from controller') 
					->with('news',News::find($id));
	}
	
	public function update()
	{
		$id = Input::get('id');
		News::where('id',$id )->update(array(
			'title' => Input::get('title'),
			'description' => Input::get('description'),
			'publication_date' => Input::get('publication_date')
		));
		
		
		Session::flash('message','Successfull');
		return Redirect::to('newses');				
	}
	
	public function add_new()
	{
		return View::make('newses.insert')
				->with('title','Inset new newes')
				->with('pub',date('y/m/d h:m:s'));				
	}
	
	public function create()
	{
		$news = new News;
		$news->title = Input::get('title');
		$news->description = Input::get('description');
		$news->publication_date = Input::get('publication_date');
		$news->image = Input::get('image');
		$news->status = Input::get('status');
		$news->save();		
		
		Session::flash('message','Successfull');
		return Redirect::to('newses');
				
	}
	
	public function delete()
	{
		News::find(Input::get('id'))->delete();
		Session::flash('message','Successfull');
		return Redirect::to('newses');
		
		
	}
}