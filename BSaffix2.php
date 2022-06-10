<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Vertical Affix</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>

	<style>
		/* Note: Try to remove the following lines to see the effect of CSS positioning */

		.affix {
			top: 20px;
			width: 100%;
		}

	</style>
</head>

<body>

	<div class="container-fluid" style="background-color: #2196F3; color: #fff; height: 200px;">
		<h1>Vertical Affix Examples</h1>
		<h3>Fixed (sticky) vertical sidenav on scroll</h3>
		<p>Scroll this pages to see how the left navigation menu behaves with data-spy="affix" .</p>
		<p><strong>The left menu sticks to the page when  you have scrolled a specified amount of pixels.</strong></p>
	</div>

	<br>

	<div class="container">
		<div class="row">
			<nav class="col-sm-3">
				<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
				<li><a class="active" href="#section1">Home</a></li>
				<li><a href="#section2">CSS</a></li>
				<li><a href="#section3">JavaScript</a></li>
			</ul>

		
	    </nav>

	    <div class="col-sm-9">
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
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
		<h1>Some text to enable scrolling</h1>
	    </div>
		</div>
	</div>
	
	
    <script type="text/javascript" src="js/bootstrap.js"></script>
     
</body>
</html>