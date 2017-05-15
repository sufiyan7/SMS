<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="">
  	<meta name="author" content="">

    <title>Home | Student Management System</title>
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
  <a href="admin.php" class="btn btn-info" style="float:right">Admin Login</a>
</div>

  <div class="container info">

    <div class="row">
      <form class="" action="" method="post">
        <table class="table table-bordered" style="width:50%;" align="center">
         <tbody>
           <tr>
             <td colspan="2"><h4 align="center">Student Information</h4></td>
           </tr>
           <tr>
             <td>Select Standard</td>
             <td>
               <select class="standard" name="standard">
                 <option value="1">1st</option>
                 <option value="2">2nd</option>
                 <option value="3">3rd</option>
                 <option value="4">4th</option>
                 <option value="5">5th</option>
               </select>
             </td>
           </tr>
           <tr>
             <td>Enter the Roll No</td>
             <td><input type="text" name="roll" placeholder="Enter Roll No"></td>
           </tr>
           <tr>
             <td></td>
             <td><a href="#" class="btn btn-primary">Submit</a></td>
           </tr>
         </tbody>
       </table>
      </form>
    </div>
  </div>




        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
