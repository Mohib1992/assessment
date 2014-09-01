@extends('layouts.default')

@section('content')
	{{ HTML::image('images/'.$post->cover_image) }}
	{{ $post->title }}
	{{ $post->description }}
@stop