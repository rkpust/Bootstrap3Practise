<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Carousel Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>

	<style>
		.carousel-inner > .item > img , .carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	</style>
</head>


<body>

	<div class="container">
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="image/download.jpg" alt="Wish with moon" width="460" height="345">
				</div>

				<div class="item">
					<img src="image/g.jpg" alt="Wish with rose" width="460" height="345">
				</div>

				<div class="item">
					<img src="image/rr.jpg" alt="Advice" width="460" height="345">
				</div>

				<div class="item">
					<img src="image/fagun_2015.jpg" alt="Wish for fagun" width="460" height="345">
				</div>
			</div>


			<!-- Left and Right Controls -->
			<a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
	</div>


		<br><br><br>
	<div class="container">

		<div id="myCarousel2" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel2" data-slide-to="1"></li>
				<li data-target="#myCarousel2" data-slide-to="2"></li>
				<li data-target="#myCarousel2" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="image/g.jpg" alt="Wish with rose" width="460" height="345">
					<div class="carousel-caption">
						<h3>Caption Header</h3>
						<p>This is caption description.</p>
					</div>
				</div>

				<div class="item">
					<img src="image/download.jpg" alt="Wish with moon" width="460" height="345">
					<div class="carousel-caption">
						<h3>Caption Header</h3>
						<p>This is caption description.</p>
					</div>
				</div>

				<div class="item">
					<img src="image/rr.jpg" alt="Advice" width="460" height="345">
					<div class="carousel-caption">
						<h3>Caption Header</h3>
						<p>This is caption description.</p>
					</div>
				</div>

				<div class="item">
					<img src="image/fagun_2015.jpg" alt="Wish for fagun" width="460" height="345">
					<div class="carousel-caption">
						<h3>Caption Header</h3>
						<p>This is caption description.</p>
					</div>
				</div>
			</div>


			<!-- Left and Right Controls -->
			<a href="#myCarousel2" class="left carousel-control" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a href="#myCarousel2" class="right carousel-control" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>

	</div>


	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>