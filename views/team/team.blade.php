@extends('layouts.default')

@section('content')

<div class="container padded">
    <div class="row">
        <div class="col-lg-12"><h2>Our Team</h2><hr></div>
    </div>
		@if(isset($employees))
			<div class="row">
			@foreach($employees as $employee)
				<div class="col-sm-4 col-md-4">            
		            {{ HTML::image($employee->image,null,array('class'=>'img-thumbnail img-responsive')) }}
		            <h3>{{ $employee->name }}</h3>
		            <p>{{ $employee->description }}</p>
		        </div>		
			@endforeach
		@endif                    
        <div class="clearfix hidden-md hidden-lg"></div>
    </div>
</div>  
<!-- End Page Content -->
    
    
@stop