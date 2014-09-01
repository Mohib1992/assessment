<?php

class ClientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('client.client')
				->with('client',Client::all());
	}

	public function ClientList()
	{
		return View::make('client.list')
				->with('client',Client::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		echo 'insitilized insert view';
		return View::make('client.insert');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		echo 'save clinet';
		$messages = array(
			'name.required'=> 'Name Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',			
			'image.required'=> 'Image Should not be empty!.',					
		);
		
		$rules = array(
			'name'      => 'required',
			'description'=> 'required',			
			'image'      => 'required'
		);
				
			
		$validator = Validator::make(Input::all(),$rules,$messages);


		if($validator->fails()):
			return Redirect::to('admin/client/create')
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$client = new Client;
			$client->name = Input::get('name');
			$client->description = Input::get('description');								
			$image = Input::file('image');			
			$client->image = $image->getClientOriginalName();										
			$image->move('images/',$client->image);
			$client->save();									

			Session::flash('Message','Client Added Successfully!');
			return Redirect::to('admin/client/list');
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
		echo 'show perticuller clinet';
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
		echo 'initialize perticuller clinet view for edit';
		return View::make('client.edit')
				->with('client',Client::find($id));
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
		echo 'update cilent';
		$messages = array(
			'name.required'=> 'Name Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',			
			'image.required'=> 'Image Should not be empty!.',					
		);
		
		$rules = array(
			'name'      => 'required',
			'description'=> 'required',			
			'image'      => 'required'
		);
				
			
		$validator = Validator::make(Input::all(),$rules,$messages);


		if($validator->fails()):
			return Redirect::to('admin/client/'.$id.'/edit')
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$client = Client::find($id);
			$client->name = Input::get('name');
			$client->description = Input::get('description');								
			$image = Input::file('image');			
			$client->image = $image->getClientOriginalName();										
			$image->move('images/',$client->image);
			$client->save();									

			Session::flash('Message','Client Updated Successfully!');
			return Redirect::to('admin/client/list');
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
		echo 'delete client '.$id;
		$e = Client::find($id);
		$e->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Client!');
		return Redirect::to('admin/client/list');
	}


}
