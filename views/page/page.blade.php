@extends('layouts.default')

@session('content')
	<div class="container">
		<h1>{{ $page->page_title }}</<h1>
		<p>{{ $page->page_description }}</p>
	</div>
@stop