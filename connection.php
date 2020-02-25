<?php
	$conn=mysqli_connect('127.0.0.1','root','');
	mysqli_select_db($conn,'japhet');
	if($conn){
		// echo "woo!";
	}
	else{
		echo "error".mysqli_error($conn);
	}
?>