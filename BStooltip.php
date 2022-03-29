<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Tooltip Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>


<body>

	<div class="container">
		<h2>Tooltip Example</h2>
		<a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>

		<br><br>

		<h2>Tooltip Example</h2>
		<p>The data-placement attribute specifies the tooltip position.</p>
		<ul class="list-inline">
			<li>
				<a href="#" data-toggle="tooltip" data-placement="top" title="Hooray!">Top</a>
			</li>
			<li>
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Hooray!">Bottom</a>
			</li>
			<li>
				<a href="#" data-toggle="tooltip" data-placement="left" title="Hooray!">Left</a>
			</li>
			<li>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Hooray!">Right</a>
			</li>
			<li>
				<a href="#" data-toggle="tooltip" data-placement="auto" title="Hooray!">Auto</a>
			</li>
		</ul>


	</div>


	<script>
		$(document).ready(function(){ $('[data-toggle="tooltip"]').tooltip();});
	</script>

	<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>