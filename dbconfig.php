<?php
$host="localhost";
$user="root";
$pass="Unico@1989";
$dbname="db_sms";

$conn=mysqli_connect($host,$user,$pass,$dbname);

if($conn == false)
{
  echo "Connection not ok";
}
 ?>
