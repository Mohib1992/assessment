@extends('layouts.default')

@session('content')
	<div class="container padded">

        <div class="row">
            <div class="col-lg-9 col-md-offset-2"><h2>page title</h2><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-offset-2">
                <p>page content</p>
            </div>
        </div>
    </div>
@stop