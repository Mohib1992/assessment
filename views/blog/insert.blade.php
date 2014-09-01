@extends('layouts.admin')

@section('content')
	<h1>Add New Post</h1>
        
     {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'/admin/post/create','method'=>'POST','enctype'=>'multipart/form-data')) }}
	
		<p>
            {{ Form::label('title', 'Title') }}</br>
            {{ Form::text('title', Input::old('title')) }}
		</p>
    
        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', Input::old('description')) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Cover Image') }}</br>
            {{ Form::file('cover_image') }}
        </p>
        
        <p>
            {{ Form::label('tages', 'Tages') }}</br>
            {{ Form::text('tages', Input::old('tages'),array('id'=>'tages')) }}
		</p>
        
        <p>
            {{ Form::label('status', 'Status') }}</br>
            {{ Form::select('status', array('--Select One--','Not Published','Published'),Input::old('status')) }}
		</p>    
    
        {{ Form::submit('Create Post!') }}
    
    {{ Form::close() }}
@stop