<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Inputs 2 Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">

		<h2>Horizontal Form With Static Control</h2>
		
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-10">
					<p class="form-control-static">someone@example.com</p>
				</div>

			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Password:</label>
				<div class="col-sm-10">
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>

		<br><br>

		<h2>Horizontal Form : Control States</h2>
		
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-2 control-label">Focused:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="FocusedInput" value="Click to focus...">
				</div>
             </div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="inputPassword">Disabled:</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="disabledInput" placeholder="Disabled input here..." disabled>
				</div>
			</div>

			<fieldset disabled>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="disabledTextInput">Disabled input and select list(Fieldset Disabled)</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="disabledTextInput" placeholder="Disabled input..." >
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="disabledSelect"></label>
				<div class="col-sm-10">
					<select id="disabledSelect" class="form-control">
						<option>Disabled Select</option>
					</select>
				</div>
			</div>
			</fieldset>

			<div class="form-group has-success has-feedback">
				<label class="control-label col-sm-2" for="inputSuccess">Input with success and glyphicon</label>     
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputSuccess">
					<span class="glyphicon glyphicon-ok form-control-feedback">
					</span>
				</div>
			</div>

			<div class="form-group has-warning has-feedback">
				<label class="control-label col-sm-2" for="inputWarning">Input with warning and glyphicon</label>     
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputWarning">
					<span class="glyphicon glyphicon-warning-sign form-control-feedback">
					</span>
				</div>
			</div>

			<div class="form-group has-error has-feedback">
				<label class="control-label col-sm-2" for="inputError">Input with error and glyphicon</label>     
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputError">
					<span class="glyphicon glyphicon-remove form-control-feedback">
					</span>
				</div>
			</div>
		</form>

		<br><br>

		<h2>Inline Form : Control States</h2>
		
		<form class="form-inline" role="form">
			<div class="form-group">
				<label class="col-sm-2 control-label">Focused:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="FocusedInput" value="Click to focus...">
				</div>
             </div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="inputPassword">Disabled:</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="disabledInput" placeholder="Disabled input here..." disabled>
				</div>
			</div>

			<div class="form-group has-success has-feedback">
				<label class="control-label col-sm-2" for="inputSuccess2">Input with success and glyphicon</label>     
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputSuccess2">
					<span class="glyphicon glyphicon-ok form-control-feedback">
					</span>
				</div>
			</div>

			<div class="form-group has-warning has-feedback">
				<label class="control-label col-sm-2" for="inputWarning">Input with warning and glyphicon</label>     
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputWarning">
					<span class="glyphicon glyphicon-warning-sign form-control-feedback">
					</span>
				</div>
			</div>

			<div class="form-group has-error has-feedback">
				<label class="control-label col-sm-2" for="inputError">Input with error and glyphicon</label>     
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputError">
					<span class="glyphicon glyphicon-remove form-control-feedback">
					</span>
				</div>
			</div>
		</form>
		

     </div>

</body>
</html>