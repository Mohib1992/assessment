@extends('layouts.admin');

@section('content')
    <div class="row">
            <div class="col-sm-7">
                <table class="table table-striped table-responsive table-bordered">
                    <tr>
                        <td>#</td>
                        <td>English</td>
                        <td>German</td>
                        <td colspan="2">Action</td>
                    </tr>
                    @foreach($menusEnglish as $eng)
                            <tr>
                                <td></td>
                                <td>{{ $eng->content }}</td>
                                @foreach($menusGerman as $ger)
                                    @if($eng->translation_key_id == $ger->translation_key_id)
                                        <td>{{ $ger->content }}</td>
                                    @else
                                        <td>&nbsp;</td>
                                    @endif
                                @endforeach
                                <td>Edit</td>
                                <td>Translate</td>
                             </tr>
                    @endforeach
                </table>
            </div>
    </div>
@stop