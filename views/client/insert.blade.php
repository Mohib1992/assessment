<h1>Add New Client</h1>
        
     {{ HTML::ul($errors->all()) }}
    
    {{ Form::open(array('url'=>'admin/client','method'=>'POST','enctype'=>'multipart/form-data')) }}
	
		<p>
            {{ Form::label('title', 'Client Name') }}</br>
            {{ Form::text('name', Input::old('name')) }}
		</p>
    
        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', Input::old('description')) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Image') }}</br>
            {{ Form::file('image') }}
        </p>               
    
        {{ Form::submit('Add Client!') }}
    
    {{ Form::close() }}