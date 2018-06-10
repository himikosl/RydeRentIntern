<html>
<head>
<title>Look at me Login</title>
{{ Html::style('css/bootstrap.min.css') }}
{{ Html::script('js/jquery-1.11.1.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}
{{ Html::style('css/mycss.css') }}
</head>

<body>
<div class="login-page">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Empty Fields</strong>
  {{ $errors->first('email')}}
  {{$errors->first('password')}}
</div>

  <div class="form">
	<p class="message">Email Address</p>
    {{ Form::open(array('url' => 'login'),['class' => 'login-form'])}}
	
     {{ Form::text('email', Request::old('email'), ['class' => 'input'])}}
	 	<p class="message">Password</p>
       {{ Form::password('password', ['class' => 'input']) }}
    {{ Form::submit('Login',['class' => 'form button']) }}
      <p class="message">Not registered? <a href="#">Create an account</a></p>
	  
    {{ Form::close() }}
  </div>
</div>



</body>