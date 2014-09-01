<h1>Edit Client</h1>
        
     {{ HTML::ul($errors->all()) }}
    
    {{ Form::model($client, array('route' => array('admin.client.update', $client->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
	
		<p>
            {{ Form::label('title', 'Client Name') }}</br>
            {{ Form::text('name', null) }}
		</p>
    
        <p>
            {{ Form::label('description', 'Description') }}</br>
            {{ Form::textarea('description', null) }}
        </p>
        
        <p>
            {{ Form::label('image', 'Image') }}</br>
            {{ Form::file('image') }}
        </p>               
    
        {{ Form::submit('Update Client!') }}
    
    {{ Form::close() }}