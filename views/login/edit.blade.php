@extends('layouts.admin')

@section('content')
    @if(Session::get('message'))
        <span class="alert alert-info">{{Session::get('message')}}</span>
    @endif
    <div class="login-card">
        {{$errors->first('email')}}
        {{$errors->first('password')}}
        {{$errors->first('conform_password')}}
        <h1>User Detail</h1><br>
        {{Form::open(array('url' => 'admin/user/update', 'method' => 'PUT'));}}
        {{Form::hidden('id',$user->id)}}
        {{Form::email('email',$user->email)}}
        {{ Form::password('password',array('placeholder'=>'Password')) }}
        {{ Form::password('conform_password',array('placeholder'=>'Conform Password')) }}
        {{Form::submit('Update',array('class'=>'login login-submit'))}}
        {{Form::close()}}
    </div>
@stop