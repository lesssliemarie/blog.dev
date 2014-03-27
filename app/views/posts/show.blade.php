@extends('layouts.master')

@section('content')
	<div id="blog">
        <h1 class="cursive">This will be my blog.</h1>
        <hr>
        <div class="row">
          <div class="col-md-9">
              	<div class="blog-post">
	              	<h2>{{{ $post->title }}}</h2>
	              	<p>{{{ $post->body }}}</p>
					<p class="end-post"><em>{{{ $post->created_at }}} | Author | Comments (0) | <span class="glyphicon glyphicon-thumbs-up"></span></em></p>
				</div>
				<a href="{{{ action('PostsController@index') }}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to all posts</a>
          </div>
          <div id="sidebar" class="col-md-3">
            <div id="sidebar-inset">
              <h4>About This Blog</h4>
              <p>Whatever Helvetica pour-over, YOLO 8-bit Brooklyn distillery Cosby sweater lo-fi mustache stumptown semiotics tousled. Cliche aesthetic actually, fixie cardigan brunch McSweeney's Marfa pop-up distillery ethnic artisan irony vinyl hella.</p>
            </div>
            <h4>Archives</h4>
            <ul class="list-unstyled">
              <li><a href="">Post Title/Date</a></li>
              <li><a href="">Post Title/Date</a></li>
              <li><a href="">Post Title/Date</a></li>
              <li><a href="">Post Title/Date</a></li>
              <li><a href="">Post Title/Date</a></li>
            </ul> 
          </div>
        </div>
    </div>
@stop