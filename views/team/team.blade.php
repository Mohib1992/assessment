@extends('layouts.default')

@section('content')

<div class="container padded">
    <div class="row">
        <div class="col-lg-12"><h2>Our Team</h2><hr></div>
    </div>
		@if(isset($employees))
			<div class="row">
			<div class="col-sm-2 col-md-2"> 	            
		        </div>	
			@foreach($employees as $employee)
				<div class="col-sm-4 col-md-4">            
		            {{ HTML::image('images/'.$employee->image,$employee->image,array('class'=>'img-circle img-thumbnail img-responsive')) }}
		            <h3 id="member_name">{{ HTML::link('team/'.$employee->id,$employee->name) }}</h3>		            
		        </div>		
			@endforeach
		@endif                    
        <div class="clearfix hidden-md hidden-lg"></div>
    </div>
</div>  
<!-- End Page Content -->
    
    
@stop