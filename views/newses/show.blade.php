@extends('layouts.default')

@section('content')
    <div class="container padded">
        <div class="row">
            <div class="col-lg-9 col-md-offset-2"><h2>{{ $news->getTitle() }}</h2>{{ $news->getCreateTime() }}<hr></div>
        </div>
        @if(isset($news))
            <div class="row">
                <div class="col-sm-3 col-md-3 col-md-offset-2">
                    {{ HTML::image('images/'.$news->cover_image,$news->cover_image,array('class'=>'img-circle img-thumbnail img-responsive'))}}
                </div>
                <div class="col-sm-6 col-md-6">
                    <p id="member-description">{{ $news->getDescription() }}</p>
                </div>
            </div>
        @endif
    </div>
@stop