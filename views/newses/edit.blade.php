@extends('layouts.admin')

@section('content')
	<h1>Editing {{ $news->title }}</h1>
    
       
    {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'/admin/news/update','method'=>'PUT','enctype'=>'multipart/form-data')) }}	
    		{{ Form::hidden('id',$news->id)}}
		<p>
            {{ Form::label('publication_date', 'Date of Publication') }}</br>
            {{ Form::label('publication_date', $news->created_at) }}
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
        	{{ HTML::image('images/'.$news->cover_image)}}
            {{ Form::label('image', 'Cover Image ') }}</br>
            {{ Form::file('cover_image') }}
        </p>
        
        <p>
            {{ Form::label('status', 'Status') }}</br>
            {{ Form::select('status', array('--Select One--','Not Publish','Publish'), $news->status ) }}
    	</p>    
        
        {{ Form::hidden('id', $news->id) }}
   
        {{ Form::submit('Update News!') }}
    
    {{ Form::close() }}

@stop