@extends('layouts.admin')

@section('content')

    <h1>Edit Content</h1>

    @include('newses.partials.error')

    {{ Form::open(array('route'=>'admin.content.update','method'=>'PUT')) }}
        {{ Form::hidden('key',$key) }}
    <p>
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('descriptionInEnglish', $contentInEnglish->content) }}
    </p>
    <p>
        {{ Form::label('description', 'Description') }}
        <span>(In German)</span>
        {{ Form::textarea('descriptionInGerman',$contentInGerman->content) }}
    </p>

    {{ Form::submit('Update News!') }}

    {{ Form::close() }}

@stop