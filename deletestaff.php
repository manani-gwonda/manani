<?php
 require_once('connection.php');
$sql=mysqli_query($conn, "DELETE FROM users WHERE id='".$_GET['id']."' ");
if($sql){
  echo "Data deleted successfully";
  header("location:staff.php");
}
else{
  echo "error connection".mysqli_error($connection);
}
?>