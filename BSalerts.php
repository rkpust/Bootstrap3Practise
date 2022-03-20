<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Alerts Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Alerts</h2>
		<div class="alert alert-success">
			<strong>Success!</strong> This alert box could indicate a successfull or positive action.
		</div>
		<div class="alert alert-info">
			<strong>Info!</strong> This alert box could indicate a neutral informative change  or action.
		</div>
		<div class="alert alert-warning">
			<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
		</div>
		<div class="alert alert-danger">
			<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
		</div>

		 <br>
		 <h2>Closing Alerts</h2>
		 <p>The a element with class="close" and data-dismiss="alert" is used to close the alert box.</p>
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> This alert box could indicate a successfull or positive action.
		</div>
		<div class="alert alert-info">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Info!</strong> This alert box could indicate a neutral informative change  or action.
		</div>
		<div class="alert alert-warning">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
		</div>
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
		</div>

		<br>
		 <h2>Alerts</h2>
		 <p>The .fade and .in classes adds a fadding effect when closing the alert message.</p>
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> This alert box could indicate a successfull or positive action.
		</div>
		<div class="alert alert-info fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Info!</strong> This alert box could indicate a neutral informative change  or action.
		</div>
		<div class="alert alert-warning fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
		</div>
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
		</div>
	</div>

</body>
</html>