<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">

	<title>Learn some about ME</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/navbar-fixed-top.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>

  <body>

	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top  navbar-inverse" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand warning" href="navbar.html">Marina's Navbar Extravaganza</a>
		</div>
		<div class="navbar-collapse collapse">
		  <ul class="nav navbar-nav navbar-right">
	<?php
	$currPath= $_SERVER["PHP_SELF"];
//	var_dump($currPath);
	if ($currPath == "/navbar.php") {
		echo '<li class="active"><a href="navbar.php">Home</a></li>';
	}
	else echo '<li><a href="navbar.php">Home</a></li>';
	if ($currPath == "/aboutme.php") {
		echo '<li class="active"><a href="aboutme.php">About</a></li>';
	}
		else echo '<li><a href="aboutme.php">About</a></li>';
	if ($currPath=="/contact.php") {
		echo '<li class="active"><a href="contact.php">Contact</a></li>';
	}		
		else echo '<li><a href="contact.php">Contact</a></li>';
echo " </ul>";
	?>
	
		  
		</div><!--/.nav-collapse -->
	  </div>
	</div>