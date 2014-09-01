@extends('layouts.default')

@section('content')

<div class="container padded">
    <div class="row">
        <div class="col-sm-8 blog">
        	@if(isset($posts))                       
        	 @foreach($posts as $post)
	            <section>
	                <h1>{{ HTML::link('#',$post->title ) }}</h1>
	                <p class="lead">{{ HTML::link('#',$post->tages)}}</p>
	                <hr>
	                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}</p>
	                <hr>	                
	                {{ HTML::image('images/'.$post->cover_image,NULL,array('class'=>'img-responsive'))}}
	                <hr>
	                <p>{{ $post->description }}</p>	                
	                {{ HTML::link('/post/'.$post->id,'Read More ',array('class'=>'btn btn-primary'))}}
	                <hr>
	            </section>
            	@endforeach
            @endif
            <ul class="pagination">            	
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
        <div class="col-sm-4 sidebar">
            <section>
                <h3 class="tpad">Search</h3>
                <div class="input-group input-group-lg tpad">
                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                    <input type="text" class="form-control input-lg" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
                <hr>
            </section>
            <section>
                <h3 class="tpad">Tags</h3>
                <div class="list-group tpad">
                	@if(isset($tags))                
                			<a href="#" class="list-group-item active"><span class="badge">{{ $totalTag }}</span>All tags</a>
                		@foreach($tags as $tag)                			                                       
		                    <a href="#" class="list-group-item"><span class="badge">{{ $tag->frequency }}</span>{{ $tag->tag }}</a>		                   
                    	@endforeach
                    @endif
                </div>
                <hr>
            </section>
            <section>
                <h3 class="tpad">Latest from Twitter</h3>
                <div class="media tpad">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="" alt="user image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">@User</h4>
                        <p class="bpad">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            
            </section>
        </div>
    </div>    
</div>    

@stop