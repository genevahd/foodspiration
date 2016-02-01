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
	<title>Foodspiration</title>
</head>
<body>
	<div class="container">
		<h1>Foodspiration</h1>

		<div class="col-md-5 col-md-offset-1">
			<h4>Recipes</h4>
			<a href="/recipes/add">Add a recipe</a>
			<a href="/logout">Log Out</a>
		</div>

		<div class="col-md-5">
			
			<h3>New Recipes</h3>
		
			<?php foreach ($recipes as $recipe){ ?>
							<h4><a href="/recipes/<?= $recipe['id']?>"><?= $recipe["title"] ?></a></h5>
			<?php } ?>
				<h4>Liked Recipes</h4>
				<ul>
			<?php foreach($liked_recipes as $liked){ ?>
							<li><a href="/recipes/<?= $liked['recipe_id'] ?>"><?= $liked["title"] ?></a></li>
			<?php } ?>	
				</ul>
		</div>
		
		

	</div>
</body>
</html>