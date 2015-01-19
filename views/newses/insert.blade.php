@extends('layouts.admin')

@section('content')
	<h1>Add New News</h1>

    @include('newses.partials.error')
    
    {{ Form::open(array('url'=>'/admin/news','method'=>'POST','enctype'=>'multipart/form-data')) }}
	
		<p>
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', Input::old('title')) }}
		</p>
        <p>
                {{ Form::label('title', 'Title') }}
                <span>(In German)</span>
                {{ Form::text('titleGerman', Input::old('titleGerman')) }}
            </p>

        <p>
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', Input::old('description')) }}
        </p>
        <p>
            {{ Form::label('description', 'Description') }}
            <span>(In German)</span>
            {{ Form::textarea('descriptionGerman', Input::old('descriptionGerman')) }}
        </p>

        <p>
            {{ Form::label('image', 'Cover Image') }}
            {{ Form::file('cover_image') }}
        </p>

        <p>
            {{ Form::label('status', 'Status') }}
            {{ Form::select('status', array('--Select One--','Not Published','Published'),Input::old('status')) }}
		</p>
    
        {{ Form::submit('Create News!') }}
    
    {{ Form::close() }}

@stop