@extends('layouts.admin')

@section('content')
	<h1>Editing</h1>
        
     {{ HTML::ul($errors->all()) }}
    
       {{ Form::model($page, array('route' => array('admin.page.update', $page->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
            <p>
                {{ Form::label('title', 'Page Title') }}</br>
                {{ Form::text('page_title', $page->getPageTitleEnglish()) }}
            </p>

            <p>
                {{ Form::label('title', 'Page Title') }}</br>
                @include('common.german')
                {{ Form::text('page_title_german', $page->getPageTitleGerman()) }}
            </p>

            <p>
                {{ Form::label('page_content', 'Page Content') }}</br>
                {{ Form::textarea('page_content', $page->getPageContentEnglish()) }}
            </p>

            <p>
                {{ Form::label('page_content', 'Page Content') }}</br>
                @include('common.german')
                {{ Form::textarea('page_content_german',$page->getPageContentGerman()) }}
            </p>

            @if($page->id > 6)
            <p>
                {{ Form::label('image', 'Image') }}</br>
                {{ Form::file('image') }}
            </p>

            <p>
                {{ Form::label('video', 'video') }}</br>
                {{ Form::file('video') }}
            </p>

            <p>
                {{ Form::label('status', 'Status') }}</br>
                {{ Form::select('status', array('--Select One--','Not Published','Published'),'') }}
            </p>
            @endif
    
        {{ Form::submit('Update Post!') }}
    
    {{ Form::close() }}
@stop