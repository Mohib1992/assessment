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
    
    	 @include('menus.index')
    
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
                            <p>&copy; 3Spire. 2014</p>
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
        		        		
        		$('.play,.stop').click(function(e){
        			
        			e.preventDefault();
        			$child = $(this).children();
        			$class = $child.attr('class');
					$id = $(this).attr('rel');

        			if($class == 'glyphicon glyphicon-play')
        			{
        				//news alrady published
						$child.removeClass('glyphicon-play');
						$child.addClass('glyphicon-stop');
						$.ajax({
							type: "post",
							url: "admin/news/{$id}/unpublished",
							data: $id,
							success: function(responseData, textStatus, jqXHR) {
								if(textStatus == 'success')
									$('span.alert').text(responseData).show();
							},
							error: function(jqXHR, textStatus, errorThrown) {
								console.log(errorThrown);
							}
						})
					}else {					
						//news not published yet
						$child.removeClass('glyphicon-stop');
						$child.addClass('glyphicon-play');	
						$('span.alert').text('News has been Unpublished!').show();
					}
					
					setTimeout(function(){
						
						$('span.alert').hide();
						
					},2000);
        				   		
        			
        		});
        		
        	});
        	
        </script>
    </body>
</html>