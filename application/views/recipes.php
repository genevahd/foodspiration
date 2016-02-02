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
		<?php $this->load->view('nav') ?>

		<div class="col-md-5">
			<h3 class="text-center">Recipe Feed</h3>
			<table class="table">
				<?php foreach ($all_recipes as $recipe){ ?>
					<tr>
					<td>
						<a href="/recipes/<?= $recipe['id']?>"><?= $recipe["title"] ?></a>
					</td>
				<td>
					<img width="200" src="<?=$recipe["image"]?>" alt="image of <?= $recipe["title"] ?>">
					<p>Posted <?=  ago($recipe["created_at"]) ?></p>


				</td>
				<td><a href="/recipes/delete/<?= $recipe['id']?>">Delete</a></td>
				</tr>
				<?php } ?>
			</table>
		</div>

		<div class="col-md-5  col-md-offset-1">
			<a class="btn btn-primary" href="/recipes/add"><h3> Add a new recipe</h3></a>
			<h4>Liked Recipes</h4>
			<table class="table">
			<?php foreach($liked_recipes as $liked){ ?>
						<tr>
							<td><a href="/recipes/<?= $liked['recipe_id'] ?>"><?= $liked["title"] ?></a></td>
							<td>
								<p>Liked <?= ago($liked["created_at"]) ?></p>
							</td>
						</tr>
			<?php } ?>	
			

			</table>

			
		</div>
	</div>

<?php
	function ago($time)
	{
		date_default_timezone_set('America/Los_Angeles');

	   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	   $lengths = array("60","60","24","7","4.35","12","10");

	   $now = mktime();

	       $difference     = $now - strtotime($time);
	       $tense         = "ago";
		// echo date('Y-m-d h:i:s e', $now);

		// echo date('Y-m-d h:i:s', strtotime($time));
		// echo $difference;
	   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	       $difference /= $lengths[$j];
	   }

	   $difference = round($difference);

	   if($difference != 1) {
	       $periods[$j].= "s";
	   }

	   return "$difference $periods[$j] ago ";
	}
?>
</body>
</html>