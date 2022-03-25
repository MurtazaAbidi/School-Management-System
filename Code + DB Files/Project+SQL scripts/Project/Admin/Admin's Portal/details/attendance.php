
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tez Learner Public School</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="../navstyle.css">
	<link rel="stylesheet" href="adminOperations.css">
	<!-- <link rel="stylesheet" href="table.css"> -->
</head>

<body>
	<nav>
		<div class="logo">
			<h4><a href="../adminhome.php">Tez Learner Public School</a></h4>
		</div>
		<ul class= "nav-links">
			<li>
				<a href="../adminhome.php">HOME</a>
			</li>
			<li>
				<a href="../../admin.php">LogOut</a>
			</li>
		</ul>
		<div class="burger">
			<div class= "line1"></div>
			<div class= "line2"></div>
			<div class= "line3"></div>
		</div>
	</nav>

	<div class="boundary">	
		<a href="../details/student.php" ><div class="Options" ><div>Students</div></div></a>
		<a href="../details/teacher.php"><div class="Options"><div>Teachers</div></div></a>
		<a href="../details/subject.php"><div class="Options"><div>Subjects</div></div></a>
		<a href="../details/Class.php"><div class="Options"><div>Classes</div></div></a>
		<a href="../details/attendance.php"><div class="Options"><div class="act">Attendance</div></div></a>
	</div>

	<div class= "right">
	<a href="AttendanceOperations/inputclass.php">		
			<div class="sidebtn">
				+ Mark Attendance
			</div>
		</a>
	</div >
		<?php
			include ('../../connection.php');

			$selectquery = "select * from student_info";
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
			<td><a href="AttendanceOperations/attendanceshow.php?sid=<?php echo $res['id']; ?>"><div class="subbtn">show Attendance</div></a></td>
		</tr>

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


