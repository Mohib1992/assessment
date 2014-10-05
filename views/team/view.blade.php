@extends('layouts.default')

@section('content')
	<div class="container">
	@if(isset($employee))
		 {{ HTML::image('images/'.$employee->image,$employee->image,array('class'=>'img-thumbnail img-responsiv'))}}
		 {{ $employee->name }}
		 {{ $employee->description }}
	@endif
	</div>
@stop