<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Input Sizing</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Input Sizing</h2>
		<p>The form below shows input elements with different heights using .input-lg and .input-sm:</p>
		<form role="form">
			<div class="form-group">
				<label for="inputdefault">Default Input:</label>
				<input type="text" class="form-control" id="inputdefault">
			</div>
			<div class="form-group">
				<label for="inputlg">Large Input:</label>
				<input type="text" class="form-control input-lg" id="inputlg">
			</div>
			<div class="form-group">
				<label for="inputsm">Small Input:</label>
				<input type="text" class="form-control input-sm" id="inputsm">
			</div>

			<div class="form-group">
				<label for="sel1">Default Select List:</label>
				<select class="form-control" id="sel1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
			<div class="form-group">
				<label for="sel2">Large Select List:</label>
				<select class="form-control input-lg" id="sel2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>

			<div class="form-group">
				<label for="sel3">Small Select List:</label>
				<select class="form-control input-sm" id="sel3">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
			
		</form>

		<br><br>

		<h2>Input Sizing</h2>
		<p>You can quickly size labels and form controls within a Horizontal form by adding .form-group-lg or .form-group-sm to the div class="form-group" element:</p>

		<form class="form-horizontal" role="form">
			<div class="form-group form-group-lg">
				<label class="control-label col-sm-2" for="lg">form-group-lg</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lg">
				</div>
				</div>

				<div class="form-group form-group-sm">
				<label class="control-label col-sm-2" for="sm">form-group-sm</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="sm">
				</div>
				</div>
		</form>

		<br><br>

		<h2>Column Sizing</h2>
		<p>The form below shows input elements with different widths using .col-xs-* classes:</p>

		<form role="form">
			<div class="form-group">
				<div class="col-xs-2">
				<label for="ex1">col-xs-2</label>
					<input type="text" class="form-control" id="ex1">
				</div>

				<div class="col-xs-3">
				<label for="ex2">col-xs-3</label>
					<input type="text" class="form-control" id="ex2">
				</div>

				<div class="col-xs-4">
				<label for="ex3">col-xs-4</label>
					<input type="text" class="form-control" id="ex3">
				</div>
			</div>
		</form>

		<br><br>

		<h2>Help Text</h2>
		<p>Use the .help-block class to add a block level help text in forms:</p>
		
		<form role="form">
	
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter Password">
				<span class="help-block">This is some help text that breaks onto a new line and may extend more than one line.</span>
				</div>

				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</form>

     </div>

</body>
</html>