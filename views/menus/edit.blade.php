@extends('layouts.admin')

@section('content')
    <a class="btn btn-default" href="{{ URL::to('/admin/menu/') }}" >
      			<span class="glyphicon glyphicon-arrow-left"></span></a>
    {{ Form::open(array('url'=>'admin/menu/update','method'=>'PUT')) }}
        {{ Form::hidden('key',$translation['key']) }}
        <p>
            {{ Form::label('title', 'Menu Name') }}
        </p>
        <p>
            <span>(In English)</span>
            {{ Form::text('englishMenuName',$translation['english']) }}
        </p>

        <p>
            <span>(In German)</span>
            {{ Form::text('germanMenuName', $translation['german']) }}
        </p>
        {{ Form::submit('Update!',array('class'=>'btn btn-primary')) }}
    {{ Form::close() }}
@stop