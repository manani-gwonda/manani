
<?php
		include'connection.php';
		if(isset($_POST['name'])){

		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		
		$sql = mysqli_query($conn,"INSERT INTO contact(name,email, message) VALUES('$name','$email','$message')");
		if($sql){
			echo "submited";
			
			
		}
	}
		
?>