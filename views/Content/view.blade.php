@extends('layouts.admin')

@section('content')
    <h4>Short Descriptions</h4>

    @foreach($contents as $content)
        @if($content->translation_key_id == ContentKey::$HOW_WE_ARE)
            <h3>Who We Are</h3>
        @endif

        @if($content->translation_key_id == ContentKey::$OUR_ADVANTAGE)
            <h3>Our Advantages</h3>
        @endif

        <artical>
            {{ $content->content }}
        </artical>
        {{ HTML::link('/admin/content/'.$content->translation_key_id.'/edit','Edit',array('class'=>'btn btn-primary')) }}
    @endforeach
@stop