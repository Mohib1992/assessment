@extends('layouts.default')

@section('content')
	<h1>View News</h1>
    @if(isset($news))
        <h1>{{ $news->title }}</h1>
        <p>{{ $news->description }}</p>
        <p><small>{{ $news->publication_date }}</small></p>
    @endif
    
    <span>
	    {{ HTML::linkRoute('newses','Newses') }} |
	    {{ HTML::linkRoute('edit_news','Edit',array($news->id)) }}
	    {{ Form::open(array('url'=>'newses/delete','method'=>'delete')) }}	
	    {{ Form::hidden('id',$news->id ) }}	
		{{ Form::submit('Delete News !') }}		
		{{ Form::close() }}
	</span>
	
@endsection