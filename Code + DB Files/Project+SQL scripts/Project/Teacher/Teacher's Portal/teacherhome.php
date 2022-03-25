<?php
		include('../connection.php');
		$email= $_GET['email'];
		$quer = "select * from teacher_info where email_address='$email'";
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
			<h4><a href="teacherhome.php?email=<?php echo $email;?>">Tez Learner Public School</a></h4>
		</div>
		<ul class= "nav-links">
			<li>
				<a href="teacherhome.php?email=<?php echo $email;?>" class="active	">Home</a>
			</li>
			<li>
				<a href="subjectinfo.php?email=<?php echo $email;?>">Subject_info</a>
			</li>
			<li>
				<a href="Attendance.php?email=<?php echo $email;?>">Attendance</a>
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
		Teacher Details
	</div>
-->
	<div class="heading">
		Teacher's Details
	</div>

		<div class = "teacherdetails" >Teacher's ID: <b><?php echo $res['teacher_id'];?></b></div>
		<div class = "teacherdetails" >Teacher's Name: <b><?php echo $res['Name'];?></b></div>
		<div class = "teacherdetails" >Email_Address: <b><?php echo $res['email_address'];?></b></div>
		<div class = "teacherdetails" >Salary: <b>Rs.<?php echo $res['salary'];?></b>/=</div>
		<div class = "teacherdetails" >Phone Number: <b><?php echo $res['phone_no'];?></b></div>
		<div class = "teacherdetails" >Age: <b><?php 
		$today = date("Y-m-d");
		$age = date_diff(date_create($res['date_of_birth']), date_create($today));
		echo $age->format('%y');
		?></b></div>
		<div class = "teacherdetails" >Subject_id: <b><?php echo $res['subject_id'];?></b></div>

	<script src="app.js"></script>
</body>
</html>