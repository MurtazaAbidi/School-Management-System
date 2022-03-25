	<?php
		include('../connection.php');
		$email= $_GET['email'];
		$quer = "select * from student_info where email_address='$email'";
		$query = mysqli_query($conn, $quer);
		$res = mysqli_fetch_array ($query);
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
			<h4><a href="studenthome.php?email=<?php echo $email;?>">Tez Learner Public School</a></h4>
		</div>
		<ul class= "nav-links">
			<li>
				<a href="studenthome.php?email=<?php echo $email;?>" class="active">Home</a>
			</li>
			<li>
				<a href="classinfo.php?email=<?php echo $email;?>">Class_info</a>
			</li>
			<li>
				<a href="attendance.php?email=<?php echo $email;?>">Attendance</a>
			</li>
			
			<!-- <li>
				<a href="#">Attendance</a>
			</li>
			<li>
				<a href="#">Fee_Challan</a>
			</li> -->
			<li>
				<a href="../student.php">LogOut</a>
			</li>
		</ul>
		<div class="burger">
			<div class= "line1"></div>
			<div class= "line2"></div>
			<div class= "line3"></div>
		</div>
	</nav>
<!--
	<div style="border: 2px solid red;
				padding: 200px;
				display: inline-block;
				align-items: center;
				position: absolute;
				margin:auto;
				left:20%;
				top:20%;"
				>
		Student Details
	</div>
-->
	<div class="heading">
		Student's Details
	</div>

		<div class = "studentdetails" >Student's ID: <b><?php echo $res['id'];?></b></div>
		<div class = "studentdetails" >Student's Name: <b><?php echo $res['Name'];?></b></div>
		<div class = "studentdetails" >Student's Father Name: <b><?php echo $res['Father_Name'];?></b></div>
		<div class = "studentdetails" >Phone Number: <b><?php echo $res['phone_no'];?></b></div>
		<div class = "studentdetails" >Email Address: <b><?php echo $res['email_address'];?></b></div>
		<div class = "studentdetails" >Age: <b><?php 
		$today = date("Y-m-d");
		$age = date_diff(date_create($res['date_of_birth']), date_create($today));
		echo $age->format('%y');
		?></b></div>
		<div class = "studentdetails" >Class: <b>"<?php echo $res['Class_id'];?> Class"</b></div>



	<script src="app.js"></script>
</body>
</html>