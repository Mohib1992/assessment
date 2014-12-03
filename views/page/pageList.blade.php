@extends('layouts.admin')

@section('content')
        @include('common.flashmessage')
        <a class="btn btn-default" href="{{ URL::to('/admin/page/create')}}" >
            <span class="glyphicon glyphicon-plus"></span>
        </a>
		<ul>
        @foreach($page as $p)
            <li>
                {{ HTML::link('admin/page/'.$p->id.'/edit','Edit',array('class'=>'btn btn-primary'))}}
               @if($p->id > 6)
                {{ Form::open(array('url' => 'admin/page/' . $p->id)) }}
                			{{ Form::hidden('_method', 'DELETE') }}
                			{{ Form::submit('Delete',array('class'=>'btn btn-danger')) }}
                		{{ Form::close() }}
                @endif
                 {{ $p->getPageTitleEnglish() }}
            </li>
        @endforeach
@stop