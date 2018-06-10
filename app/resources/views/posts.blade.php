<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
{{ Html::style('css/bootstrap.min.css') }}
{{ Html::script('js/jquery-1.11.1.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}

       

    
    </head>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Error Inputs</strong> {{$errors->first('Title')}}
  {{$errors->first('description')}}

</div>
    <body>
        <div class="form">
	<p class="message">Title</p>
    {{ Form::open(array('url' => 'posts'))}}
	
     {{ Form::text('post_title', Request::old('post_title'))}}
	 	<p class="message">Description</p>
       {{ Form::textarea('description') }}
    {{ Form::submit('Post') }}
   
	  
    {{ Form::close() }}
  </div>
  <h1>Your Posts</h1>
  {{ $post_title}} 	

    </body>
</html>
