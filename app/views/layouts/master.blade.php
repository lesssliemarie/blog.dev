<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leslie Tolbert &mdash; Hello!</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/blog.css">
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
            <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
            <li><a href="{{{ action('HomeController@showBlog') }}}">Blog</a></li>
            <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- UNIQUE PAGE CONTENT --> 
    <div class="container">
    	@yield('content')
    </div>

    <!-- FOOTER -->
    <div id="footer">
      <div class="container">
        <p>
          <a href="https://twitter.com/lesssliemarie" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://github.com/lesssliemarie" target="_blank"><i class="fa fa-github"></i></a>
          <a href="http://www.linkedin.com/in/leslietolbert" target="_blank"><i class="fa fa-linkedin"></i></a>
          <a href="https://plus.google.com/+LeslieTolbert/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
          <a href="mailto:lesssliemarie@gmail.com"><i class="fa fa-envelope"></i></a>
        </p>
      </div>
    </div>

    <!-- BOTTOM SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="../js/holder.js"></script>
</body>
</html>