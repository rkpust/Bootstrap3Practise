<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Vertical Scrollspy Examples</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>

	<style>
		body {
			position: relative;
		}

		ul.nav-pills {
			top: 20px;
			position: fixed;
		}
		div.col-sm-9 div {
			height: 250px;
			font-size: 28px;
		}
		#section1 {
			color: #fff;
			background-color: #1E88E5;
		}

		#section2 {
			color: #fff;
			background-color: #673ab7;
		}

		#section3 {
			color: #fff;
			background-color: #ff9800;
		}

		#section41 {
			color: #fff;
			background-color: #009688;
		}


		#section42 {
			color: #fff;
			background-color: #1E88E5;
		}

		@media screen and (max-width: 810px) {

		#section1,#section2,#section3,#section41,#section42{
			margin-left: 150px;
		 }
	   }

	</style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

	<div class="container">
		<div class="row">
			<nav class="col-sm-3" id="myScrollspy">
				<ul class="nav nav-pills nav-stacked">
					<li><a class="active" href="#section1">Home</a></li>
					<li><a href="#section2">CSS</a></li>
				    <li><a href="#section3">JavaScript</a></li>
					<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">HTML<span class="caret"></span></a>
			     <ul class="dropdown-menu">
				<li><a href="#section41">Submenu 1</a></li>
				<li><a href="#section42">Submenu 2</a></li>
			     </ul>
				</li>
					
				 </ul>
			 </nav>

			 <div class="col-sm-9">
			 	<div id="section1">
					<h1>Home</h1>
					<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!
					</p>

				</div>	
				
				<div id="section2">
					<h1>CSS</h1>
					<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!
					</p>

				</div>
				<div id="section3">
					<h1>JavaScript</h1>
					<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!
					</p>
					
				</div>

				<div id="section41">
					<h1>HTML Submenu 1</h1>
					<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!
					</p>

				</div>
				<div id="section42">
					<h1>HTML Submenu 2</h1>
					<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!
					</p>

				</div>
	     </div>
	</div>
	</div>
	

    <script type="text/javascript" src="js/bootstrap.js"></script>
     
</body>
</html>