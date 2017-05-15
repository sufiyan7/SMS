<?php
session_start();

if(isset($_SESSION['uid']))
{
  echo "";
}
else{
  header('location:../admin.php');
}
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


  </head>
  <body>
    <div class="panel panel-default">
      <div class="panel-body">
        <h1 align="center">Student Management System</h1>
        <h4 align="center">Welcome to Dashboard</h4>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <a href="insert.php" class="btn btn-info btn-block">Insert</a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <a href="update.php" class="btn btn-info btn-block">Update</a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <a href="delete.php" class="btn btn-info btn-block">Delete</a>
        </div>
      </div>
    </div>




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
