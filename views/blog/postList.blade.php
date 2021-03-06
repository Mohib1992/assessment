@extends('layouts.admin')

@section('content')
	@if(isset($post))
		<a class="btn btn-default" href="{{ URL::to('/admin/post/new') }}" >
  			<span class="glyphicon glyphicon-plus"></span>
		</a>
		<ul>
		@foreach($post as $p)
				<li>
				<a class="btn btn-danger" href="news/delete/{{$p->id}}" >
  					<span class="glyphicon glyphicon-trash"></span>
				</a>
				
				<a class="btn btn-primary" href="{{ URL::to('/admin/post/edit/'.$p->id) }}" >
  					<span class="glyphicon glyphicon-pencil"></span>
				</a>
				
				@if($p->status == 'publish')
					<a class="btn btn-primary stop" href="#" >
  						<span class="glyphicon glyphicon-stop"></span>
					</a>
				@else 
					<a class="btn btn-primary play" href="#" >
	  					<span class="glyphicon glyphicon-play"></span>
					</a>				
				@endif
				{{ HTML::image('images/'.$p->cover_image,NULL,array('height'=>'30','width'=>'40')) }}
				{{ $p->title }}				
				</li>
		@endforeach
		</ul>
	@endif
@stop