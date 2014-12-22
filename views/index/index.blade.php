@extends('layouts.default')



@section('content')

<div class="container">
    <!-- Test change -->
	<div class=" col-lg-9 col-md-offset-2">
            <div class="bs-example">
                <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>   
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <img src="images/slide3.jpg">
                            <h2>Slide 1</h2>
                            <div class="carousel-caption">
                                <h3>First slide label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slide2.jpg">
                            <h2>Slide 2</h2>
                            <div class="carousel-caption">
                                <h3>Second slide label</h3>
                                <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slide1.jpg">
                            <h2>Slide 3</h2>
                            <div class="carousel-caption">
                                <h3>Third slide label</h3>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
		</div>
        </div>       
<!-- Page Content -->
        <div class="container col-centered">
            <div class="row">
                <div class="col-lg-9 col-md-offset-2"><h2>{{ trans('content.KnowAboutUs')}}</h2><hr></div>
            </div>
            <div class="container">
			<div class="row">
                <div class="col-sm-3 col-md-3 col-md-offset-2">
                    <img class="img-circle img-responsive" src="images/speed.jpg">
                    <h3>{{ trans('content.WhoWeAre') }}</h3>
                    <p>{{ trans('content.WhoWeAreShort') }}</p>
                    <p>{{ HTML::link('/about',trans('button.VIEW_DETAIL'),array('class'=>'btn btn-default'))}}</p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <img class="img-circle img-responsive" src="images/eco.jpg">
                    <h3>{{ trans('content.OurAdvantages') }}</h3>
                    <p>{{ trans('content.OurAdvantagesShort') }}</p>
                    <p>{{ HTML::link('/advantage',trans('button.VIEW_DETAIL'),array('class'=>'btn btn-default dropdown-toggle'))}}
					</p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title" style="color: #fff; font-size: 24px;">{{ trans('content.OurExpertise') }}</h2>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li>Strategi & Organization</li>
                                    <li>Coorporate Development</li>
                                    <li>Globalization</li>
                                    <li>Operations</li>
                                    <li>Corporate Finance</li>
                                    <li>IT Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title" style="color: #fff; font-size: 24px;">{{ trans('content.ContactWithUs')}}</h2>
                            </div>
                            <div class="panel-body" style="background-color=#aaa;">
                                <p>WE ARE HERE TO HELP YOU DRIVE CHANGE TOGETHER WE WILL SHAPE THE FUTURE.</p>
                                <span>Tel: </span>
                                <p><span>000-000-000 </span></p>
                                <span>Mail: </span>
                                <p><span>info@mysite.com </span></p>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="clearfix hidden-md hidden-lg"></div>
            </div>
			</div>
            
            	<div class="row">
                    <div class="col-lg-9 col-md-offset-2"><h2>{{ trans('content.NewAndPublication')}}</h2></h2><hr></div>
                </div>
                @if(isset($newses))
                	@foreach($newses as $news)
		                <div class="news">
		                    <div class="row">
		                        <div class="col-sm-1 col-md-offset-2">		                            
		                            {{ HTML::image('images/'.$news->cover_image,NULL,array('class'=>'img-thumbnail img-responsive')) }}
		                        </div>
		                        <div class="col-sm-8">
		                            <p style="text-align: justify;">{{ $news->description }}</p>
		                            {{ HTML::link('news/'.$news->id,trans('button.READ_MORE'),array('class'=>'btn btn-default'))}}
		                        </div>
		                    </div>
		                </div>
		              @endforeach
               	@endif
                
        </div>            
        <!-- End Page Content -->
@stop


