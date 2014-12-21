@extends('layouts.admin')

@section('content')

    <h1>Add New News</h1>

    @include('newses.partials.error')

    {{ Form::open(array('url'=>'/admin/content','method'=>'PUT')) }}
        {{ Form::hidden('key',$key) }}
    <p>
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', $contentInEnglish->content) }}
    </p>
    <p>
        {{ Form::label('description', 'Description') }}
        <span>(In German)</span>
        {{ Form::textarea('descriptionGerman',$contentInGerman->content) }}
    </p>

    {{ Form::submit('Update News!') }}

    {{ Form::close() }}

@stop