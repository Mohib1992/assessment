@extends('layouts.default')

@section('content')
	
<div class="container padded">
    <div class="row">
        <div class="col-lg-12">
            <h2>Our projects</h2>
            <hr>
            <p>Detailed Projects</p>
        </div>
    </div> 
    <div class="row tpad myTooltip">
    	@if(isset($projects))
    		@foreach($projects as $project )
		        <div class="col-sm-6 col-md-3 bpad">
		            <a href="{{ URL::to('/project/'.$project->id) }}" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">	                
		                {{ HTML::image($project->cover_image,'logo') }}
		            </a>
		        </div>
	        @endforeach
        @endif        
    </div>
</div>
<!-- End Page Content -->
@stop