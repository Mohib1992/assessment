@extends('layouts.default')

@section('content')
	<div class="container padded">
	<div class="row">
        <div class="col-lg-9 col-md-offset-2"><h2>{{ $employee->name }}</h2><hr></div>
    </div>
	@if(isset($employee))
	<div class="row">
		 <div class="col-sm-3 col-md-3 col-md-offset-2">
			{{ HTML::image('images/'.$employee->image,$employee->image,array('class'=>'img-circle img-thumbnail img-responsive'))}}
		 </div>
		 <div class="col-sm-6 col-md-6">
			<p id="member-description">{{ $employee->autoContentTranslation() }}</p>
		 </div>
	</div>
	@endif
	</div>
@stop