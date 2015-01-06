@extends('layouts.admin')


@section('content')	
	@include('common.flashmessage')
	<a class="btn btn-default" href="{{ URL::to('/admin/employee/create') }}" >
  			<span class="glyphicon glyphicon-plus"></span></a>
	<div class="col-sm-8">
	@foreach($employee as $e)
		{{ $e->name }}
		<span>In English :</span>
		{{ $e->getContentEnglish() }}
		<span>In German :</span>
		{{ $e->getContentGerman() }}
		{{ HTML::image('images/'.$e->image) }}
		{{ HTML::link('admin/employee/'.$e->id.'/edit','Edit',array('class'=>'btn btn-primary'))}}
		{{ Form::open(array('url' => 'admin/employee/' . $e->id)) }}
			{{ Form::hidden('_method', 'DELETE') }}
			{{ Form::submit('Delete',array('class'=>'btn btn-danger')) }}
		{{ Form::close() }}
	@endforeach
@stop