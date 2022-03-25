<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Pagination Examples</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Pagination</h2>
		<p>The .pagination class provides pagination links:</p>
		<ul class="pagination">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>

		<br>
		<br>

		<h2>Pagination - Active State</h2>
		<p>Add class .active to let the user know which page he/she is on:</p>
		<ul class="pagination">
			<li><a href="#">1</a></li>
			<li class="active"><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>

		<br>
		<br>

		<h2>Pagination - Disabled State</h2>
		<p>Add class .disabled if a page for some reason is disabled:</p>
		<ul class="pagination">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li class="disabled"><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>

		<br>
		<br>

		<h2>Pagination - Sizing</h2>
		<p>Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks:</p>
		<ul class="pagination pagination-lg">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>

		<br>

		<ul class="pagination pagination-sm">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>


		<br>
		<br>

		<h2>Breadcrumbs</h2>
		<p>The .breadcrumb class indicates the current page's location within a navigational hierarch:</p>
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Private</a></li>
			<li><a href="#">Pictures</a></li>
			<li class="active">Vacation</li>
		</ul>


	
     </div>
     
</body>
</html>