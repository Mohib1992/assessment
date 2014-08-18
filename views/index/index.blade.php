@extends('layouts.default')



@section('content')

<div class="container">
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
                    <h3>Our Team</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p><a class="btn btn-default" href="team.html">View details &raquo;</a></p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <img class="img-circle img-responsive" src="images/eco.jpg">
                    <h3>Services</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p><a class="btn btn-default" href="projects.html">View details &raquo;</a></p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <img class="img-circle img-responsive" src="images/eco.jpg">
                    <h3>Clients</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p><a class="btn btn-default" href="clients.html">View details &raquo;</a></p>
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
                <div class="row">
                    <div class="col-lg-12"><h2>News and Publications</h2><hr></div>

                </div>
                <div class="news">
                    <div class="row">
                        <div class="col-sm-1">
                            <img class="img-thumbnail img-responsive" src="images/news_img.jpg">
                        </div>
                        <div class="col-sm-11">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a class="btn btn-default" href="projects.html">Read More &raquo;</a>
                        </div>
                    </div>
                </div>

                <div class="news">
                    <div class="row">
                        <div class="col-sm-1">
                            <img class="img-thumbnail img-responsive" src="images/news_img1.jpg">
                        </div>
                        <div class="col-sm-11">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a class="btn btn-default" href="projects.html">Read More &raquo;</a>
                        </div>
                    </div>
                </div>

                <div class="clearfix hidden-md hidden-lg"></div>
            </div>
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
                        <form class="form-horizontal">
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-name">Email</label>
                                    <div class="col-md-5">
                                        <input id="user-name" name="user-name" type="text" placeholder="Ex: example@abc.com" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password">Password</label>
                                    <div class="col-md-5">
                                        <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                            </fieldset>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <a href="insert_forms.html" class="btn btn-primary btn-lg">Submit</a>
                        <a href="#" class="btn btn-danger btn-lg">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end of login form -->
@stop


