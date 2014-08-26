@extends('layouts.admin')

@section('content')
	<a class="btn btn-default" href="{{ URL::to('/admin/news/new') }}" >
  			<span class="glyphicon glyphicon-plus"></span> Add News
		</a>
	<div class="col-sm-8">		
		@if(isset($newses))
			@foreach($newses as $news)
				<a class="btn btn-danger" href="news/delete/{{$news->id}}" >
  					<span class="glyphicon glyphicon-trash"></span>
				</a>
				<a class="btn btn-primary" href="{{ URL::to('/admin/news/edit/'.$news->id) }}" >
  					<span class="glyphicon glyphicon-pencil"></span>
				</a>
				@if($news->status == 'publish')
					<a class="btn btn-primary stop" href="#" >
  						<span class="glyphicon glyphicon-stop"></span>
					</a>
				@else 
					<a class="btn btn-primary play" href="#" >
	  					<span class="glyphicon glyphicon-play"></span>
					</a>				
				@endif
				{{ HTML::image('images/'.$news->cover_image) }}<br />
				{{ $news->title }} || {{ $news->created_at }} <br />
				{{ $news->description }}<br />
			@endforeach
		@endif
	</div>
@stop