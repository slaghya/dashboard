

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>dashboard</title>
    <link rel="stylesheet" href="style.css"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body style="background-color: rgb(70,130,180);">
	<div class= "bg-dark ">
		<h1 class="m-5 p-5 text-white"> Teachers's dashboard</h1>
	</div
		<?php
		include 'conn.php';

		$sql="select*from student";
		$result=mysqli_query($conn,$sql);
		echo '<div class="container"><table class="table table-light table-hover table-bordered  m-5 ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Attendance </th>
      <th scope="col">progress</th>
      <th scope="col">edit</th>
    </tr>
  </thead>';
		while($rows=mysqli_fetch_assoc($result))
		{
			echo "<tbody>
    <tr>
      <td>".$rows['name']."</td>
      <td>".$rows['rollno']."</td>
      <td>".$rows['attendance']."%</td>
      <td>".$rows['progress']."%</td>
      <td><a href='edit.php?rn=".$rows['rollno']."'><button class='btn btn-success'>EDIT</button></a>
      <a href='profile.php?rn=".$rows['rollno']."'><button class='btn btn-danger'>profile</button></a>
      </td>
    </tr>
    ";
		}	




?>
