<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leslie Tolbert &mdash; Hello!</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/blog.css">
    <link src="/css/animate.css" rel="stylesheet">

    @yield('topscript')
    
</head>
<body>
	<!-- NAVBAR -->
	<nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="cursive navbar-brand" href="{{{ action('HomeController@showHome') }}}">lesssliemarie</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{{ action('HomeController@showPortfolio') }}}">portfolio</a></li>
            <li><a href="{{{ action('PostsController@index') }}}">blog</a></li>
            <li><a href="{{{ action('HomeController@showResume') }}}">r&eacute;sum&eacute;</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- UNIQUE PAGE CONTENT --> 
    <div class="container">
    	@if (Session::has('successMessage'))
        <div class="alert alert-info session-error">{{{ Session::get('successMessage') }}}</div>
      @endif
      @if (Session::has('errorMessage'))
        <div class="alert alert-warning session-error">{{{ Session::get('errorMessage') }}}</div>
      @endif
      @yield('content')
    </div>

    <!-- FOOTER -->
    <div id="footer">
      <div class="container">
        <p>
          <a href="https://twitter.com/lesssliemarie" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://github.com/lesssliemarie" target="_blank"><i class="fa fa-github"></i></a>
          <a href="http://www.linkedin.com/in/leslietolbert" target="_blank"><i class="fa fa-linkedin"></i></a>
          <a href="http://instagram.com/lesssliemarie" target="_blank"><i class="fa fa-instagram"></i></a>
          <a href="mailto:lesssliemarie@gmail.com"><i class="fa fa-envelope"></i></a>
          @if (Auth::check())
            <a href="{{{ action('HomeController@logout')}}}" id="login-footer"><i class="fa fa-user"></i> Logout</a>
          @else
          <span id="contact" class="cursive">Leslie Marie Tolbert &mdash; lesssliemarie@gmail.com</span>
          @endif
        </p>
      </div>
    </div>

    <!-- BOTTOM SCRIPT -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/holder.js"></script>
    <script src="/js/bootbox.min.js"></script>
    <script src="/js/lettering.min.js"></script>
    <script src="/js/jquery.textillate.js"></script>

    <script>
      setTimeout(function() {
        $('.session-error').fadeOut(700);
      }, 2000);

    </script>
    @yield('bottomscript')
</body>
</html>