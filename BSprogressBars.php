<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Progress Bars Examples</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Progress Bars</h2>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
				<span class="sr-only">70% Complete</span>
			</div>
		</div>

		<br>
		<br>

		<h2>Progress Bars With Label</h2>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
				<span>70% Complete</span>
			</div>
		</div>

		<br>
		<br>

		<h2>Colored Progress Bars</h2>
		<div class="progress">
			<div class="progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
				<span>40% Complete (Success)</span>
			</div>
		</div>

		<div class="progress">
			<div class="progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
				<span>50% Complete (Info)</span>
			</div>
		</div>

		<div class="progress">
			<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
				<span>60% Complete (Warning)</span>
			</div>
		</div>

		<div class="progress">
			<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
				<span>70% Complete (Danger)</span>
			</div>
		</div>

		<br>
		<br>

		<h2>Striped Progress Bars</h2>
		<div class="progress">
			<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
				<span>40% Complete (Success)</span>
			</div>
		</div>

		<div class="progress">
			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
				<span>50% Complete (Info)</span>
			</div>
		</div>

		<div class="progress">
			<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
				<span>60% Complete (Warning)</span>
			</div>
		</div>

		<div class="progress">
			<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
				<span>70% Complete (Danger)</span>
			</div>
		</div>

		<br>
		<br>

		<h2>Animated Progress Bars</h2>
		<p>The .active class animates the progress bar:</p>
		<div class="progress">
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
				<span>40% Complete (Success)</span>
			</div>
		</div>


		<br>
		<br>

		<h2>Stacked Progress Bars</h2>
		<p>Create a stacked progress bar by replacing multiple bars into the same div with class .progress:</p>
		<div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
				Free Space
			</div>

			<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:10%">
				Warning
			</div>

			<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:20%">
				Danger
			</div>
		</div>
	
     </div>
     
</body>
</html>