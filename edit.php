<?php
        include 'conn.php';
        $id=$_GET['rn'];
        ?>
        <?php
        if(Isset($_POST['update']))
        {
            $attendance=$_POST['attendance'];
            $progress=$_POST['progress'];
$sql="update student SET attendance=".$attendance." where rollno=".$id."";
    if (mysqli_query($conn, $sql)) 
    {
 echo "";
} else {
 echo "Error updating record: " . mysqli_error($conn);
}

 $sql="update student SET progress=".$progress." where rollno=".$id."";
    if (mysqli_query($conn, $sql)) {
 echo "<script>
 {
    alert('updated successfully')
}
</script>";
} else {
 echo "Error updating record: " . mysqli_error($conn);
}
}

            
        ?>
<html>
<head>
    <meta charset='utf-8'/>
    <title>dashboard</title>
    <link rel='stylesheet' href='style.css'/>
     <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z'crossorigin='anonymous'>
</head>
<body style='background-color: rgb(70,130,180);'>
	<div class= 'bg-dark '>
		<h1 class='m-5 p-5 text-white'> Teachers's dashboard</h1>
	</div>
    <div class='container'>
         <div class="box">
        <form  action=" " method="POST">
        <input  type='text' id='defaultLoginFormEmail' class='form-control mb-4' placeholder='Attendance' name='attendance' required>
    <input type='text' id='defaultLoginFormPassword' class='form-control mb-4' placeholder='progress' name='progress' required>
<button class="btn btn-success" type="submit" name="update" value="update">Update</button>
</form>
<a href="teacher.php"><button class="btn btn-danger" type="submit" name="cancel" value="cancel">cancel</button></a>
   </form>





	


