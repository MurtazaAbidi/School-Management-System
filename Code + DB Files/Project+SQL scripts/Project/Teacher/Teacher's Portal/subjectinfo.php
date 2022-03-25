<?php
		include('../connection.php');
		$email= $_GET['email'];
		$quer = "select * from teacher_info t join subject s on t.subject_id = s.subject_id where t.email_address = '$email'"; 
		$query = mysqli_query($conn, $quer);
		$res = mysqli_fetch_array ($query);

        $classquery = "select * from teacher_info t join class_info c on c.class_teacher = t.teacher_id where t.email_address = '$email'";
        $cl = mysqli_query($conn, $classquery);
        $clas= mysqli_fetch_array ($cl);
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
				<a href="subjectinfo.php?email=<?php echo $email;?>" class="active">Subject_info</a>
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


	<div class="heading">
		Subject's Details
	</div>

		<div class = "teacherdetails" >Subject ID : <b>"<?php echo $res['subject_id'];?>"</b></div>
		<div class = "teacherdetails" >Subject Name: <b><?php echo $res['subject_name'];?></b></div>
		<div class = "teacherdetails" >Subject Type: <b><?php echo $res['type'];?></b></div>
        

		<div class = "teacherdetails" >    
        <?php
            $num = mysqli_num_rows($cl);
            if ($num == 1){
        ?>
        Class Teacher: 
            <div class = "teacherdetails" ><b> Class "<?php echo $clas['class_id']."\"";?></b></div>
            <div class = "teacherdetails" ><b> No. of Students: "<?php echo $clas['students']."\"";?></b></div>
        <?php 
        }else{
            echo "Not a Class Teacher";
        }
        ?>
        </div>
        
        
        
        
        <script src="app.js"></script>
        </body>
        </html>
        
        