@extends('layouts.master')

@section('content')
	<div id="blog">
        <h1 class="cursive">This will be my blog.</h1>
        <hr>
        <div class="row">
          <div class="col-md-9">
              	<div class="blog-post">
	              	<h2>{{{ $post->title }}}</h2>
                  @if ($post->image)
                  <p><img class="img-responsive" src="{{ $post->image }}"></p>
                  @else
                  @endif
	              	<p>{{ $post->body }}</p>
				          <p class="end-post"><em>{{{ $post->created_at->format('l, F jS, Y') }}} | {{{ $post->user->username}}} | <a href="{{{ action('PostsController@edit', $post->id) }}}"><span class="glyphicon glyphicon-pencil"></span></a> | <a href="{{{ action('PostsController@destroy', $post->id) }}}"><span class="glyphicon glyphicon-remove" id="btnDeletePost"></span></em></p>
				        </div>
				    <a href="{{{ action('PostsController@index') }}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to all posts</a>
          <!-- DISQUS COMMENTS --> 
            <div id="disqus_thread"></div>
              <script type="text/javascript">
                  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                  var disqus_shortname = 'lesssliemarieblog'; // required: replace example with your forum shortname

                  /* * * DON'T EDIT BELOW THIS LINE * * */
                  (function() {
                      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                  })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
          <!-- END DISQUS -->
            {{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDeletePost')) }}
            {{ Form::close() }}
          </div>
          <div id="sidebar" class="col-md-3">
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

@section('bottomscript')
  <script>
  $('#btnDeletePost').click(function(e) {
    e.preventDefault();
    bootbox.confirm('Are you sure you want to delete this post?', function(result) {
      if (result) {
        $('#formDeletePost').submit();
      }
    });
  });

  </script>
@stop