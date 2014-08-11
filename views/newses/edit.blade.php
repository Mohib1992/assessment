@extends('layouts.default')

@section('content')
	<h1>Editing {{ $news->title }}</h1>
    
       
    {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'newses/update','method'=>'PUT')) }}

		<p>
            {{ Form::label('publication_date', 'Date of Publication') }}</br>
            {{ Form::text('publication_date', $news->publication_date, array('disabled')) }}
		</p>
            
		<p>
            {{ Form::label('title', 'Title') }}</br>
            {{ Form::text('title', $news->title) }}
		</p>
    
        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', $news->description) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Image '.$news->image ) }}</br>
            {{ Form::file('image') }}
        </p>
        
        <p>
            {{ Form::label('status', 'Status') }}</br>
            {{ Form::select('status', array('0'=>'Not Published','1'=>'Published'), $news->status) }}
    	</p>    
        
        {{ Form::hidden('id', $news->id) }}
   
        {{ Form::submit('Update News!') }}
    
    {{ Form::close() }}

@stop