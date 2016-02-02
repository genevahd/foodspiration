<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<title>Add a Recipe</title>
</head>
<body>
	<?php $this->load->view('nav')?>

	<div class="container">

		<h3>Add a recipe!</h3>
		<form class="form form-horizontal" action="/recipes/create" method="post">
			<div class="form-group">
				<label class="label-control col-md-2">Title</label>
				<input class="col-md-2" type="text" name="title">
			</div>
			<div class="form-group">
				<label class="label-control col-md-2">Image Link (URL)</label>
				<input class="col-md-2" type="text" name="image">
			</div>
			<div class="form-group">
				<label class="label-control col-md-2">Content</label>
				<textarea rows="12" class="col-md-2" name="content"></textarea>
			</div>
			<div class="form-group">
				<label class="label-control col-md-2"></label>
				<input class="btn btn-success" type="submit" value="Add">
			</div>
	
			
		</form>
	</div>
</body>
</html>