@extends('layouts.default')

@section('content')

<div class="container padded">
    <div class="row">
        <div class="col-lg-12">
            <h2>Our Clients</h2>
            <hr>
            <p>Many corporate clients use us to help their employees to navigate in their daily work lives, business trips and clients meetups, find out what we can do for you.</p>
        </div>
    </div> 
    <div class="row tpad myTooltip">
        <div class="col-sm-6 col-md-3 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img src="images/client-logo1.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="client two" class="thumbnail">
                <img src="images/client-logo2.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="client three" class="thumbnail">
                <img src="images/client-logo3.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="client four" class="thumbnail">
                <img src="images/client-logo4.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="client five" class="thumbnail">
                <img src="images/client-logo5.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="client six" class="thumbnail">
                <img src="images/client-logo6.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="client seven" class="thumbnail">
                <img src="images/client-logo7.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="client eight" class="thumbnail">
                <img src="images/client-logo8.png" alt="logo">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordian-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-briefcase"></span> Corporate Clients</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac est luctus, cursus elit ac, convallis eros. Integer lobortis hendrerit ante id facilisis. Suspendisse commodo augue ac orci lobortis vulputate. Donec posuere vitae lectus et ornare. Cras tincidunt libero et ipsum consectetur, vel posuere dolor tempor. Integer a dui eget ipsum elementum sodales. Fusce vel justo tincidunt, facilisis ligula sed, porttitor lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;.
                        </div>
                    </div>
                </div>
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordian-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-barcode"></span> Commercial Clients</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac est luctus, cursus elit ac, convallis eros. Integer lobortis hendrerit ante id facilisis. Suspendisse commodo augue ac orci lobortis vulputate. Donec posuere vitae lectus et ornare. Cras tincidunt libero et ipsum consectetur, vel posuere dolor tempor. Integer a dui eget ipsum elementum sodales. Fusce vel justo tincidunt, facilisis ligula sed, porttitor lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->
@stop