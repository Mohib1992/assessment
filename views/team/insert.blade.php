@extends('layouts.admin')

@section('content')
<h1>Add New Employee</h1>
        
     {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'admin/employee','method'=>'POST','enctype'=>'multipart/form-data')) }}
	
		<p>
            {{ Form::label('title', 'Employee Name') }}</br>
            {{ Form::text('name', Input::old('name')) }}
		</p>
    
        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', Input::old('description')) }}
        </p>

        <p>
            {{ Form::label('description', 'Description') }}</br>
            <span>(In garman)</span>
            {{ Form::textarea('descriptionInGer', Input::old('descriptionInGer')) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Image') }}</br>
            {{ Form::file('image') }}
        </p>               
    
        {{ Form::submit('Add Employee!') }}
    
    {{ Form::close() }}
@stop