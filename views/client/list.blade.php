@extends('layouts.admin')


@section('content')	

	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<a class="btn btn-default" href="{{ URL::to('/admin/client/create') }}" >
  			<span class="glyphicon glyphicon-plus"></span></a>
	<div class="col-sm-8">
	@foreach($client as $e)
		{{ $e->name }}
		{{ $e->description }}
		{{ HTML::image('images/'.$e->image) }}
		{{ HTML::link('admin/client/'.$e->id.'/edit','Edit')}}	
		{{ Form::open(array('url' => 'admin/client/' . $e->id)) }}
			{{ Form::hidden('_method', 'DELETE') }}
			{{ Form::submit('Delete') }}
		{{ Form::close() }}		
	@endforeach
@stop