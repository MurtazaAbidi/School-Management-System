
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
		<a href="../details/student.php" ><div class="Options" ><div class= "act">Students</div></div></a>
		<a href="../details/teacher.php"><div class="Options"><div>Teachers</div></div></a>
		<a href="../details/subject.php"><div class="Options"><div>Subjects</div></div></a>
		<a href="../details/Class.php"><div class="Options"><div>Classes</div></div></a>
		<a href="../details/attendance.php"><div class="Options"><div>Attendance</div></div></a>
	</div>

	<div class= "right">
	<a href="StudentOperations/insertstudent.php">		
			<div class="sidebtn">
				+ Add Student
			</div>
		</a>
	</div >
		<?php
			include ('../../connection.php');


			$today = date("Y-m-d");
			
			$selectquery = "select * from student_info";

			$query = mysqli_query($conn, $selectquery);

			$nums = mysqli_num_rows($query);

		?>
	<div class="top">
		Total Students = <?php 
                            if ($nums> 0){
                            echo " $nums";
                            ?> 
	</div>
	<div>
		<table class= "table">
			<thead>
				<tr>
					<th>Student_id</th>
					<th>Name</th>
					<th>Father Name</th>
					<th>Phone no</th>
					<th>Email Address</th>
					<th>Age</th>
					<th>Class</th>
					<th colspan = "2">Operations</th>
				</tr>
			</thead>
			<?php
                            }else{
                                echo " List is Empty"; 
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
			<td><?php echo $res['Father_Name']; ?></td>
			<td><?php echo $res['phone_no']; ?></td>
			<td><?php echo $res['email_address']; ?></td>
			<td><?php  
				$age = date_diff(date_create($res['date_of_birth']), date_create($today));
			 echo $age->format('%y'); ?></td>
			<td><?php echo $res['Class_id']; ?></td>
			<td><a href="StudentOperations/updatestudent.php?sid=<?php echo $res['id']; ?>& name=<?php echo $res['Name']; ?>& fname=<?php echo $res['Father_Name']; ?>& pno=<?php echo $res['phone_no']; ?>& email=<?php echo $res['email_address']; ?>& dob=<?php echo $res['date_of_birth']?>& clas=<?php echo $res['Class_id']; ?>"><div class="subbtn">edit</div></a></td>
			<td><a href="StudentOperations/deletestudent.php?sid=<?php echo $res['id']; ?>& sclass=<?php echo $res['Class_id'];?>" onclick="return confirmdelete()"><div class="subbtn">delete</div></a></td>
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


