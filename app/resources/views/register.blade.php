<html>
<head>
<title>Register</title>
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
  <strong>Error Inputs</strong> {{$errors->first('password')}}
  {{$errors->first('name')}}
  {{$errors->first('email')}}
  {{$errors->first('telephone')}}
</div>
  <div class="form">
    {{ Form::open(array('url' => 'register'),['class' => 'login-form'])}}
	<p class="message">Name</p>
  
	
     {{ Form::text('name', Request::old('name'), ['class' => 'input'])}}
	 	<p class="message">Email Address</p>
	     {{ Form::text('email', Request::old('email'), ['class' => 'input'])}}
		 	<p class="message">Password</p>
		 {{ Form::password('password', ['class' => 'input']) }}
		 <p class="message">Confirm Password</p>
		  {{ Form::password('password_confirmation', ['class' => 'input']) }}
		 <p class="message">Telephone Number</p>
		 {{ Form::text('phone', Request::old('phone'), ['class' => 'input'])}}
	 
    {{ Form::submit('Register',['class' => 'form button']) }}
    
	  
    {{ Form::close() }}
  </div>
</div>



</body>