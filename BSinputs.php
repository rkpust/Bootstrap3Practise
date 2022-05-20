<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Inputs Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Form Control: Input</h2>
		<p>The form below contains two input elements: one of type text and one of type password:</p>
		<form role="form">
			<div class="form-group">
				<label for="user">Name:</label>
				<input type="text" name="user" class="form-control" id="user" placeholder="Enter Name">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
			</div>

		</form>

		<br><br>

		<h2>Form Control: Input</h2>
		<p>The form below contains a textarea for comments:</p>
		<form role="form">
			<div class="form-group">
				<label for="comment">Comment:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
		</form>

		<h2>Form Control:Checkbox</h2>
		<p>The form below contains three checkbox. The last option is disabled:</p>
		<form role="form">
			<div class="checkbox">
				<label><input type="checkbox" value="">Option 1</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Option 2</label>
			</div>
			<div class="checkbox disabled">
				<label><input type="checkbox" value="" disabled>Option 3</label>
			</div>
		</form>


		<h2>Form Control:Inline Checkbox</h2>
		<p>The form below contains three checkbox. The last option is disabled:</p>
		<form role="form">

				<label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
				<label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
				<label class="checkbox-inline"><input type="checkbox" value="" disabled>Option 3</label>

		</form>

		<br><br>

		<h2>Form Control:Radio Buttons</h2>
		<p>The form below contains three radio buttons. The last option is disabled:</p>
		<form role="form">
			<div class="radio">
				<label><input type="radio" value="Option 1" name="optradio">Option 1</label>
			</div>
			<div class="radio">
				<label><input type="radio" value="Option 2" name="optradio">Option 2</label>
			</div>
			<div class="radio disabled">
				<label><input type="radio" value="Option 3" name="optradio" disabled>Option 3</label>
			</div>
		</form>

		<br><br>

		<h2>Form Control:Select</h2>
		<p>The form below contains two dropdown menu (select lists):</p>
		<form role="form">
			<div class="form-group">
				<label for="sell">Select List (select one):</label>
				<select class="form-control" id="sell">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>

				<br>

				<label for="sell2">Multiple Select List (hold shift to select more than one):</label>
				<select multiple class="form-control" id="sell2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</form>

     </div>

</body>
</html>