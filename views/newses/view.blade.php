@extends('layouts.admin')

@section('content')
	<a class="btn btn-default" href="{{ URL::to('/admin/news/new') }}" >
  			<span class="glyphicon glyphicon-plus"></span> Add News
		</a>
	<div class="col-sm-8">		
		@if(isset($newses))
			@foreach($newses as $news)
				{{ HTML::image($news->cover_image) }}<br />
				{{ $news->title }} || {{ $news->created_at }} <br />
				{{ $news->description }}<br />
			@endforeach
		@endif
	</div>
@stop