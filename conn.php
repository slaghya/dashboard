<?php
$localhost="localhost";
$password="";
$db="dashboard";
$user="root";
 
 $conn=mysqli_connect($localhost,$user,$password,$db);
 if (!$conn)
 {
 	 echo "Failed to connect to MySQL: " . mysqli_error();
  exit();
 }
 ?>