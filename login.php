 <?php
include_once('connection.php');
session_start();
    if(isset($_POST['signin'])){
        $email = $_POST['Username'];
        $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");
        if(mysqli_num_rows($query)>0){
          header('location:home.php');
          $_SESSION['email']=$email;
        }
        else{ 

            echo '<script> alert("Wrong Username or Password");</script>';
            //header('location:login.php');
        }
    }
?>
<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ihotelier</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    body{
        background-color: #4acc34;
    }
  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="login.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="Username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="submit"  name="signin" value="Sign In" class="btn btn-primary btn-block">
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="register.php">Create an Account</a></p>
    <p class="text-center">Return to<a href="index.php">MENU</a></p>
</div>
</body>
</php>                                                               