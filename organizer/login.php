<?php require("../inc/administration.php"); if(islogin()){ header('Location: /organizer'); } ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FemaleGeek Surabaya | Administration Pages</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <style type="text/css">
    	.form-signin {
			margin: 0 auto;
			max-width: 330px;
			padding: 15px;
		}
    </style>
</head>
<body>

	<div class="container">
		<form class="form-signin" method="post">
			<h2 class="form-signin-heading">Administration Login</h2>
			<?php echo checklogin(); ?>
			<label for="username" class="sr-only">Username</label>
			<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
			<label for="pwdstr" class="sr-only">Password</label>
			<input type="password" id="pwdstr" name="pwdstr" class="form-control" placeholder="Password" required>
			<div class="checkbox">
				<label><input type="checkbox" value="remember-me"> Remember me</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>

	</div> <!-- /container -->

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>