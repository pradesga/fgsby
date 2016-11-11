<?php require("../inc/administration.php"); if(!islogin()) header('Location: login.php'); ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FemaleGeek Surabaya | Administration Pages</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <style type="text/css">
    	.form-signin {
			margin: 0 auto;
			max-width: 330px;
			padding: 15px;
		}
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/organizer">FemaleGeek Surabaya | Administration Pages</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile 
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">View Profile</a></li>
							<li><a href="#">Edit Profile</a></li>
							<li><a href="#">Change Password</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="/organizer/logout.php">Logout</a></li>
						</ul>
					</li>
					<li><a href="/" target="_blank">view frontend</a></li>
				</ul>
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
				</form>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li<?php activemenu('/organizer/dashboard.php'); ?>><a href="/organizer">Dashboard</a></li>
					<li<?php activemenu('/organizer/checkin.php'); ?>><a href="/organizer/checkin.php">Check In</a></li>
					<li<?php activemenu('/organizer/attendee.php'); ?>><a href="/organizer/attendee.php">Attendee</a></li>
					<li<?php activemenu('/organizer/setting.php'); ?>><a href="/organizer/setting.php">Settings</a></li>
					<li<?php activemenu('/organizer/form-management.php'); ?>><a href="/organizer/form-management.php">Form Management</a></li>
					<li<?php activemenu('/organizer/user.php'); ?>><a href="/organizer/user.php">Users</a></li>
				</ul>
			</div>