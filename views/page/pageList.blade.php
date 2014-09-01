@extends('layouts.admin')

@section('content')
				<a class="btn btn-default" href="{{ URL::to('/admin/page/new')}}" >
  					<span class="glyphicon glyphicon-plus"></span>
				</a>
	@if(isset($page))
		@foreach($page as $p)
				<a class="btn btn-danger" href="news/delete/{{$p->id}}" >
  					<span class="glyphicon glyphicon-trash"></span>
				</a>
				<a class="btn btn-primary" href="{{ URL::to('/admin/news/edit/'.$p->id) }}" >
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
			{{ $p->page_title }}			
		@endforeach
	@endif
@stop