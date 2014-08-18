@extends('layouts.default')

@section('content')

<div class="container padded">
    <div class="row">
        <div class="col-sm-8 blog">
            <section>
                <h1><a href="#">Lorem ipsum dolor sit amet</a></h1>
                <p class="lead"><a href="index.html">Lorem ipsum dolor sit amet</a></p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Posted on July 26, 2014 at 11:00 AM</p>
                <hr>
                <img src="images/blog1.jpg" class="img-responsive">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="#">Read More &raquo;</a>
                <hr>
            </section>
            <section>
                <h1><a href="#">Lorem ipsum dolor sit amet</a></h1>
                <p class="lead"><a href="index.html">Lorem ipsum dolor sit amet</a></p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Posted on July 26, 2014 at 11:00 AM</p>
                <hr>
                <img src="images/blog2.jpg" class="img-responsive">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="#">Read More &raquo;</a>
                <hr>
            </section>
            <section>
                <h1><a href="#">Lorem ipsum dolor sit amet</a></h1>
                <p class="lead"><a href="index.html">Lorem ipsum dolor sit amet</a></p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Posted on July 26, 2014 at 11:00 AM</p>
                <hr>
                <img src="images/blog3.jpg" class="img-responsive">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="#">Read More &raquo;</a>
                <hr>
            </section>
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
                    <a href="#" class="list-group-item active"><span class="badge">38</span>All tags</a>
                    <a href="#" class="list-group-item"><span class="badge">14</span>Lorem ipsum</a>
                    <a href="#" class="list-group-item"><span class="badge">9</span>Test</a>
                    <a href="#" class="list-group-item"><span class="badge">7</span>Strategy</a>
                    <a href="#" class="list-group-item"><span class="badge">5</span>Consulting</a>
                    <a href="#" class="list-group-item"><span class="badge">27</span>IT Management</a>
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