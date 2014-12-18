@extends('layouts.admin');

@section('content')
    <div class="row">
            <div class="col-sm-2">
                <table class="table table-striped table-responsive table-bordered">
                    <tr>
                        <td>#</td>
                        <td>English</td>
                    </tr>
                    @foreach($menusEnglish as $eng)
                        <tr>
                            <td>{{ $eng->translation_key_id }}</td>
                            <td>{{ $eng->content }}</td>
                         </tr>
                    @endforeach
                </table>
                </div>
                <div class="col-sm-2">
                <table class="table table-striped table-responsive table-bordered">
                    <tr>
                        <td>German</td>
                    </tr>
                    @foreach($menusGerman as $ger)
                            <tr>
                                @if(!empty($ger->content))
                                    <td>{{ $ger->content }}</td>
                                @else
                                    <td>&nbsp;</td>
                                @endif
                             </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-sm-2">
            <table class="table table-striped table-responsive table-bordered">
                <tr>
                    <td>Action</td>
                </tr>
                @foreach($menusEnglish as $eng)
                        <tr>
                            <td>{{ HTML::link('/admin/menu/'.$eng->translation_key_id.'/edit','Edit',array('class'=>'btn btn-primary')) }}</td>
                         </tr>
                @endforeach
            </table>
            </div>
    </div>
@stop