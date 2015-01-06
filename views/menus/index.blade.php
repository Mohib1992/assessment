 <!-- Navigation -->
        <nav class="navbar-inverse navbar-fixed-top" role="navigation"><!-- navbar -->
		<div class="navigation-bar">
            <div class="logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>{{ HTML::image('/images/Final_black.png','3Spire',array('class'=>'navbar-image','height'=>'50')) }}</div>
            </div>
            <div class="navbar-collapse collapse" style="float:right;">
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
                            {{--<li>{{ HTML::link('/blog',trans('menubar.Blog')) }}</li>--}}
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('menubar.AboutUs')}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ HTML::link('/about',Lang::get('menubar.AboutUsSub'))}}</li>
                            <li>{{ HTML::link('/team',trans('menubar.Team')) }}</li>
                        </ul>
                    </li>
                    <li>{{ HTML::link('/contact',trans('menubar.Contact'))}}</li>
                </ul>
                <!--<div class="pull-right"><a data-toggle="modal" href="#myModal" class="btn btn-default btn-sm">Log in</a></div>-->
            </div>
		</div>
        </nav>
	</div>
        <!-- End Navigation -->