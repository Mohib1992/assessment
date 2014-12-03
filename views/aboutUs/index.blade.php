@extends('layouts.default')

@section('content')

	<div class="container padded">
		<div class="row">
	        <div class="col-lg-9 col-md-offset-2"><h2>{{ $page->autoTitleTranslation() }}</h2><hr></div>
	    </div>
	    <div class="row">
	    	<div class="col-lg-9 col-md-offset-2">	    		
				<p>
                    {{ $page->autoContentTranslation() }}
				</p>				
				<div class="clearfix hidden-md hidden-lg"></div>
			</div>			
		</div>				
	</div>
@stop