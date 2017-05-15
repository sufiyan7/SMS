<?php
session_start();

if(isset($_SESSION['uid'])){
  header('location:admin/admin_dash.php');
}
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="">
  	<meta name="author" content="">

    <title>Admin | Student Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>


    <div class="panel panel-default">
      <div class="panel-body">
        <h1 align="center">Student Management System</h1>
      </div>
    </div>

    <div class="container">
      <a href="index.php" class="btn btn-default" style="float:left">Back</a>
    </div>

    <div class="container">
  	<div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title text-center">Admin Login</h3>
                  </div>
                  <div class="panel-body">
                      <form action="admin.php" method="post">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="password" type="password" value="">
                              </div>
                              <!-- Change this to a button or input when using this as a form -->
                              <button type="submit" class="btn btn-success btn-block" name="login">Login</button>
                              <!-- <p>New Member? <a href="signUp.html" class="">Sign up</a></p> -->
                          </fieldset>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>




<?php

include('dbconfig.php');

if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

  $run = mysqli_query($conn,$query);


  $no_row = mysqli_num_rows($run);

  if($no_row < 1)
  {

?>

<script type="text/javascript">
  alert("Username and Password does not match");
  window.open('admin.php','_self');
</script>

<?php
  }else{

    $data = mysqli_fetch_assoc($run);

    $id = $data['id'];

    session_start();

    $_SESSION['uid'] = $id;

    header('location:admin/admin_dash.php');

  }
}



?>






        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
