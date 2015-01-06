@extends('layouts.admin')

@section('content')
	<h1>Editing {{ $news->title }}</h1>
    
    @include('newses.partials.error')
    
    {{ Form::open(array('url'=>'/admin/news/update','method'=>'PUT','enctype'=>'multipart/form-data')) }}	
    		{{ Form::hidden('id',$news->id)}}
		<p>
            {{ Form::label('publication_date', 'Date of Publication '.$news->getCreateTime()) }}</br>
		</p>

		<p>
            {{ Form::label('title', 'Title') }}</br>
            {{ Form::text('titleInEnglish',$title['english']) }}
		</p>

        <p>
            {{ Form::label('title', 'Title') }}
            <span>(In German)</span>
            {{ Form::text('titleInGerman', $title['german']) }}
		</p>

        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('descriptionInEnglish', $description['english']) }}
        </p>
        <p>
            {{ Form::label('description', 'Description') }}
            <span>(In German)</span>
            {{ Form::textarea('descriptionInGerman', $description['german']) }}
        </p>

        <p>
        	{{ HTML::image('images/'.$news->cover_image,null,array('class'=>'news-list'))}}
            {{ Form::label('image', 'Cover Image ') }}</br>
            {{ Form::file('cover_image') }}
        </p>

        <p>
            {{ Form::label('status', 'Status') }}</br>
            {{ Form::select('status', array('--Select One--','Not Publish','Publish'), $news->status ) }}
    	</p>
   
        {{ Form::submit('Update News!') }}

    {{ Form::close() }}

@stop