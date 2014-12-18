@extends('layouts.admin')

@section('content')
	<h1>Add New News</h1>
        
     {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'/admin/news','method'=>'POST','enctype'=>'multipart/form-data')) }}
	
		<p>
            {{ Form::label('title', 'Title') }}</br>
            {{ Form::text('title', Input::old('title')) }}
		</p>
        <p>
                {{ Form::label('title', 'Title') }}</br>
                <span>(In German)</span>
                {{ Form::text('titleGerman', Input::old('titleGerman')) }}
            </p>

        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', Input::old('description')) }}
        </p>
        <p>
            {{ Form::label('description', 'Description') }}</br>
            <span>(In German)</span>
            {{ Form::textarea('descriptionGerman', Input::old('descriptionGerman')) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Cover Image') }}</br>
            {{ Form::file('cover_image') }}
        </p>
        
        <p>
            {{ Form::label('status', 'Status') }}</br>
            {{ Form::select('status', array('--Select One--','Not Published','Published'),Input::old('status')) }}
		</p>    
    
        {{ Form::submit('Create News!') }}
    
    {{ Form::close() }}

@stop