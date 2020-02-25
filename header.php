
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
<div class="header bg-primary">
	<a href="#">
		<img src="img/chef.jpg" alt="ihotelier" width="70px" height="70px" class="rounded-circle">
		<?php
			require 'connection.php';
			
			if(isset($_SESSION['email'])){
				

				$emailuser=$_SESSION['email'];
				$query2=mysqli_query($conn,"SELECT * FROM users WHERE email='$emailuser'");
				while($row1=mysqli_fetch_array($query2)){?>

					<span class="text-white"><?php echo $row1['first_name']?></span>
				<?php } } ?>
	</a>
	<div class="pull-right" style="padding: 10px 15px;text-decoration: none;">
		<a href="logout.php">
			<span class="text-white"><i class="fa fa-sign-out"></i>Logout</span>
		</a>
	</div>
</div>
<script type="text/javascript" src="home/jquery.min.js"></script>
<script type="text/javascript" src="home/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>