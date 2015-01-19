 <!-- Navigation -->
        <nav class="navbar-inverse navbar-fixed-top" role="navigation"><!-- navbar -->
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-offset-2">
					<div class="pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div><a href="{{URL::to('/')}}">{{ HTML::image('/images/Final_black.png','3Spire',array('class'=>'navbar-image','height'=>'50')) }}</a></div>
					</div>
					<div class="pull-right">
						<ul class="nav navbar-nav">
							{{--<li>{{ HTML::link('/',trans('menubar.Home')) }}</li>--}}
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
									<li>{{ HTML::link('#','FaceBook') }}</li>
									<li>{{ HTML::secureLink('#','Google+') }}</li>
									<li>{{ HTML::link('#','LinkedIn') }}</li>
									<!--<li>{{ HTML::link('/blog',trans('menubar.Blog')) }}</li>-->
								</ul>
							</li>
							<li>{{ HTML::link('/about',trans('menubar.AboutUs'))}}</li>
							<li>{{ HTML::link('/contact',trans('menubar.Contact'))}}</li>
						</ul>
						<!--<div class="pull-right"><a data-toggle="modal" href="#myModal" class="btn btn-default btn-sm">Log in</a></div>-->
					</div>
				</div>
			</div>
		</div>
        </nav>
	</div>
 <!-- End Navigation -->