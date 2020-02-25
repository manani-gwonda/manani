
<?php
	if(isset($_POST['signup'])){
		include'connection.php';
		$first_name=htmlentities($_POST['first_name']);
		$last_name=htmlentities($_POST['last_name']);
		$phone=htmlentities($_POST['phone']);
		$idnumber=htmlentities($_POST['idnumber']);
		$gender=htmlentities($_POST['gender']);
		$department=htmlentities($_POST['department']);
		$email=htmlentities($_POST['email']);
		$password=htmlentities($_POST['password']);
		
		$sql = mysqli_query($conn,"INSERT INTO users(first_name,last_name, phone,idnumber,gender,department,email,password) VALUES('$first_name','$last_name','$phone','$idnumber','$gender','$department','$email','$password')");
		if($sql){
			//echo "submited";
			header('location:login.php');
			
			
		}
		else{
			//echo "error".mysqli_error($conn);
			header('location:register.php');
		}
	}
		
?>
