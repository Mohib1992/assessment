 @extends('layouts.admin')

@section('content')
	@include('common.flashmessage')
	<a class="btn btn-default" href="{{ URL::to('/admin/news/create') }}" xmlns="http://www.w3.org/1999/html">
  			<span class="glyphicon glyphicon-plus"></span> Add News
		</a>
	<div class="col-sm-8">
		@if(isset($newses))			
			@foreach($newses as $news)
				 {{ Form::open(array('url' => 'admin/news/' . $news->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete',array('class'=>'btn btn-danger')) }}
                {{ Form::close() }}
                {{ HTML::link('admin/news/'.$news->id.'/edit','Edit',array('class'=>'btn btn-primary'))}}
				@if($news->status == 'publish')
					<a class="btn btn-primary stop" href="{{ $news->id }}">
  						<span class="glyphicon glyphicon-stop"></span>
					</a>
				@else 
					<a class="btn btn-primary play" href="{{ $news->id }}" >
	  					<span class="glyphicon glyphicon-play"></span>
					</a>				
				@endif
				<span class="glyphicon glyphicon-time"> {{ $news->created_at->diffForHumans() }} </span>
				<span class="glyphicon glyphicon-time"> Last Updated : {{ $news->updated_at->diffForHumans() }} </span></br>
				{{ HTML::image('images/'.$news->cover_image,null,array('class'=>'news-list')) }}<br />
				{{ $news->getTitle() }}<br />
				{{ $news->getDescription() }}<br />
			@endforeach
		@endif
	</div>
@stop