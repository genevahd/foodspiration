<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recipes</title>
</head>
<body>
	<h4>RECIPESSSSSSS</h4>
	<a href="/recipes/add">Add a recipe</a>
	<a href="/logout">Log Out</a>
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

</body>
</html>