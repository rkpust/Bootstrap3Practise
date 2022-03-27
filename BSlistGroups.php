<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS List Group Examples</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Basic List Group</h2>
		<p>To create a basic list group,use an ul element with class .list-group and li elements with class .list-group-item</p>

		<ul class="list-group">
			<li class="list-group-item">First Item</li>
			<li class="list-group-item">Second Item</li>
			<li class="list-group-item">Third Item</li>
			
		</ul>


		<br><br>

		<h2>Basic List Group</h2>
		<p>To create a badge,create a span element with class .badge inside the list item.</p>

		<ul class="list-group">
			<li class="list-group-item"><span class="badge">12</span>New</li>
			<li class="list-group-item"><span class="badge">5</span>Deleted</li>
			<li class="list-group-item"><span class="badge">3</span>Warning</li>
			
		</ul>

		<br><br>


		<h2>List Group With Linked Items</h2>
		<p>To create a list group with linked items, use 'div' instead of 'ul' and 'a' instead of 'li' .</p>

		<div class="list-group">
			<a href="#" class="list-group-item">First Item</a>
			<a href="#" class="list-group-item">Second Item</a>
			<a href="#" class="list-group-item">Third Item</a>
			
		</div>

		<br><br>


		<h2>Active Item in a List Group</h2>

		<div class="list-group">
			<a href="#" class="list-group-item active">First Item</a>
			<a href="#" class="list-group-item">Second Item</a>
			<a href="#" class="list-group-item">Third Item</a>
			
		</div>

		<br><br>


		<h2>List Group With a Disabled Item</h2>

		<div class="list-group">
			<a href="#" class="list-group-item disabled">First Item</a>
			<a href="#" class="list-group-item">Second Item</a>
			<a href="#" class="list-group-item">Third Item</a>
			
		</div>

		<br><br>

		<h2>List Group With Contextual Classess</h2>

		<ul class="list-group">
			<li class="list-group-item list-group-item-success">First Item</li>
			<li class="list-group-item list-group-item-info">Second Item</li>
			<li class="list-group-item list-group-item-warning">Third Item</li>
			<li class="list-group-item list-group-item-danger">Fourth Item</li>
			
		</ul>

		<h2>List Group With Contextual Classess</h2>
		<p>Move the mouse over the linked items to see the hover effect.</p>

		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-success">First Item</a>
			<a href="#" class="list-group-item list-group-item-info">Second Item</a>
			<a href="#" class="list-group-item list-group-item-warning">Third Item</a>
			<a href="#" class="list-group-item list-group-item-danger">Fourth Item</a>
			
		</div>

		<br><br>

		<h2>List Group With Custom Content</h2>

		<div class="list-group">
			<a href="#" class="list-group-item active">
			<h4 class="list-group-item-heading">First List Item Heading</h4>
			<p class="list-group-item-text">First List Item Text</p>
		    </a>
		    <a href="#" class="list-group-item ">
			<h4 class="list-group-item-heading">Second Item Heading</h4>
			<p class="list-group-item-text">Second List Item Text</p>
		    </a>
		    <a href="#" class="list-group-item ">
			<h4 class="list-group-item-heading">Third Item Heading</h4>
			<p class="list-group-item-text">Third List Item Text</p>
		    </a>
		    <a href="#" class="list-group-item ">
			<h4 class="list-group-item-heading">Fourth Item Heading</h4>
			<p class="list-group-item-text">Fourth List Item Text</p>
		    </a>
			
		</div>

	
     </div>
     
</body>
</html>