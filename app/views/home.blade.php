@extends('layouts.master')

@section('content')
    <div id="home" class="container">
    	<div class="row">
    		<div class="col-md-6">
       			<img src="/img/lmt.jpg" alt="Leslie Tolbert" class="img-responsive img-circle" id="me">
        	</div>
        	<div class="col-md-6">
        		<h1 id="hello-world" class="cursive">Hello, World.</h1>
        		<h2 id="intro-h2" class="cursive">Nice to see you! I'm <span clas="purple-text">Leslie.</span></h2>
        		<p class="intro">I'm a programmer, web developer, designer and recent graduate of Codeup, an 11-week programming bootcamp at Geekdom in downtown San Antonio. I've very much enjoyed learning all aspects of web development and programming during my time at Codeup and look forward to continuing my education and experience in the field while integrating my previous graphic design, marketing, branding, technical writing and creative skills.</p> 

        		<p class="intro">I'd like to find work that promotes growth, creativity, and ingenuity and have a particular interest in User Experience design. I'd <em>love</em> for you to check out my portfolio and r&eacute;sum&eacute;. Like what you see? Let's connect!</p><br>
    			<h4 class="cursive intro purple-text">Adaptability &mdash; Acheiver &mdash; Ideation &mdash; Intellection &mdash; Empathy</h4>
    		</div>
    	</div>
    	<hr class="interests">
    	<h2 class="cursive interests">I'm a lover of many things...</h2>
    	<div class="row info">
    		<div class="col-md-3"  id="info1">
    			<img src="/img/info1.jpg" class="img-responsive img-circle">
    			<h3 class="cursive">Jimi</h3>
    		</div>
    		<div class="col-md-3"  id="info2">
    			<img src="/img/info2.jpg" class="img-responsive img-circle">
    			<h3 class="cursive">Coffee</h3>
    		</div>
    		<div class="col-md-3" id="info3">
    			<img src="/img/info3.jpg" class="img-responsive img-circle">
    			<h3 class="cursive">Art</h3>
    		</div>
    		<div class="col-md-3" id="info4">
    			<img src="/img/info4.jpg" class="img-responsive img-circle">
    			<h3 class="cursive">Knitting</h3>
    		</div>
    	</div>
    	<div class="row info">
    		<div class="col-md-3"  id="info5">
    			<img src="/img/info5.jpg" class="img-responsive img-circle">
    			<h3 class="cursive">Adventure</h3>
    		</div>
    		<div class="col-md-3"  id="info6">
    			<img src="/img/info6.jpg" class="img-responsive img-circle">
    			<h3 class="cursive">Exploring</h3>
    		</div>
    		<div class="col-md-3" id="info7">
    			<img src="/img/info!.jpg" class="img-responsive img-circle">
    			<h3 class="cursive">Hammocks</h3>
    		</div>
    		<div class="col-md-3" id="info8">
    			<img src="/img/info8.jpg" class="img-responsive img-circle">
    			<h3 class="cursive">Texas</h3>
    		</div>
    	</div>
    	<hr class="connect">
    	<h4 class="connect">I'm always on the lookout for more loves to add to the list and constantly seeking <span class="purple-text">connection</span> and <span class="purple-text">inspiration</span>!</h4>
    	<h1 class="cursive connect">Need help on a project or have one in mind?<span class="purple-text"> Let's Connect!</span></h1>
    </div>
@stop

@section('bottomscript')
<script>
	$(document).ready(function() {
    	$('#me').fadeIn(1500);
    	$('#hello-world').delay(1100).fadeIn(1500);
    	$('#intro-h2').delay(3100).fadeIn(1500);
    	$('.intro').delay(3600).fadeIn(1500);
    	$('.interests').delay(4000).fadeIn(1500);
    	$('#info1').delay(4100).fadeIn(1500);
    	$('#info2').delay(4200).fadeIn(1500);
    	$('#info3').delay(4300).fadeIn(1500);
    	$('#info4').delay(4400).fadeIn(1500);
    	$('#info5').delay(4500).fadeIn(1500);
    	$('#info6').delay(4600).fadeIn(1500);
    	$('#info7').delay(4700).fadeIn(1500);
    	$('#info8').delay(4800).fadeIn(1500);
    	$('.connect').delay(5000).fadeIn(1500);
	});

	// $('#test-circle').mouseover(function() {
 //    	$(this).stop().animate({ width: '110%' }, 500);
	// });

</script>
@stop