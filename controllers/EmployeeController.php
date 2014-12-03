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
	
	public function EmployeeList($lan = null)
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
		//echo 'initial employee create view';
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
		//echo 'save Employee';
		$messages = array(
			'name.required'=> 'Name Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',			
			'descriptionInGer.required'=> 'Description Should not be empty!.',
			'image.required'=> 'Image Should not be empty!.',
		);
		
		$rules = array(
			'name'      => 'required',
			'description'=> 'required',			
			'descriptionInGer'=> 'required',
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

            $english = Language::where('code','eng')->first();
            $german = Language::where('code','ger')->first();

            $key = new TranslationKey();
            $key->code = rand();
            $key->save();

            if(!isset($key->code))
                    return Redirect::back();

            $translation = new Translation;
            $translation->translation_key_id = $key->code;
            $translation->content = Input::get('description');
            $translation->language_id = $english->id;
            $translation->save();

            $translation = new Translation;
            $translation->translation_key_id = $key->code;
            $translation->content = Input::get('descriptionInGer');
            $translation->language_id = $german->id;
            $translation->save();

            $employee->employee_description_id = $key->code;
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
		return View::make('team.view')
				->with('employee',Employee::find($id));
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
		//echo 'update employee '.$id;
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

            $english = Language::where('code','eng')->first()->id;
            $german = Language::where('code','ger')->first()->id;

			$description['eng'] = Input::get('description');
            $description['ger'] = Input::get('descriptionInGerman');

            $trans = Translation::where('translation_key_id',$employee->employee_description_id)
                    ->where('language_id',$english)
                    ->first();
            $trans->content = $description['eng'];
            $trans->save();


            $trans = Translation::where('translation_key_id',$employee->employee_description_id)
                    ->where('language_id',$german)
                    ->first();
            $trans->content = $description['ger'];
            $trans->save();

			$image = Input::file('image');
            if(!empty($image)) :
			    $employee->image = $image->getClientOriginalName();
			    $image->move('images/',$employee->image);
            endif;
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

        TranslationKey::where('code','=',$e->employee_description_id)->delete();
        Translation::where('translation_key_id','=',$e->employee_description_id)->delete();
        $e->delete();


		// redirect
		Session::flash('message', 'Successfully deleted the Employee!');
		return Redirect::to('admin/employee/list');
	}


}
