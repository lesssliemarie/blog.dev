@extends('layouts.master')

@section('content')
    <div id="blog">
        <h1 class="cursive">This will be my blog.</h1>
        <hr>
        <div class="row">
          <div class="col-md-9">
            @foreach ($posts as $post)
              	<div class="blog-post">
	              	<h2><a href="{{{ action('PostsController@show', $post->id) }}} ">{{{ $post->title }}}</a></h2>
	              	<p>{{ Str::words($post->body, 20) }}</p>
					       <p class="end-post"><em>{{{ $post->created_at->format('l, F jS, Y') }}} | {{{ $post->user->username}}} </em></p>
				        </div>
			       @endforeach
            <p>{{ $posts->appends(array('search' => Input::get('search')))->links() }}</p>
          </div>

          <div id="sidebar" class="col-md-3">
              <div class="form-group">
                {{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'class' => 'form-inline')) }}
                {{ Form::text('search', null, array('class' => 'form-control'))}}      
                {{ Form::submit("Search >>", array('class' => 'btn btn-primary'))}}
                {{ Form::close() }}
              </div>
            <div id="sidebar-inset">
	        	  <h4>About This Blog</h4>
	        	  <p>Whatever Helvetica pour-over, YOLO 8-bit Brooklyn distillery Cosby sweater lo-fi mustache stumptown semiotics tousled. Cliche aesthetic actually, fixie cardigan brunch McSweeney's Marfa pop-up distillery ethnic artisan irony vinyl hella.</p>
	          </div>
	          @if (Auth::check())
              <div id="user-dashboard">
    	         	<h4>User Dashboard:</h4>
                <h6><em>Logged in as: {{{ Auth::user()->username }}}</em></h6>
    				      <p>
    				      <a href="{{{ action('PostsController@create')}}}"><span class="glyphicon glyphicon-plus"></span> Create New Post</a>
                	</p>
              </div>
            @else
            @endif
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