@extends('layouts.admin')

@section('content')
<h1>Edit Employee</h1>
        
     {{ HTML::ul($errors->all()) }}

    {{ HTML::image('images/'.$employee->image) }}
    {{ Form::model($employee, array('route' => array('admin.employee.update', $employee->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
	
		<p>
            {{ Form::label('title', 'Employee Name') }}</br>
            {{ Form::text('name', null) }}
		</p>
    
        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', $employee->getContentEnglish()) }}
        </p>

        <p>
            {{ Form::label('description', 'Description') }}</br>
            <span>(In German)</span>
            {{ Form::textarea('descriptionInGerman', $employee->getContentGerman()) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Image') }}</br>
            {{ Form::file('image') }}
        </p>               
    
        {{ Form::submit('Update Employee!') }}
    
    {{ Form::close() }}
@stop
