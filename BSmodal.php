<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Modal</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>


<body>

	<div class="container">
		<br>
	    <h2>Modal Example</h2>

				<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>


			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal Content -->

					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>

				<div class="modal-body">
					<p>Some text in the modal</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</div>

				</div>
			 </div>


		<br><br><br>

		<h2>Small Modal</h2>

				<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#mySmallModal">Open Small Modal</button>


			<!-- Modal -->
			<div class="modal fade" id="mySmallModal" role="dialog">
				<div class="modal-dialog modal-sm">

					<!-- Modal Content -->

					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>

				<div class="modal-body">
					<p>Some text in the small modal</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</div>

				</div>
			 </div>


			 <br><br><br>

		<h2>Large Modal</h2>

				<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myLargeModal">Open Large Modal</button>


			<!-- Modal -->
			<div class="modal fade" id="myLargeModal" role="dialog">
				<div class="modal-dialog modal-lg">

					<!-- Modal Content -->

					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>

				<div class="modal-body">
					<p>Some text in the large modal</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</div>

				</div>
			 </div>



	</div>

	<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>