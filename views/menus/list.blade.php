@extends('layouts.admin');

@section('content')
    <div class="row">
            <div class="col-sm-2">
                <table class="table table-striped table-responsive table-bordered">
                    <tr>
                        <td>English</td>
                    </tr>
                    <tr>
                        @foreach($menusInEnglish as $english)
                            <td>{{ $english->content }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>German</td>
                    </tr>
                    <tr>
                        <?php $i=1; ?>
                        @foreach($menusInGerman as $german)
                            @if($i == $german->translation_key_id)
                                <td>{{ $german->content }}</td>
                            @else
                                <td>&nbsp;</td>
                            @endif
                            <?php $i++; ?>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($menusInEnglish as $english)
                            <td>{{ HTML::link('/admin/menu/'.$english->translation_key_id.'/edit','Edit',array('class'=>'btn btn-sm btn-primary')) }}</td>
                        @endforeach
                    </tr>
                </table>
            </div>
    </div>
@stop