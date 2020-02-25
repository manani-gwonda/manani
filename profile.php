 <?php
require_once('connection.php');
$sql=mysqli_query($conn,"SELECT * FROM users");
while($rows=mysqli_fetch_array($sql)){
$first_name=$rows['first_name'];
$last_name=$rows['last_name'];
$phone=$rows['phone'];
$idnumber=$rows['idnumber'];
$gender=$rows['gender'];

$department=$rows['department'];
$email=$rows['email'];
$password=$rows['password'];
}
?>


<!Doctype html>
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
	<?php require_once('header.php');?>
	<?php require_once('sidebar.php');?>
	<!--main content information here-->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span class="float-left"><i class="fa fa-user fa-lg"></i></span>
							<span>User Profile</span>
						</div>
						<div class="card-body ">
							<ul class="list-group">
								<li class="list-group-item">First Name:
									<span class="badge badge-primary badge-pill"><?php echo $first_name?></span>
								</li>
								<li class="list-group-item">Last Name:
									<span class="badge badge-primary badge-pill"><?php echo $last_name?></span>
								</li>
								<li class="list-group-item"> phone:
									<span class="badge badge-secondary badge-pill"><?php echo $phone?></span>
								</li>
								<li class="list-group-item"> idnumber:
									<span class="badge badge-danger badge-pill"><?php echo $idnumber?></span>
								</li>
							</ul>
						</div>
						<div class="card-footer">
						
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span class="float-left"><i class="fa fa-user fa-lg"></i></span>
							<span>User Profile</span>
						</div>
						<div class="card-body ">
							<ul class="list-group">
								<li class="list-group-item">Gender :
									<span class="badge badge-info badge-pill"><?php echo $gender?></span>
								</li>
								<li class="list-group-item">Department :
									<span class="badge badge-info badge-pill"><?php echo $department?></span>
								</li>
								<li class="list-group-item">Email:
									<span class="badge badge-primary badge-pill"><?php echo $email?></span>
								</li>
								<li class="list-group-item"> Password :
									<span class="badge badge-secondary badge-pill"><?php echo $password?></span>
								</li>
							</ul>
						</div>
						<div class="card-footer">
						
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>