@extends('layouts.admin')

@section('content')
	<h1>Editing {{ $post->title }}</h1>
        
     {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'/admin/post/update','method'=>'PUT','enctype'=>'multipart/form-data')) }}
			{{ Form::hidden('id',$post->id)}}
		<p>
            {{ Form::label('title', 'Title') }}</br>
            {{ Form::text('title', $post->title) }}
		</p>
    
        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', $post->description ) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Cover Image') }}</br>
            {{ Form::file('cover_image') }}
        </p>
        
        <p>
            {{ Form::label('tages', 'Tags') }}</br>
            {{ Form::text('tages', $post->tages,array('id'=>'tages')) }}
		</p>
        
        <p>
            {{ Form::label('status', 'Status') }}</br>
            {{ Form::select('status', array('--Select One--','Not Published','Published'),$post->status) }}
		</p>    
    
        {{ Form::submit('Update Post!') }}
    
    {{ Form::close() }}
@stop