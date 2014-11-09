<!DOCTYPE html>
<html>
    <head>
        <title>3Spire</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <!-- Bootstrap -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>        
        {{ HTML::style('css/bootstrap.min.css',array('rel'=>'stylesheet','media'=>'screen')) }}
        {{ HTML::style('css/custom.css',array('rel'=>'stylesheet','media'=>'','type'=>'')) }}
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		{{ HTML::script('js/html5shiv.js')	}}
		{{ HTML::script('js/respond.min.js')	}}
		<![endif]-->
    </head>    
    <body>
    
    	 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
                <div>{{ HTML::image('/images/Final_black.png','3Spire',array('class'=>'navbar-image navImg','height'=>'50')) }}</div>
            </div> 
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>{{ HTML::link('/',trans('menubar.Home')) }}</li>                    
                    <li>{{ HTML::link('/client',trans('menubar.Clients')) }}</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('menubar.Services')}}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ HTML::link('/services/it',trans('menubar.IT')) }}</li>                           
                            <li>{{ HTML::link('/services/garments',trans('menubar.Garments')) }}</li>                           
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('menubar.Social') }}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ HTML::link('http://www.facebook.com','FaceBook') }}</li>
                            <li>{{ HTML::secureLink('http://plus.google.com','Google+') }}</li>
                            <li>{{ HTML::link('http://www.linkedin.com','LinkedIn') }}</li>
                            <li>{{ HTML::link('/blog',trans('menubar.Blog')) }}</li>
                        </ul>
                    </li>                                        
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('menubar.AboutUs')}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ HTML::link('/about',Lang::get('menubar.AboutUs'))}}</li>   
                            <li>{{ HTML::link('/team',trans('menubar.Team')) }}</li> 
                        </ul>
                    </li>                    
                    <li>{{ HTML::link('/contact',trans('menubar.Contact'))}}</li>                                           
                    @include('menus.index')                           
                    <!--<li>{{ HTML::link('/admin','Admin Panel')}}</li>-->          
                </ul>
                <!--<div class="pull-right"><a data-toggle="modal" href="#myModal" class="btn btn-default btn-sm">Log in</a></div>-->
            </div>                
        </nav>
        <!-- End Navigation -->       
    			
    	@yield('content')    	
    
    	<!-- Footer Area -->     
        <div class="ftr">
            <div class="container">
                <div class="row">
                    <footer>
                        <div class="pull-right ft_space">
                            <p>&copy; 3Spire. 2014</p>
                        </div>
                    </footer>
                </div>
            </div>    
        </div>    
        <!-- End Footer -->
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->        
        {{ HTML::script('js/jquery.js') }}
        {{ HTML::script('js/progressbar.js') }}
        <!-- Include all compiled plugins (below), or include individual files as needed -->       
        {{ HTML::script('js/bootstrap.min.js') }}
        <script>        
            $(function (){            	
                $('.carousel').carousel({
                    interval: 4000
                });
                
                
                $('#login').click(function(){
                	
                	alert(0);
                	
                });
                
                $('#cancel').click(function(){
                	
                	alert(1);
                	
                });
            })
			
			$( document ).ready(function() {
				console.log( "ready!" );
				var minHight = $(document).height();
				//$('.ftr').css('margin-top', minHight);
				console.log( minHight );
			});
			
			// Window load event used just in case window height is dependant upon images
			$(window).bind("load", function() { 
				   
				   var footerHeight = 0,
					   footerTop = 0,
					   $footer = $(".ftr");
					   
				   positionFooter();
				   
				   function positionFooter() {
				   
							footerHeight = $footer.height();
							footerTop = ($(window).scrollTop()+215-footerHeight)+"px";
				   
						   if ( ($(document.body).height()+footerHeight) < $(window).height()) {
							   $footer.css({
									position: "relative"
							   }).animate({
									top: footerTop
							   })
						   } else {
							   $footer.css({
									position: "static"
							   })
						   }
						   
				   }

				   $(window)
						   //.scroll(positionFooter)
						   //.resize(positionFooter)
						   
			});

        </script>
    </body>
</html>