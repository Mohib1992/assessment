@extends('layouts.default')



@section('content')

<div class="container">
    <!-- Test change -->
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
<!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><h2>Know About Us</h2><hr></div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <img class="img-circle img-responsive" src="images/speed.jpg">
                    <h3>Who we are</h3>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	Lorem ipsum dolor sit amet
                    </p>
                    <p>{{ HTML::link('/about','View Details',array('class'=>'btn btn-default'))}}</p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <img class="img-circle img-responsive" src="images/eco.jpg">
                    <h3>Our Services</h3>                                       
                    <p>Learn about our services
						<li class="dropdown" style="list-style-type: none;">
                        <a href="#" class="dropdown-toggle btn btn-default" data-toggle="dropdown">View details &raquo;</b></a>
                        <ul class="dropdown-menu" >
                              <li>{{ HTML::link('/services/it','IT') }}</li>                           
                            <li>{{ HTML::link('/services/garments','Garments') }}</li>                           
                        </ul>
						</li>
					</p>                    
                </div>
                <div class="col-sm-3 col-md-3">
                    <img class="img-circle img-responsive" src="images/eco.jpg">
                    <h3>Our Advantages</h3>
                    <p>Due to our geographical situation and professional background we have some advantages. To learn more, please follow the link.</p>					
                    <p>{{ HTML::link('/advantage','View Details',array('class'=>'btn btn-default dropdown-toggle'))}}
					</p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title" style="color: #fff; font-size: 24px;">Our Experties</h2>
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
                                <h2 class="panel-title" style="color: #fff; font-size: 24px;">Connect With Us</h2>
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
            
            	<div class="row">
                    <div class="col-lg-12"><h2>News and Publications</h2><hr></div>
                </div>
                @if(isset($newses))
                	@foreach($newses as $news)
		                <div class="news">
		                    <div class="row">
		                        <div class="col-sm-1">		                            
		                            {{ HTML::image('images/'.$news->cover_image,NULL,array('class'=>'img-thumbnail img-responsive')) }}
		                        </div>
		                        <div class="col-sm-11">
		                            <p>{{ $news->description }}</p>
		                            {{ HTML::link('news/'.$news->id,'Read More',array('class'=>'btn btn-default'))}}
		                        </div>
		                    </div>
		                </div>
		              @endforeach
               	@endif
                
        </div>            
        <!-- End Page Content -->

        <!--login form -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">Login Form</h3>
                    </div>
                    <div class="modal-body">                        
                        {{ Form::open(array('class'=>'form-horizontal')) }}
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">                                    
                                    {{ Form::label('email','Email',array('class'=>'col-md-4 control-label'))}}
                                    <div class="col-md-5">                                        
										{{ Form::input('text','email',Input::old('email'),array('placeholder'=>'"Ex: Example@abc.com"','name'=>'email','class'=>'form-control input-md')) }}
                                    </div>                                    
                                    <div class="col-md-5">                    
               							 {{ $errors->first('email') }}
                                    </div>                                    
                                </div>                                

                                <!-- Password input-->
                                <div class="form-group">
                                	{{ Form::label('password','Password',array('class'=>'col-md-4 control-label'))}}       
                                    <div class="col-md-5">
                                    	{{ Form::password('password',array('class'=>'form-control input-md')) }}              
                                    </div>
                                    <div class="col-md-5">                    
               							 {{ $errors->first('password') }}
                                    </div>                            
                                </div>

                            </fieldset>
                        {{ Form::close()}}

                    </div>
                    <div class="modal-footer">
                    	{{ HTML::link('','Submit',array('class'=>'btn btn-primary btn-lg','id'=>'login')) }}                        					{{ HTML::link('','Cancel',array('class'=>'btn btn-danger btn-lg', 'id'=>'cancel')) }}               
                    </div>
                </div>
            </div>
        </div>
        <!--end of login form -->
@stop


