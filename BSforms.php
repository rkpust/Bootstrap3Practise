<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Forms Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Vertical (Basic) Form</h2>
		<form role="form">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
			</div>
			<div class="checkbox">
				<label><input type="checkbox" name="checkbox">Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

		<br><br>

		<h2>Inline Form</h2>
		<p>Make the viewport larger than 768px wide to see that all of the form elements are inline,left aligned,and the labels are alongside.</p>
		<form class="form-inline" role="form">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
			</div>
			<div class="checkbox">
				<label><input type="checkbox" name="checkbox">Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

		<br><br>

		<h2>Inline Form With .sr-only Class</h2>
		<p>Make the viewport larger than 768px wide to see that all of the form elements are inline,left aligned,and the labels are alongside.</p>
		<form class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="email">Email:</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label class="sr-only" for="pwd">Password:</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
			</div>
			<div class="checkbox">
				<label><input type="checkbox" name="checkbox">Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

		<br><br>

		<h2>Horizontal Form</h2>

		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-10">
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
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
			    <div class="checkbox">
				<label><input type="checkbox" name="checkbox">Remember me</label>
				</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
			    <button type="submit" class="btn btn-default">Submit</button>
			    </div>
				</div>
		</form>
     </div>

</body>
</html>