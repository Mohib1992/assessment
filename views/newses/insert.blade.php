@extends('layouts.default')

@section('content')
	<h1>Add New News</h1>
    
    {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'newses/create','method'=>'POST')) }}

		<p>
            {{ Form::label('publication_date', 'Date of Publication') }}</br>
            {{ Form::text('publication_date', $pub, array('disabled')) }}
		</p>
            
		<p>
            {{ Form::label('title', 'Title') }}</br>
            {{ Form::text('title', Input::old('title')) }}
		</p>
    
        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', Input::old('description')) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Image') }}</br>
            {{ Form::file('image') }}
        </p>
        
        <p>
            {{ Form::label('status', 'Status') }}</br>
            {{ Form::select('status', array('0'=>'Not Published','1'=>'Published')) }}
		</p>    
    
        {{ Form::submit('Create News!') }}
    
    {{ Form::close() }}

@stop