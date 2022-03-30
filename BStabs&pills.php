<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Tabs & Pills Examples</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Inline List</h2>

			<ul class="list-inline">
				<li><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
			
		<br><br>

		<h2>Tabs</h2>

			<ul class="nav nav-tabs">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>

		<br><br>

		<p><strong>Note:</strong> This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p>

		<br><br>

		<h2>Tabs With Dropdown Menu</h2>

			<ul class="nav nav-tabs">
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

			<br><br>

		<h2>Pills</h2>

			<ul class="nav nav-pills">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>

			<br><br>

		<h2>Vertical Pills</h2>

			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>

			<br><br>

		<h2>Vertical Pills</h2>
		<div class="row">
			<div class="col-md-3">
				<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
			</div>
			<div class="col-md-3">
				<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
			</div>
			<div class="col-md-3">
				<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
			</div>
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
			</div>
			<div class="clearfix visible-lg"></div>
		</div>

		<br><br>

		<h2>Pills With Dropdown Menu</h2>

			<ul class="nav nav-pills nav-stacked">
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

			<br><br>

		<h2>Centered Tabs</h2>

			<ul class="nav nav-tabs nav-justified">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>

			<br><br>

		<h2>Centered Pills</h2>

			<ul class="nav nav-pills nav-justified">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>

			<br><br>

		<h2>Dynamic Tabs</h2>

			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
				<li><a a data-toggle="tab" href="#menu1">HTML</a></li>
				<li><a a data-toggle="tab" href="#menu2">CSS</a></li>
				<li><a a data-toggle="tab" href="#menu3">JavaScript</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h3>Home</h3>
					<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
				</div>

				<div id="menu1" class="tab-pane fade">
					<h3>HTML</h3>
					<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
				</div>

				<div id="menu2" class="tab-pane fade">
					<h3>CSS</h3>
					<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
				</div>

				<div id="menu3" class="tab-pane fade">
					<h3>JavaScript</h3>
					<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
				</div>
			</div>

			<br><br>

		<h2>Dynamic Pills</h2>

			<ul class="nav nav-pills">
				<li class="active"><a data-toggle="pill" href="#pillHome">Home</a></li>
				<li><a a data-toggle="pill" href="#Pmenu1">HTML</a></li>
				<li><a a data-toggle="pill" href="#Pmenu2">CSS</a></li>
				<li><a a data-toggle="pill" href="#Pmenu3">JavaScript</a></li>
			</ul>

			<div class="tab-content">
				<div id="pillHome" class="tab-pane fade in active">
					<h3>Home</h3>
					<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
				</div>

				<div id="Pmenu1" class="tab-pane fade">
					<h3>HTML</h3>
					<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
				</div>

				<div id="Pmenu2" class="tab-pane fade">
					<h3>CSS</h3>
					<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
				</div>

				<div id="Pmenu3" class="tab-pane fade">
					<h3>JavaScript</h3>
					<p>This example shows how to create a basic navigation tabs. It is not togglable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done</p>
				</div>
			</div>

	  </div>


	  <script type="text/javascript" src="js/bootstrap.js"></script>
     
</body>
</html>