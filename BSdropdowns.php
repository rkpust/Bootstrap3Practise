<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Dropdowns Examples</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Dropdowns</h2>
		<p>The .dropdowns class is used to indicate a dropdowns menu.</p>
		<p>Use the .dropdown-menu class to actually build the dropdown menu.</p>
		<p>To open the dropdown menu, use a button or a link with a class of .dropdown-toggle and data-toggle="dropdown" .</p>

		<div class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				Dropdown Example<span class="caret"></span>
			</button>

			<ul class="dropdown-menu">
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
			
		</div>

		<br><br>

		<p>The .divider class is used to seperate links inside the dropdown menu:</p>

		<div class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				Dropdown Example<span class="caret"></span>
			</button>

			<ul class="dropdown-menu">
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
				<li class="divider"></li>
				<li><a href="#">About Us</a></li>
			</ul>
			
		</div>

		<br><br>

		<p>The .dropdown-header class is used to adds headers inside the dropdown menu:</p>

		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
				Dropdown Example<span class="caret"></span>
			</button>

			<ul class="dropdown-menu">
				<li class="dropdown-header">Dropdown Header 1</li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">Dropdown Header 2</li>
				<li><a href="#">About Us</a></li>
			</ul>
			
		</div>

		<br><br>

		<p>The .disabled class is used to disable an item in the dropdown menu:</p>

		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
				Dropdown Example<span class="caret"></span>
			</button>

			<ul class="dropdown-menu">
				<li class="dropdown-header">Dropdown Header 1</li>
				<li><a href="#">HTML</a></li>
				<li class="disabled"><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">Dropdown Header 2</li>
				<li><a href="#">About Us</a></li>
			</ul>
			
		</div>

		<br><br>

		<p>Add the .dropdown-menu-right class to .dropdown-menu to right-align the dropdown menu:</p>

		<div class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				Dropdown Example<span class="caret"></span>
			</button>

			<ul class="dropdown-menu dropdown-menu-right">
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
				<li class="divider"></li>
				<li><a href="#">About Us</a></li>
			</ul>
			
		</div>

		<br><br>

		<p>The .dropup class makes the dropdown menu expand upwards instead of downwards:</p>

		<div class="dropup">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				Dropup Example<span class="caret"></span>
			</button>

			<ul class="dropdown-menu">
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
				<li class="divider"></li>
				<li><a href="#">About Us</a></li>
			</ul>
			
		</div>



     </div>


     <script type="text/javascript" src="js/bootstrap.js"></script>
     
</body>
</html>