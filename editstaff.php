
<?php

  include_once('connection.php');
    if(isset($_REQUEST['id'])){
  $id=$_GET['id'];
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
     $sql=mysqli_query($conn,"UPDATE users set first_name='$first_name', last_name='$last_name', phone='$phone', idnumber='$idnumber', gender='$gender', department='$department', email='$email', password='$password' WHERE id='$id' " );
     if($sql)
     {
     // header('location:view.php');
     }
     else{
      echo "please check your query";
     }
  }
  

}

?>





<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>ihotelier</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
  body{
    color: #fff;
    background: #63738a;
    font-family: 'Roboto', sans-serif;
  }
    .form-control{
    height: 40px;
    box-shadow: none;
    color: #969fa4;
  }
  .form-control:focus{
    border-color: #5cb85c;
  }
    .form-control, .btn{        
        border-radius: 3px;
    }
  .signup-form{
    width: 400px;
    margin: 0 auto;
    padding: 30px 0;
  }
  .signup-form h2{
    color: #636363;
        margin: 0 0 15px;
    position: relative;
    text-align: center;
    }
  .signup-form h2:before, .signup-form h2:after{
    content: "";
    height: 2px;
    width: 30%;
    background: #d4d4d4;
    position: absolute;
    top: 50%;
    z-index: 2;
  } 
  .signup-form h2:before{
    left: 0;
  }
  .signup-form h2:after{
    right: 0;
  }
    .signup-form .hint-text{
    color: #999;
    margin-bottom: 30px;
    text-align: center;
  }
    .signup-form form{
    color: #999;
    border-radius: 3px;
      margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
  .signup-form .form-group{
    margin-bottom: 20px;
  }
  .signup-form input[type="checkbox"]{
    margin-top: 3px;
  }
  .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;    
    min-width: 140px;
        outline: none !important;
    }
  .signup-form .row div:first-child{
    padding-right: 10px;
  }
  .signup-form .row div:last-child{
    padding-left: 10px;
  }     
    .signup-form a{
    color: #fff;
    text-decoration: underline;
  }
    .signup-form a:hover{
    text-decoration: none;
  }
  .signup-form form a{
    color: #5cb85c;
    text-decoration: none;
  } 
  .signup-form form a:hover{
    text-decoration: underline;
  }  
</style>
</head>
<body>
<div class="signup-form">
    <form action="view.php" method="post">
    <h2>UPDATE FORM</h2>
    <?php 
      if(isset($_REQUEST['id'])){
  $id=$_GET['id'];
  $sql=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
  $rows=mysqli_fetch_array($sql);   

?>
        <div class="form-group">
              <div class="row">
                <div class="col-xs-6"><input type="text" class="form-control" name="first_name"  value="<?php echo $rows['first_name']?>"></div>
                <div class="col-xs-6"><input type="text" class="form-control" name="last_name"  value="<?php echo $rows['last_name']?>"></div>
              </div> 
              <div class="row">
                <div class="col-xs-6"><input type="number" class="form-control" name="phone" value="<?php echo $rows['phone']?>"></div>
                 <div class="col-xs-6"><input type="number" class="form-control" name="idnumber"  value="<?php echo $rows['idnumber']?>"></div>
              </div> 
              <div class="row col-lg-12">
                <label for="gender"></label>
                  <select name="gender" id="gender" class="form-control"  style="margin-left: 15px;height: 40px;"  value="<?php echo "$department"?>">
                 
                    <option><?php echo $rows['gender']?></option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
              </div><br><br> 
              <div class="row col-lg-12">
                <label for="department"></label>
                  <select name="department" id="department" class="form-control"  style="margin-left: 15px;height: 40px;"  value="<?php echo "$department"?>">
                 
                    <option><?php echo $rows['department']?></option>
                    <option>House keeping</option>
                    <option>Marketing</option>
                    <option>Store Keeping</option>
                    <option>Ict</option>
                    <option>Waiters</option>
                    <option>Kitchen</option>
                  </select>
              </div><br><br> 
              <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $rows['email']?>">
        </div>
    <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $rows['password']?>">
    </div>      
       
    <div class="form-group">
            
            <input type="submit" name="update" id="update" class="form-submit btn btn-success btn-lg btn-block" value=" update"/>
    </div>
        </div>
<?php } ?>
        
    </form>
</div>
</body>
</php>                            