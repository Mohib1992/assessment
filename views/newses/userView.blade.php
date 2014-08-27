@extends('layouts.default')

@section('content')
	<div class="container">
	@if(isset($news))
		{{ HTML::image('images/'.$news->cover_image) }}
		<small>{{ $news->updated_at }}</small>
		<h1>{{ $news->title }}</h1>
		<p>{{ $news->description }}</p>
	@endif
	
	<h2>Archive</h2>
	<ul>
	@foreach($archive as $a)
		@if($a->status == 'publish')		
			@if($a->created_at == $a->updated_at )
				<li>{{ HTML::link('news/'.$a->id,$a->created_at) }}</li>
			@else 
				<li>{{ HTML::link('news/'.$a->id,$a->updated_at) }}</li>
			@endif
		@endif		
	@endforeach
	</ul>
	</div>
@stop