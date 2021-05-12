<?php
        include 'conn.php';
        $id=$_GET['rn'];
        ?>
        <?php
        $sql = "SELECT * from student where rollno=".$id."";
        $result=mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_assoc($result))
        {
            $name=$rows['name'];
            $attendance=$rows['attendance'];
            $progress=$rows['progress'];
        }


?>
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
	</div>
    <div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
            <h3><?php echo $name?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">ROLL NO.</strong><?php echo $id?></p>
            <p class="mb-0"><strong class="pr-1">Class:</strong>10th</p>
            <p class="mb-0"><strong class="pr-1">Section:</strong>B</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <label>Attendance <?php echo $attendance?>%</label>
            <div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: <?php echo $attendance?>%" aria-valuenow=<?php echo $attendance ?> aria-valuemin="0" aria-valuemax="100"></div>
</div>
<label>progress <?php echo $progress?>%</label>
<div class="progress">
   <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php echo $progress?>%" aria-valuenow=<?php echo $progress ?> aria-valuemin="0" aria-valuemax="100"></div>
</div>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
 <a href='teacher.php'> <button type="submit" class="btn btn-danger m-3">Close profile</button></a>
</div>