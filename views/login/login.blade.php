<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3Spire - Log-in</title>
    {{ HTML::style('css/style.css',array('rel'=>'stylesheet','media'=>'screen','type'=>'text/css')) }}
</head>
<body>
<div class="login-card">
    <h1>Log-in</h1><br>
    <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
    </p>
    {{Form::open(array('url' => '/admin/check', 'method' => 'POST'));}}
        {{ Form::email('email', Input::old('email'), array('placeholder' => 'Email')) }}
        {{ Form::password('password',array('placeholder'=>'Password')) }}
        {{Form::submit('Login',array('class'=>'login login-submit'))}}
    {{Form::close()}}
</div>
</body>
</html>