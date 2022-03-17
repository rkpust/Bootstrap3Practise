<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Images Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>
	<div class="container">
		<p>There are 3 class,such as .img-rounded, .img-circle and .img-thumbnail . .img-rounded class shows rounded corner, .img-circle  shows circle shape image and .img-thumbnail shows thumbnail of image.</p>
		<img src="image/g.jpg" class="img-rounded" alt="Rose" height="236" width="304">
		<img src="image/rr.jpg" class="img-circle" alt="advice" height="236" width="304">
		<img src="image/download.jpg" class="img-thumbnail" alt="Moon" height="236" width="304">

		<br>

		<p>The .img-responsive class makes the image scale nicely to the parent element (Resize the browser window to see the effect):</p>
		<img src="image/g.jpg" class="img-responsive" alt="Rose" height="460" width="345">

		<br>
		<br>
		<h2>Image Gallery</h2>
		<p>The .thumbnail class can be used to display an image gallery.Click on the images to see it in full size.</p>

		<div class="row">
			<div class="col-md-4">
				<a href="image/download.jpg" class="thumbnail">
					<p>This is the good night wishing photo.</p>
					<img src="image/download.jpg" alt="Moon" height="150" width="150"></a>
			</div>

			<div class="col-md-4">
				<a href="image/g.jpg" class="thumbnail">
					<p>This is the good night wishing photo.</p>
					<img src="image/g.jpg" alt="Rose" height="150" width="150"></a>
			</div>

			<div class="col-md-4">
				<a href="image/rr.jpg" class="thumbnail">
					<p>This is an advicing speech.</p>
					<img src="image/rr.jpg" alt="Advice" height="100" width="150"></a>
			</div>

		</div>

		<br>
		<h2>Responsive Embed</h2>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IKZ57sdcFK4"></iframe>
		</div>

		<br>


		<div class="embed-responsive embed-responsive-4by3">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4JxAn7d37PE"></iframe>
		</div>


	</div>
</body>
</html>