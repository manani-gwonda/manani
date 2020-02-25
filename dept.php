<?php
	include'connection.php';
	if(isset($_POST['adddept'])){
		$dptname=$_POST['department'];
		$query=mysqli_query($conn,"INSERT INTO department(department) VALUES('$dptname')");
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
	//include_once('header.php');
	//include_once('sidebar.php');
	include_once('connection.php');
	$sql=mysqli_query($conn,"SELECT * FROM users");

	?>
<div class="main-container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-primary text-white text-center">
						<i class="fa fa-glass fa-lg float-left"></i>
							<span>REGISTER STAFF </span>
							<i class="fa fa-glass fa-lg float-right"></i>
					</div>
					<div class="card-body text-center">
						<div class="col-lg-12">
							<table class="table table-responsive table-bordered text-center">
								<thead>
									<tr>
										<th>DEPARTMENT</th>
										
										<th>ACTIONS</th>
									</tr>
								</thead>
								<tbody>
									<?php
									while($rows=mysqli_fetch_array($sql)){?>
									<tr>
										
										<td><?php echo $rows['department']?></td>
										
										<td>
											<a href="" data-toggle="modal" data-target="#adddepartment" class="btn btn-info btn-sm" title="view data"><i class="fa fa-plus"></i></a>
										</td>
									</tr>
								<?php }?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" role="modal-dialog" id="adddepartment" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center text-white bg-primary">ADD DEPARTMENT</div>
				<diV class="modal-body">
					<form method="post" action="">
						
						<input type="text" name="department" placeholder="department name"><br><br>
						<input type="submit" name="adddept" value="save" class="btn btn-primary btn-sm float-left pull-left">					
					</form>
					
					</div>
				</diV>
			</div>
		</div>
	</div>



<script type="text/javascript" src="home/jquery.min.js"></script>
<script type="text/javascript" src="home/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>