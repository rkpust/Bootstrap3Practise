<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Popover</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>


<body>

	<div class="container">
		<h2>Popover Example</h2>
		<a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover.">Toggle Popover</a>

		<br><br>

		<h2>Popover Example</h2>
		<p>The data-placement attribute specifies the tooltip position.</p>
		<ul class="list-inline">
			<li>
				<a href="#" data-toggle="popover" title="Popover Header" data-placement="top"  data-content="Some content inside the popover.">Top</a>
			</li>
			<li>
				<a href="#" data-toggle="popover" title="Popover Header" data-placement="bottom" data-content="Some content inside the popover.">Bottom</a>
			</li>
			<li>
				<a href="#" data-toggle="popover" title="Popover Header" data-placement="left" data-content="Some content inside the popover.">Left</a>
			</li>
			<li>
				<a href="#" data-toggle="popover" title="Popover Header" data-placement="right" data-content="Some content inside the popover.">Right</a>
			</li>
			<li>
				<a href="#" data-toggle="popover" title="Popover Header" data-placement="auto" data-content="Some content inside the popover.">Auto</a>
			</li>
		</ul>

	    <br><br>
	    <h2>Popover Example</h2>
	    <a href="#" data-toggle="popover" data-trigger="focus" title="Dismissible Popover" data-content="Click anywhere in the document to close this popover.">Click Me</a>

	    <br><br>
	    <h2>Popover Example</h2>
	    <a href="#" data-toggle="popover" data-trigger="hover" title="Dismissible Popover" data-content="Remove the mouse pointer from the document to close this popover.">Hover Over Me</a>


	</div>


	<script>
		$(document).ready(function(){ $('[data-toggle="popover"]').popover();});
	</script>

	<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>