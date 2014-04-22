<!DOCTYPE html>
<html>
<head>
	<title>Alphabet Soup</title>
	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Sniglet' rel='stylesheet' type='text/css'>
	<link src="/css/animate.css" rel="stylesheet">
	<script src="/js/lettering.min.js"></script>
	<script src="/js/jquery.textillate.js"></script>

	<style>
		body {
			font-family: 'Sniglet', cursive;
			text-align: center;
			background-image: url('/img/food.png');
			background-repeat: repeat;
		}

		h1 {
			font-size: 6em;
			letter-spacing: 1em;
		}

		.container {
			margin: auto;
			padding-bottom: 20px;
		}

		#soupit {
			margin-top: 10px;
		}

		#soupanother {
			display: none;
			text-align: center;
			margin-top: 10px;
		}

		.btn {
			background-color: #BF2C0B;
			border: none;
		}

	</style>

</head>
<body>
<div class="container">
	<h1>Alphabet Soup</h1>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
	    	<input type="text" class="form-control" id="userPhrase" name="userPhrase" placeholder="Enter a word or phrase">
	    	<p><a id="soupit" class="btn btn-primary btn-md" role="button">Soup It</a></p>
	    </div>
	    <div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="soup"></div>
			<a id="soupanother" class="btn btn-primary btn-md" role="button">Soup Another!</a>
		</div>
	</div>
</div>

<script>
	
	var souped = '';
	

	$('#soupit').click(function() {
		souped = '';
		var soupIt = $('#userPhrase').val();
		var splitSoup = soupIt.split(" ");

		for (i = 0; i < splitSoup.length; i++) {
			var splitWord = splitSoup[i].split("").reverse().join("");
			souped = souped + splitWord + ' ';
		}

		$('#soup').replaceWith('<h1 class="tlt">' + souped + '</h1>');
		$('.tlt').textillate({
			in: {
			    // set the effect name
			    effect: 'fadeInLeftBig',

			    // set the delay factor applied to each consecutive character
			    delayScale: 1.5,

			    // set the delay between each character
			    delay: 50,

			    // set to true to animate all the characters at the same time
			    sync: false,

			    // randomize the character sequence 
			    // (note that shuffle doesn't make sense with sync = true)
			    shuffle: true,

			    // reverse the character sequence 
			    // (note that reverse doesn't make sense with sync = true)
			    reverse: false,

			    // callback that executes once the animation has finished
			    callback: function () {}
			}
		});

		$('#soupanother').show();
		$('#soupanother').click(function() {
			location.reload();
		});

	});

	

</script>

</body>
</html>