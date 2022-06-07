<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS NavBar Examples</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body style="height: 1500px;">

	<br><br><br><br>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
		</div>
		
	</nav>

	<div class="container">
		<h2>Basic NavBar Example</h2>
		<p>A navigation bar is a navigation header that is placed at the top of the page.</p>
		
    </div>

    <br><br>

    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
		</div>
		
	</nav>

	<div class="container">
		<h2>Inverted NavBar Example</h2>
		<p>An inverted navbar is black instead of gray.</p>
		
    </div>

    <br><br>
    
    <!--navbar-fixed-bottom-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
		</div>
		
	</nav>

	<div class="container">
		<h2>Inverted Fixed NavBar</h2>
		<div class="row">
			<div class="col-md-4">
				<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
			</div>
			<div class="col-md-4">
				<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
			</div>
			<div class="col-md-4">
				<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
			</div>
		 </div>
		
    </div>

          <h1>Scroll this page to see the effect.</h1>


          <br><br>

    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">HTML<span class="caret"></span></a>
			     <ul class="dropdown-menu">
				<li><a href="#">Submenu 1</a></li>
				<li><a href="#">Submenu 2</a></li>
				<li><a href="#">Submenu 3</a></li>
			     </ul>
				</li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
		</div>
		
	</nav>

	<div class="container">
		<h2>NavBar With Dropdown</h2>
		<p>This example adds a dropdown menu for the 'HTML' button in the navigation bar.</p>
		
    </div>

    <br><br>

    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
			</ul>
		</div>
		
	</nav>

	<div class="container">
		<h2>Right Aligned NavBar</h2>
		<p>The .navbar-right class is used to right-aligned navigation bar buttons.</p>
		
    </div>

    <br><br>

    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">HTML<span class="caret"></span></a>
			     <ul class="dropdown-menu">
				<li><a href="#">Submenu 1</a></li>
				<li><a href="#">Submenu 2</a></li>
				<li><a href="#">Submenu 3</a></li>
			     </ul>
				</li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>


			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
			</ul>

			</div>
		</div>
		
	</nav>

	<div class="container">
		<h2>Collapsible NavBar</h2>
		<p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>

		<p>Only when the button is clicked, the navigation bar will be displayed.</p>
		
    </div>



    <script type="text/javascript" src="js/bootstrap.js"></script>
     
</body>
</html>