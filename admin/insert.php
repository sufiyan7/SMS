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
    <title>Add Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">


  </head>
  <body>
    <div class="panel panel-default">
      <div class="panel-body">
        <h1 align="center">Student Management System</h1>
        <h4 align="center">Welcome to Dashboard</h4>
      </div>
    </div>


<div class="container">
  <form class="form-horizontal" action="insert.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-md-4" for="text">Full Name:</label>
        <div class="col-md-6">
          <input type="text" class="form-control" name="name" placeholder="Enter Full Name" required>
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-4" for="text">City:</label>
        <div class="col-md-6">
          <input type="text" class="form-control" name="city" placeholder="Enter City" required>
        </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-4" for="text">Parents Contact:</label>
        <div class="col-md-6">
          <input type="text" class="form-control" name="contact" placeholder="Enter Contact" required>
        </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-4" for="text">Roll No:</label>
        <div class="col-md-6">
          <input type="text" class="form-control" name="roll" placeholder="Enter Roll No" required>
        </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-4" for="text">Standard:</label>
        <div class="col-md-6">
          <select class="standard" name="standard" required>
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
            <option value="4">4th</option>
            <option value="5">5th</option>
          </select>
        </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-4" for="text">Image:</label>
        <div class="col-md-6">
          <input type="file" class="form-control" name="image">
        </div>
    </div>


    <div class="form-group">
      <div class="col-md-offset-4">
        <input type="submit" class="btn btn-info btn-lg" value="Submit" name="submit">
      </div>

    </div>


  </form>
</div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>


<?php

if(isset($_POST["submit"])){
  include('../dbconfig.php');

  $name = $_POST["name"];
  $city = $_POST["city"];
  $contact = $_POST["contact"];
  $roll = $_POST["roll"];
  $stn = $_POST["standard"];

  $imagename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];

  move_uploaded_file($tempname,"../dataimage/$imagename");


  $query = "INSERT INTO student (name, city, pcontact,roll, standard, image) VALUES ('$name','$city','$contact','$roll','$stn','$imagename')";

  $run = mysqli_query($conn,$query);

  if($run == true){
    ?>
    <script type="text/javascript">
      alert("Student Information Inserted");
    </script>
    <?php
  }



}

 ?>
