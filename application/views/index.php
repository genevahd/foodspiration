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
	<title>Welcome!</title>
</head>
<body>
	<div class="container">

		<?php $this->load->view('nav') ?>

		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				<h3>Login</h3>
				<form class="form form-horizontal" action="/login" method="post">
					<div class="form-group">
						<label class="label-control col-md-3">Email</label>
						<input class="" type="text" name="email" placeholder="email@emailaddress.com">	
					</div>
					<div class="form-group">
						<label class="label-control col-md-3">Password</label>
						<input type="password" name="password" placeholder="******">
					</div>
					<div class="form-group">
						<label class="label-control col-md-3"></label>
						<input class="btn btn-success" type="submit" value="Login">
					</div>
				</form>
				<?= $this->session->flashdata("login_errors") ?>
			</div>



			<div class="col-md-5">	
				<h3>Register</h3>
				<form  class="form form-horizontal" action="/register" method="post">
					<div class="form-group">
						<label class="label-control col-md-3">First Name</label>
						<input type="text" name="first_name" placeholder="First Name">
					</div>
					<div class="form-group">
						<label class="label-control col-md-3">Last Name</label>
						<input type="text" name="last_name" placeholder="Last">
					</div>
					<div class="form-group">
						<label class="label-control col-md-3">Username</label>
						<input type="text" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label class="label-control col-md-3">Email</label>
						<input type="text" name="email" placeholder="Email Address">
					</div>
					<div class="form-group">
						<label class="label-control col-md-3">Password</label>
						<input type="password" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label class="label-control col-md-3">Confirm Password</label>
						<input type="password" name="c_password" placeholder="Confirm Password">
					</div>
					<div class="form-group">
						<label class="label-control col-md-3"></label>
						<input class="btn btn-success" type="submit" value="Register">
					</div>
				</form>
				<?= $this->session->flashdata("register_errors") ?>
			</div>
		</div>
</div>
</body>
</html>