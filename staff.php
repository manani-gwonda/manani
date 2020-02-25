<?php
	include_once('process.php');
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
										<th>NO</th>
										<th>FIRSTNAME</th>
										<th>LASTNAME</th>
										<th>PHONE</th>
										<th>IDNUMBER</th>
										<th>GENDER</th>
										<th>DEPARTMENT</th>
										<th>EMAIL</th>
										<th>PASSWORD</th> 
										<th>ACTIONS</th>
									</tr>
								</thead>
								<tbody>
									<?php
									while($rows=mysqli_fetch_array($sql)){?>
									<tr>
										<td><?php echo $rows['id']?></td>
										<td><?php echo $rows['first_name']?></td>
										<td><?php echo $rows['last_name']?></td>
										<td><?php echo $rows['phone']?></td>
										<td><?php echo $rows['idnumber']?></td>
										<td><?php echo $rows['gender']?></td>
										<td><?php echo $rows['department']?></td>
										<td><?php echo $rows['email']?></td>
										<td><?php echo $rows['password']?></td>
										<td>
											<a href="editstaff.php?id=<?php echo $rows['id']?>" class="btn btn-secondary btn-sm" title="edit"><i class="fa fa-edit"></i></a>
													<a href="deletestaff.php?id=<?php echo $rows['id']?>" class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash"></i></a>
													<a href="profile.php?id=<?php echo $rows['id']?>" class="btn btn-info btn-sm" title="view data"><i class="fa fa-eye"></i></a>
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



<script type="text/javascript" src="home/jquery.min.js"></script>
<script type="text/javascript" src="home/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>