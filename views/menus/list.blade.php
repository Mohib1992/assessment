@extends('layouts.admin');

@section('content')
    <div class="row">
            <div class="col-sm-2">
                <table class="table table-striped table-responsive table-bordered">
                    <tr>
                        <td>#</td>
                        <td>English</td>
                    </tr>
                    @foreach($menus as $eng)
                        @foreach($eng as $e)
                            <tr>
                                <td>{{ $e }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </table>
            </div>
    </div>
@stop