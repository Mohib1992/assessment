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
    
    	@include('menus.index')
    	@yield('content')    	
    
    	<!-- Footer Area -->     
        <div class="ftr">
            <div class="container">
                <div class="row">
                    <footer>
                    <div class="pull-left ft_space">                    
                            <p>{{ HTML::image('images/us.png','flag',array('name'=> App::getLocale(),'class'=>'language','heigh'=>'20','width'=>'20')) }}</p>
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
                });
                
                $('.language').on('click',function(){
                	
                	var $text = $(this).attr('name');                	
                	if($text == 'eng'){
                		$(this).attr('src','images/germany.png');						
						$(this).attr('name','ger');								
					}
                		                	
                	if($text == 'ger'){						
                		$(this).attr('src','images/us.png');
						$(this).attr('name','eng');
					}
										
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