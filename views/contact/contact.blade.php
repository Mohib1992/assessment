@extends('layouts.default')

@section('content')


<div class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d233752.9124081472!2d90.3989032544048!3d23.73349466158374!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1407601229193" width="600" height="450" frameborder="0" style="border:0"></iframe><br />
</div>
<div class="container">
    <div class="row">    
        <div class="col-lg-9 col-md-offset-2">
    <small><a href="#" style="color:#0000FF;text-align:left">View Larger Map</a></small> 
        </div>
    </div>
</div>
<div class="container padded">
    <div class="row">
        <div class="col-sm-6 col-md-offset-2">
            <h2>{{trans('content.GET_IN_TOUCH')}}</h2>
            <hr>
            <p>Feel Free to contact <strong>3Spire</strong> team</p>
            @if(Session::has('success'))
                <div class="alert alert-info">{{Session::get('success')}}</div>
            @endif
            {{Form::open(array('url'=>'/contact/feedback','method'=>'POST','class'=>'form-horizontal tpad','role'=>'form'))}}
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">{{trans('content.EMAIL')}}</label>
                    <div class="col-lg-10">
                        {{Form::email('email','',array('class'=>'form-control','id'=>'email','placeholder'=>trans('content.YOUR_EMAIL')))}}
                    </div>
                </div>
                <div class="form-group tpad">
                    <label for="message" class="col-lg-2 control-label">{{trans('content.MESSAGE')}}</label>
                    <div class="col-lg-10">
                        {{Form::textarea('message','',array('required'=>'enable','class'=>'form-control','row'=>'6','placeholder'=>trans('content.MESSAGE').'...'))}}
                    </div>
                </div>
                <div class="form-group tpad">
                    <div class="col-lg-offset-2 col-lg-10">
                        {{Form::submit(trans('button.SEND'),array('class'=>'btn btn-default btn-lg'))}}
                    </div>
                </div>
            {{Form::close()}}
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">Thank you for submitting</h3>
                    </div>
                    <div class="modal-body">
                        <p>We appreciate you getting in touch. Please be patient, we will contact you shortly with a reply.</p>
                        <p>The 3Spire Team</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-default btn-lg">OK</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <img class="img-circle img-responsive" src="images/office.jpg">
            <hr>
            <address>
                    <h3>3Spire</h3>
                    Vienna, Austria<br>
                    <a href="mailto: test@mail.com">3Spire@gmail.com</a><br>
                    <abbr title="Phone">P:</abbr>xxx xxx-xxxx
            </address>
        </div>
    </div>    
</div>
@stop