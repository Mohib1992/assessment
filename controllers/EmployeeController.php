<?php

class EmployeeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('team.team')
			->with('employees',Employee::all());
	}
	
	public function EmployeeList()
	{
		return View::make('team.list')->with('employee',Employee::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		echo 'initial employee create view';
		return View::make('team.insert');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		echo 'save Employee';
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
			return Redirect::to('admin/employee/create')
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$employee = new Employee;
			$employee->name = Input::get('name');
			$employee->description = Input::get('description');								
			$image = Input::file('image');			
			$employee->image = $image->getClientOriginalName();										
			$image->move('images/',$employee->image);
			$employee->save();									

			Session::flash('Message','Employee Added Successfully!');
			return Redirect::to('admin/employee/list');
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
		echo 'show particuller Employee'.$id;
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
		echo 'initialize edit Employee view'.$id;
		$employee = Employee::find($id);
		
		return View::make('team.edit')
				->with('employee',$employee);
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
		echo 'update employee '.$id;
		$messages = array(
			'name.required'=> 'Name Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',										
		);
		
		$rules = array(
			'name'      => 'required',
			'description'=> 'required',						
		);
				
			
		$validator = Validator::make(Input::all(),$rules,$messages);


		if($validator->fails()):
			return Redirect::to('admin/employee/'.$id.'/edit')
					->withErrors($validator)
					->withInput(Input::all());
		else :
			$employee = Employee::find($id);
			$employee->name = Input::get('name');
			$employee->description = Input::get('description');								
			$image = Input::file('image');			
			$employee->image = $image->getClientOriginalName();										
			$image->move('images/',$employee->image);
			$employee->save();									

			Session::flash('Message','Employee Added Successfully!');
			return Redirect::to('admin/employee/list');
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
		echo 'delete employee '.$id;
		$e = Employee::find($id);
		$e->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Employee!');
		return Redirect::to('admin/employee/list');
	}


}
