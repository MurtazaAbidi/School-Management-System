<?php
	include ('../connection.php');
	$email= $_REQUEST['email'];
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
		<?php
			$sql= "select * from teacher_info t join class_info c on c.class_teacher=t.teacher_id where email_address= '$email'";
			$result= mysqli_query ($conn, $sql);
			if (mysqli_num_rows($result)>0){
				$res = mysqli_fetch_assoc ($result);
				$cid= $res['class_id'];
		?>

	<div class= "right">
	<a href="inputdate.php?cid=<?php echo $cid;?>&email=<?php echo $email;?>">		
			<div class="sidebtn">
				+ Mark Attendance
			</div>
		</a>
	</div >
		<?php
			$selectquery = "select * from student_info where Class_id = '$cid'";
			$query = mysqli_query($conn, $selectquery);
			$nums = mysqli_num_rows($query);
		?>
	<div class="top">
		Attendance Of Students<?php 
                            if ($nums> 0){
                                
                            ?>
	</div>
	<div>
		<table class= "table">
			<thead>
				<tr>
					<th>Student_id</th>
					<th>Name</th>
					<th>Attendance</th>
                    <th>Class</th>
					<th>Check</th>
				</tr>
			</thead>
			<?php
                            }else{
                                echo " (List is Empty)"; 
                            }
                            ?>

		<tbody>
			<?php
			// $res = mysqli_fetch_array($query);

			while ($res = mysqli_fetch_array($query) ){
			?>
			
			<tr>

			<td><?php echo $res['id']; ?></td>
			<td><?php echo $res['Name']; ?></td>
			<td><?php 
            $sid= $res['id'];
            $present = mysqli_query($conn, "select count(status) from attendance where student_id = '$sid' and status = 'P'");
            $total = mysqli_query($conn, "select count(status) from attendance where student_id = '$sid'");
            
            $pres = mysqli_fetch_assoc($present);
            $tot = mysqli_fetch_assoc($total);
            // echo $pres["count(status)"]."/".$tot["count(status)"];
            if ($tot["count(status)"]>0){   
                $Att = ($pres["count(status)"] *100)/$tot["count(status)"];
                printf("%d", $Att);
            }else{
                echo "100";
            }
            echo "%";
            ?></td>
            
			<td>Class "<?php echo $res['Class_id']; ?>"</td>
			<td><a href="attendanceshow.php?sid=<?php echo $res['id']; ?>&email=<?php echo $email;?>"><div class="subbtn">show Attendance</div></a></td>
		</tr>

		<?php
			}
		}else{?>
			<script> alert ("Only Class Teacher Can Take Attendance, Your are not a Class teacher!!!") </script>
		<?php
		}
			?>

			</tbody>  
	</table>
</div>
	<script>
		function confirmdelete()
		{
			return confirm('Are you sure to Delete this Record?');
		}
	</script>
	<script src="app.js"></script>
</body>
</html>