
<?php
    include('../connection.php');
    $sid= $_GET['sid'];
    $date= $_GET['date'];
    $status= $_GET['status'];
    $email= $_GET['email'];
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tez Learner Public School</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="navstyle.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<nav>
		<div class="logo">
			<h4><a href="teacherhome.php?email=<?php echo $email;?>">Tez Learner Public School</a></h4>
		</div>
		<ul class= "nav-links">
			<li>
				<a href="teacherhome.php?email=<?php echo $email;?>">Home</a>
			</li>
			<li>
				<a href="subjectinfo.php?email=<?php echo $email;?>">Subject_info</a>
			</li>
			<li>
				<a href="attendance.php?email=<?php echo $email;?>" class="active">Attendance</a>
			</li>
			<li>
				<a href="changepassword.php?email=<?php echo $email;?>">Change_password</a>
			</li>
			
			<!-- <li>
				<a href="#">Attendance</a>
			</li>
			<li>
				<a href="#">Fee_Challan</a>
			</li> -->
			<li>
				<a href="../teacherlogin.php">LogOut</a>
			</li>
		</ul>
		<div class="burger">
			<div class= "line1"></div>
			<div class= "line2"></div>
			<div class= "line3"></div>
		</div>
	</nav>

    <div class="container">
        <div class= "formHeading">
        <b>(Update Attendance) <br> Student_id="<?php echo $sid; ?>" and Date= "<?php echo $date?>"</b></div>
        <form action="#" method = "post">
    <div>
        <label for="status">Status:</label>
        <select name="status" value="<?php echo $status;?>" id="status" class="select">
            <option value="P">Present</option>
            <option value="A">Absent</option>
        </select>
    </div>
    
    <div>
        <input type="submit" name = "submit" value="Update" class= "btn">
    </div>
</div>
<script src="app.js"></script>
<div class=output>
    <?php
    
    if(isset($_POST['submit'])){

    $status=$_POST['status']; 

    $sql = "Update attendance set status='$status' where student_id = '$sid' and date = '$date'";
    if (mysqli_query($conn, $sql)){
        echo"record Updated sucessfully!";?>
        <script>alert("record Updated successfully!")</script>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Teacher/Teacher's%20Portal/attendanceshow.php?sid=<?php echo $sid;?>&email=<?php echo $email;?>">
        <?php
    }else{
        echo "Error Occur during Updating record!";
        mysqli_connect_error();
    }
}

?>

</div>
</body>
</html>
