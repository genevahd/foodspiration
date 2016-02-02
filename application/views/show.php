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
	<title>Recipe</title>
</head>
<body>
	<a href="/recipes">Back to Recipes</a>
	<h2><?= $recipe["title"] ?></h2>
	<p><?= $recipe["content"] ?></p>
<?php if(empty($liked)){ ?>
				<a href="/recipes/like/<?= $recipe['id']?>"><button>Like</button></a>
<?php } else { ?>	
				<a href="/recipes/unlike/<?= $liked['id']?>"><button>Unlike</button></a>
<?php } ?>
</body>
</html>