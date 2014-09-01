@extends('layouts.admin')

@section('content')
	<h1>Add New Page</h1>
        
     {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'/admin/page/create','method'=>'POST','enctype'=>'multipart/form-data')) }}
	
		<p>
            {{ Form::label('title', 'Page Title') }}</br>
            {{ Form::text('page_title', Input::old('page_title')) }}
		</p>
    
        <p>
            {{ Form::label('page_content', 'Page Content') }}</br>
            {{ Form::textarea('page_content', Input::old('page_content')) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Image') }}</br>
            {{ Form::file('image') }}
        </p>
        
        <p>
            {{ Form::label('video', 'video') }}</br>
            {{ Form::file('video') }}
        </p>
        
        <p>
            {{ Form::label('status', 'Status') }}</br>
            {{ Form::select('status', array('--Select One--','Not Published','Published'),Input::old('status')) }}
		</p>    
    
        {{ Form::submit('Create Page!') }}
    
    {{ Form::close() }}
@stop