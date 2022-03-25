    <?php
		include('../connection.php');
		$email= $_GET['email'];
		$quer = "select * from student_info s join class_info c on s.class_id= c.class_id join teacher_info t on t.teacher_id = c.class_teacher join class_subjects cs on cs.class_id= c.class_id where s.email_address='$email'";
        $subjectquery= "select * from student_info s join class_subjects c on s.class_id = c.class_id join subject on subject.subject_id = c.subject_id where s.email_address='$email'";

		$query = mysqli_query($conn, $quer);
		$res = mysqli_fetch_array ($query);

        $sub = mysqli_query($conn, $subjectquery);
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
            <a href="studenthome.php?email=<?php echo $email;?>">Home</a>
			</li>
			<li>
            <a href="classinfo.php?email=<?php echo $email;?>" class= "active">Class_info</a>
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


	<div class="heading">
		Class's Details
	</div>

		<div class = "studentdetails" >Class : <b>"<?php echo $res['Class_id'];?>"</b></div>
		<div class = "studentdetails" >Class Teacher: <b><?php echo $res['Name'];?></b></div>
		<div class = "studentdetails" >Subjects List (Enrolled in): 
            <?php
            while ($subjects = mysqli_fetch_array($sub)){?>
            
            <div class = "studentdetails" ><b><?php echo $subjects['subject_name']." (".$subjects['type'].")";?></b></div>
            <?php
        }
        ?>
        
        
        </div>
        
        
        
        
        <script src="app.js"></script>
        </body>
        </html>
        
        