<!DOCTYPE html>
<html>
    <head>
        <title>3Spire</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
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
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    </head>    
    <body>
    	@include('menus.index')
    	@yield('content')    	
    
    	<!-- Footer Area -->     
        <div class="ftr">
            <div class="container col-centered">
                <div class="row">
                    <footer>
                    <div class="pull-left ft_space">                    
                            <p>
                                <a href="{{ URL::to('/eng') }}">
                                    {{ HTML::image('images/us.png','flag',array('name'=> App::getLocale(),'class'=>'language','heigh'=>'20','width'=>'20')) }}
                                </a>
                                <a href="{{ URL::to('/ger') }}">
                                    {{ HTML::image('images/germany.png','flag',array('name'=> App::getLocale(),'class'=>'language','heigh'=>'20','width'=>'20')) }}
                                </a>
                            </p>
                        </div>
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
            })
			
			$( document ).ready(function() {

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
									position: "absolute"
							   }).animate({
									//top: footerTop
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