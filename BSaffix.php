<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Affix Examples</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>

	<style>
		/* Note: Try to remove the following lines to see the effect of CSS positioning */

		.affix {
			top: 0;
			width: 100%;
		}

		.affix + .container-fluid {
			padding-top: 70px;
		}

	</style>
</head>

<body>

	<div class="container-fluid" style="background-color: #F44336; color: #fff; height: 200px;">
		<h1>Affix Examples</h1>
		<h3>Fixed (sticky) navbar on scroll</h3>
		<p>Scroll this pages to see how the navbar behaves with data-spy="affix" .</p>
		<p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</p>


		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
				<ul class="nav navbar-nav">
				<li><a class="active" href="#">Home</a></li>
				<li><a href="#section41">HTML</a></li>
				<li><a href="#section2">CSS</a></li>
				<li><a href="#section3">JavaScript</a></li>
			</ul>

		
	</nav>
	</div>
    
	

	<div class="container-fluid" style="height: 1000px;">
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>

	</div>	
	
    <script type="text/javascript" src="js/bootstrap.js"></script>
     
</body>
</html>