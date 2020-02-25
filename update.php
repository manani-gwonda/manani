<?php
	include_once('connection.php');
	if(isset($_POST['update']))
	{
		$id=$_GET['id'];
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$phone=$_POST['phone'];
		$idnumber=$_POST['idnumber'];
		$gender=$_POST['gender'];
		$department=$_POST['department'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		 $sql=mysqli_query($conn,"update * FROM users set firstame='".$first_name."',lastname='".$last_name."',userphone='".$phone."',useridnumber='".$idnumber."',usergender='".$gender."',userdepartment='".$department."',useremail='".$email."',userpassword='".$password."'");
		 if($sql)
		 {
		 	header('location:view.php');
		 }
		 else{
		 	echo "please check your query";
		 }
	}
	else{

		header('location:view.php');
	}

?>