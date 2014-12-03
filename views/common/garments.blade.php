@extends('layouts.default')

@section('content')

	<div class="container padded">		
		
		<div class="row">
			<div class="col-lg-9 col-md-offset-2"><h2>{{ trans('content.Garments') }}</h2><hr></div>
		</div>
		<div class="row">
			<div class="col-lg-9 col-md-offset-2">
                {{ trans('content.GarmentsDetail') }}
			</div>
		</div>				
	</div>
	
@stop