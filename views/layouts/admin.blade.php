<!DOCTYPE html>
<html>
    <head>
        <title>Strategic consulting</title>
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
                {{ HTML::link('/','Strategic Consulting',array('class'=>'navbar-brand')) }}
            </div> 
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li  class="active">{{ HTML::link('/','Home') }}</li>
                    <li>{{ HTML::link('/team','Team') }}</li>
                    <li>{{ HTML::link('/client','Clients') }}</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ HTML::link('/project','Projects') }}</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ HTML::link('http://www.facebook.com','FaceBook') }}</li>
                            <li>{{ HTML::secureLink('http://plus.google.com','Google+') }}</li>
                            <li>{{ HTML::link('http://www.linkedin.com','LinkedIn') }}</li>
                        </ul>
                    </li>
                    <li>{{ HTML::link('/blog','Blog') }}</li>
                    <li>{{ HTML::link('/contact','Contact')}}</li>                                       
                    @include('menus.index')       
                    <li>{{ HTML::link('/admin','Admin Panel')}}</li>                    
                </ul>
                <div class="pull-right"><a data-toggle="modal" href="#myModal" class="btn btn-default btn-sm">Log in</a></div>
            </div>    
        </nav>
        <!-- End Navigation -->
    
    	<div class="container padded">
    
		    <div class="row">		        
		         @include('menus.admin')		       		        		        
		         @yield('content')		        		        
		    </div>		   
		</div>
    
    	<!-- Footer Area -->  
        <div class="ftr">
            <div class="container">
                <div class="row">
                    <footer>
                        <div class="pull-right ft_space">
                            <p>&copy; Strategic Consulting. 2014</p>
                        </div>
                    </footer>
                </div>
            </div>    
        </div>    
        <!-- End Footer -->
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->        
        {{ HTML::script('js/jquery.js') }}
        <!-- Include all compiled plugins (below), or include individual files as needed -->       
        {{ HTML::script('js/bootstrap.min.js') }}        
        
        <script>
        	$(document).ready(function(){
        		
        		$('.play').click(function(){
        			
        			$(this).hide();
        			$('.stop').show();
        			
        		});
        		
        		$('.stop').click(function(){
        			
        			$(this).hide();
        			$('.play').show();
        			
        		});
        	});
        	
        </script>
    </body>
</html>