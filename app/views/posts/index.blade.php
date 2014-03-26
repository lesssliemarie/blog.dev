@extends('layouts.master')

@section('content')
	<div id="blog">
        <h1 class="cursive">This will be my blog.</h1>
        <hr>
        <div class="row">
          <div class="col-md-9">
            @foreach ($posts as $post)
              	<div class="blog-post">
	              	<h2>{{{ $post->title }}}</h2>
	              	<p>{{{ $post->body }}}</p>
					<p class="end-post"><em>Month Day, Year | Author | Comments (0)</em></p>
				</div>
			@endforeach
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