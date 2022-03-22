<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Button Groups Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Button Group</h2>
		<div class="btn-group">
			<button type="button" class="btn btn-primary">Apple</button>
			<button type="button" class="btn btn-primary">Samsung</button>
			<button type="button" class="btn btn-primary">Sony</button>
		</div>
	
		<br>

		<h2>Button Group - Set Sizes</h2>
		<p>Add class .btn-group-* to size all buttons in a button group.</p>
		<h3>Large Button</h3>
		<div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-primary">Apple</button>
			<button type="button" class="btn btn-primary">Samsung</button>
			<button type="button" class="btn btn-primary">Sony</button>
		</div>

		<br>

		<h3>Extra Small Button</h3>
		<div class="btn-group btn-group-xs">
			<button type="button" class="btn btn-primary">Apple</button>
			<button type="button" class="btn btn-primary">Samsung</button>
			<button type="button" class="btn btn-primary">Sony</button>
		</div>


		<br>

		<h2>Vertical Button Group</h2>
		<div class="btn-group-vertical">
			<button type="button" class="btn btn-primary">Apple</button>
			<button type="button" class="btn btn-primary">Samsung</button>
			<button type="button" class="btn btn-primary">Sony</button>
		</div>

		<br>

		<h2>Justified Button Group</h2>
		<div class="btn-group btn-group-justified">
			<a href="#" class="btn btn-primary">Apple</a>
			<a href="#" class="btn btn-primary">Samsung</a>
			<a href="#" class="btn btn-primary">Sony</a>
		</div>


		<br>

		<h2>Justified Button Group</h2>
		<div class="btn-group btn-group-justified">
			<div class="btn-group">
			<button type="button" class="btn btn-primary">Apple</button>
			</div>
			<div class="btn-group">
			<button type="button" class="btn btn-primary">Samsung</button>
			</div>
			<div class="btn-group">
			<button type="button" class="btn btn-primary">Sony</button>
			</div>
		</div>


		<br>

		<h2>Nesting Button Groups</h2>
		<p>Nest button groups to create drop down menus:</p>
		<div class="btn-group">
			<button type="button" class="btn btn-primary">Apple</button>
			<button type="button" class="btn btn-primary">Samsung</button>
			<div class="btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				Sony<span class="caret"></span>
			</button>

			<ul class="dropdown-menu" role="menu">
			 <li><a href="#">Tablet</a></li>
			 <li><a href="#">Smartphone</a></li>
			</ul>
		     </div>
		 </div>

		<br>

		<h2>Nesting Button Groups</h2>
		<p>Split button dropdown:</p>
		<div class="btn-group">
			<button type="button" class="btn btn-primary">Apple</button>
			<button type="button" class="btn btn-primary">Samsung</button>
			<div class="btn-group">
			<button type="button" class="btn btn-primary">Sony</button>
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			

			<ul class="dropdown-menu" role="menu">
			 <li><a href="#">Tablet</a></li>
			 <li><a href="#">Smartphone</a></li>
			</ul>
		     </div>
		 </div>


     </div>

</body>
</html>