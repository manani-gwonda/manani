<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="home/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="text/css" href="img/team.jpg">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<title>ihotelier</title>
</head>
<body>
	<?php
	include_once('header.php');
	include_once('sidebar.php');
	?>
<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header bg-primary text-white text-center">
						<i class="fa fa-glass fa-lg float-left"></i>
						<span class="center">REGISTER </span>
					</div>
					<div class="card-body text-center text-white">
						<span><i class="fa fa-glass fa-3x"></i></span>
						<span class="pull-right" style="color: black">50</span>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header bg-primary text-white text-center">
						<i class="fa fa-eye fa-lg float-left"></i>
						<span class="center">DEPARTMENT </span>
					</div>
					<div class="card-body text-center text-white">
						<span><i class="fa fa-eye fa-3x"></i></span>
						<span class="pull-right text-black" style="color: black">50</span>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header bg-primary text-white text-center">
						<i class="fa fa-edit fa-lg float-left"></i>
						<span class="center">PROFILE </span>
					</div>
					<div class="card-body text-center text-white">
						<span><i class="fa fa-edit fa-3x"></i></span>
						<span class="pull-right"style="color: black">50</span>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-primary text-white text-center">
						<i class="fa fa-cog fa-lg float-left"></i>
						<span class="center">SETTING </span>
					</div>
					<div class="card-body text-center text-white">
						<span><i class="fa fa-cog fa-lg"></i></span>
						<span class="pull-right" style="color: black">50</span>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
</div>
<script type="text/javascript" src="home/jquery.min.js"></script>
<script type="text/javascript" src="home/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>