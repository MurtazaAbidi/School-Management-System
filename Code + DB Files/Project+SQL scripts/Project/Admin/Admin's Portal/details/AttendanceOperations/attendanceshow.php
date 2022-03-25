
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tez Learner Public School</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="../../navstyle.css">
	<link rel="stylesheet" href="../adminOperations.css">
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
		<a href="../../details/student.php" ><div class="Options" ><div>Students</div></div></a>
		<a href="../../details/teacher.php"><div class="Options"><div>Teachers</div></div></a>
		<a href="../../details/subject.php"><div class="Options"><div>Subjects</div></div></a>
		<a href="../../details/Class.php"><div class="Options"><div>Classes</div></div></a>
		<a href="../../details/attendance.php"><div class="Options"><div class="act">Attendance</div></div></a>
	</div>
		<?php
			include ('../../../connection.php');
            $sid=$_REQUEST['sid'];
			$selectquery = "select * from attendance where student_id = '$sid'";
			$query = mysqli_query($conn, $selectquery);
         
			$nums = mysqli_num_rows($query);

		?>
	<div class= "right">
	<a href="studentattendance.php?sid=<?php echo $sid;?>">		
			<div class="sidebtn">
				+Add Individual Attendence
			</div>
		</a>
	</div >
	<div class="top">
		Attendence of Student_id = <?php echo $sid;?> 
	</div>
	<div>
		<table class= "table">
			<thead>
				<tr>
					<th>Date (YYYY-MM-DD)</th>
					<th>Status</th>
					<th colspan = "2">Operations</th>
				</tr>
			</thead>
		<tbody>
			<?php
			// $res = mysqli_fetch_array($query);

			while ($res = mysqli_fetch_array($query) ){
			?>
			
			<tr>

			<td><?php echo $res['date']; ?></td>
			<td><?php 
                if ($res['status']=='P')
                echo "Present";
                else if ($res['status']=='A')
                echo "Absent";
            ?></td>
			<td><a href="updateattendance.php?sid=<?php echo $sid; ?>&date=<?php echo $res['date'];?>&status=<?php echo $res['status'];?>"><div class="subbtn">Edit</div></a></td>
			<td><a href="deleteattendance.php?sid=<?php echo $sid; ?>&date=<?php echo $res['date'];?>" onclick="return confirmdelete()"><div class="subbtn">Delete</div></a></td>
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


