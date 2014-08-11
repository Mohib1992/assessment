 @extends('layouts.default')

@section('content')
	<h1>Newses</h1>
    <ul>
	@foreach($newses as $news)
		<li>{{ HTML::linkRoute('news',$news->title,array($news->id)) }}</li>
    @endforeach
	</ul>
    
	<p>{{ HTML::linkRoute('new_news','Create New News') }}</p>
@endsection
