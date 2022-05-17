<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Collapse Examples</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Simple Collapsible</h2>
		 <p>Click on the button to toggle between showing and hiding content.</p>
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1" >Simple Collapsible 1</button>
		
		<div id="demo1" class="collapse">Panels are created with the .panel class and content inside the panel has a .panel-body class.
		Panels are created with the .panel class and content inside the panel has a .panel-body class.
		</div>

		<br><br>

		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" >Simple Collapsible 2</button>
		
		<div id="demo" class="collapse in">Panels are created with the .panel class and content inside the panel has a .panel-body class.
		Panels are created with the .panel class and content inside the panel has a .panel-body class.
		</div>

		<br><br>

		<h2>Collapsible Panel</h2>
		<div class="panel-group">
			<div class="panel pane-default">
			 <div class="panel-heading">
			 	<h4 class="panel-title">
			 	<a href="#collapse1" data-toggle="collapse">Collapsible Panel</a>
			 	</h4>
			 </div>
			 <div id="collapse1" class="panel-collapse collapse">
			 	<div class="panel-body">Panel Body</div>
			 	<div class="panel-footer">Panel Footer</div>
			 </div>
			</div>
		</div>

		<br><br>

		<h2>Collapsible List Group</h2>
		<div class="panel-group">
			<div class="panel pane-default">
			 <div class="panel-heading">
			 	<h4 class="panel-title">
			 	<a data-toggle="collapse" href="#collapse1">Collapsible List Group</a>
			 	</h4>
			 </div>
			 <div id="collapse1" class="panel-collapse collapse">
			 	<ul class="list-group">
			 		<li class="list-group-item">One</li>
			 		<li class="list-group-item">Two</li>
			 		<li class="list-group-item">Three</li>
			 	</ul>

			 	<div class="panel-footer">Footer</div>
			 </div>
			</div>
		</div>

		<br><br>

		<h2>Accordion Example</h2>
		<p><strong>Note:</strong>The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
		<div class="panel-group" id="accordion">
			<div class="panel pane-default">
			 <div class="panel-heading">
			 	<h4 class="panel-title">
			 	<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
			 	</h4>
			 </div>
			 <div id="collapse1" class="panel-collapse collapse in">
			 	<div class="panel-body">Panels are created with the .panel class and content inside the panel has a .panel-body class.
		Panels are created with the .panel class and content inside the panel has a .panel-body class.

		Panels are created with the .panel class and content inside the panel has a .panel-body class.
		Panels are created with the .panel class and content inside the panel has a .panel-body class.
		</div>

			 </div>
			</div>

			<div class="panel pane-default">
			 <div class="panel-heading">
			 	<h4 class="panel-title">
			 	<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
			 	</h4>
			 </div>
			 <div id="collapse2" class="panel-collapse collapse">
			 	<div class="panel-body">Panels are created with the .panel class and content inside the panel has a .panel-body class.
		Panels are created with the .panel class and content inside the panel has a .panel-body class.

		Panels are created with the .panel class and content inside the panel has a .panel-body class.
		Panels are created with the .panel class and content inside the panel has a .panel-body class.
		</div>

			 </div>
			</div>

			<div class="panel pane-default">
			 <div class="panel-heading">
			 	<h4 class="panel-title">
			 	<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
			 	</h4>
			 </div>
			 <div id="collapse3" class="panel-collapse collapse">
			 	<div class="panel-body">Panels are created with the .panel class and content inside the panel has a .panel-body class.
		Panels are created with the .panel class and content inside the panel has a .panel-body class.

		Panels are created with the .panel class and content inside the panel has a .panel-body class.
		Panels are created with the .panel class and content inside the panel has a .panel-body class.
		</div>

			 </div>
			</div>
		</div>

     </div>
     
</body>
</html>