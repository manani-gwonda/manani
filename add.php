<?php 
include_once('process.php');
include_once('connection.php');
if(isset($_POST['id'])){
$department=$_POST['department'];
$sql = mysqli_query($conn,"INSERT INTO users(department) VALUES('$department')");
		if($sql){
			echo $department;
		}
		//else{
			//echo "error".mysqli_error($conn);
		//}
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


	?>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header text-white text-center bg-primary">
							<span>ADD DEPARTMENT</span>
							<span><i class="fa fa-plus pull-right"  data-toggle="modal" data-target="#adddepartment"></i></span>
						</div>
						<div class="card-body text-center text-white">
							<div class="col-lg-12">
								<table class="table table-responsive table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Department</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Ict</td>
											<td>
												<a href="editstaff.php" class="btn btn-secondary btn-sm" title="edit"><i class="fa fa-edit"></i></a>
												<a href="deletestaff.php" class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>house keeping</td>
											<td>
												<a href="editstaff.php" class="btn btn-secondary btn-sm" title="edit"><i class="fa fa-edit"></i></a>
												<a href="deletestaff.php" class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
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
	<!---================Modal form for adding a department===========-->
	<div class="modal fade" role="modal-dialog" id="adddepartment" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center text-white bg-primary">ADD DEPARTMENT</div>
				<diV class="modal-body">
					<form metho="post" action="">
						
						<input type="text" name="department" placeholder="add department">
						<input type="submit" name="add" value="save" class="btn btn-primary btn-sm float-left pull-left">					
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