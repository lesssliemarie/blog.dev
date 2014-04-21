<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Spiral</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Boostrap -->
		<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet"> 
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script> 
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
		
		<link href="css/style.css" rel="stylesheet" media="screen"/>
		<script src='https://cdn.firebase.com/v0/firebase.js'></script>

		<!-- include summernote css/js-->
		<link href="/css/summernote.css"  rel="stylesheet"/>
		<script src="/js/summernote.min.js"></script>


	
	</head>

	<body>

		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				
				<a href="#" class= "navbar-brand">Spiral</a>			
						
			</div>
		</div>
		
		<div class="container">

			<form class="navbar-form navbar-right" role="search" id="addTab">
     			<div class="form-group">
        		<input type="text" class="form-control" placeholder="New Tab">
      			</div>
      			<button type="submit" class="btn btn-default">+</button>
    		</form>

			<ul class="nav nav-tabs" id="tabs">
			</ul>

		</div>

		<div class="container" id="textEditor">

				<div id="summernote">Welcome to your Spiral, Leslie!</div>

					<button type="button" class="btn btn-default" id="save">
						<span class="glyphicon glyphicon-save"></span>
					</button>
				

		</div>			
			
    <script type="text/javascript">
		
		//loads Summernote 
    	$(document).ready(function() {
  			$('#summernote').summernote({
  				height: 300,
  				focus: true
  			});
		});


		//connect to Sprial on Firebase
		var myDataRef = new Firebase('https://spiral.firebaseio.com/');


		//save text/tab data to Firebase 	
    	$('#save').on("click", function(){
    		var activeTab = $('#tabs li.active').attr('name');
    		saveTab(activeTab);
    	});

    	//load text/tab data from Firebase
    	myDataRef.on('value', function(tabData) {
    		var savedText = tabData.val().text;
    		$('#summernote').code(savedText);

    	});

    	//add new Tab
    	$('#addTab').submit(function (e) {
    		e.preventDefault();
    		var tabName = $('#addTab input').val();
    		createTab(tabName);
    	});


        //create new tab in Firebase
    	createTab = function(tabName) {
    		var newTab = myDataRef.push();
    		newTab.set({'tab_name': tabName, 'tab_text': "New note here..."});
    	}

        //load tab from Firebase
    	loadTab = function(childName) {
    		var tabTextRef = myDataRef.child(childName);
    		tabTextRef.once('value', function(addedTab) {
    			var tabText = addedTab.val().tab_text;
    			$('#summernote').code(tabText);
    			console.log(tabText);
    		});
    	}

        //save notes in current tab to Firebase
    	saveTab = function(childName) {
    		var tabTextRef = myDataRef.child(childName);
    		var myText = $('#summernote').code();
    		tabTextRef.update({tab_text: myText});	
    	}

        //add new tab to view
    	myDataRef.on('child_added', function(addedTab) {
    		$('#tabs').append('<li name="' + addedTab.name() + '"><a href="#">' + addedTab.val().tab_name + '</a></li>');
    		
    	});

        //switch between tabs in view
    	$('#tabs').on("click", "li", function (e) {
    			e.preventDefault();
    			$('.active').removeClass('active');
    			$(this).addClass('active');

    			var tab = $(this).attr('name');

    			loadTab(tab);		

    		});

    </script>
	
	</body>

</html>