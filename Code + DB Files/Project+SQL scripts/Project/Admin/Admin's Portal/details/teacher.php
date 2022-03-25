<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tez Learner Public School</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="../navstyle.css">
	<link rel="stylesheet" href="adminOperations.css">
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
		<a href="../details/teacher.php"><div class="Options"><div class= "act">Teachers</div></div></a>
		<a href="../details/subject.php"><div class="Options"><div>Subjects</div></div></a>
		<a href="../details/Class.php"><div class="Options"><div>Classes</div></div></a>
		<a href="../details/attendance.php"><div class="Options"><div>Attendance</div></div></a>
	</div>

	<div class= "right">
	<a href="TeacherOperations/insertteacher.php">	
			<div class="sidebtn">
				+ Add Teacher
			</div>
		</a>
	</div >
		<?php
			include ('../../connection.php');


			$today = date("Y-m-d");
			
			$selectquery = "select * from teacher_info";

			$query = mysqli_query($conn, $selectquery);

			$nums = mysqli_num_rows($query);

		?>
	<div class="top">
		Total Teacher = <?php 
                            if ($nums> 0){
                            echo " $nums";
                            ?> 
	</div>
	<div>
		<table class= "table">
			<thead>
				<tr>
					<th>Teacher_id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone no</th>
					<th>Age</th>
					<th>Subject</th>
					<th>Salary</th>
					<th>Password</th>
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

			<td><?php echo $res['teacher_id']; ?></td>
			<td><?php echo $res['Name']; ?></td>
			<td><?php echo $res['email_address']; ?></td>
			<td><?php echo $res['phone_no']; ?></td>
			<td><?php  
				$age = date_diff(date_create($res['date_of_birth']), date_create($today));
				echo $age->format('%y'); ?></td>
				<td><?php 
				$temp= $res['subject_id'];
				$fetchSubjectName = "select * from subject where subject_id = '$temp'";
				$subjectName = mysqli_query($conn, $fetchSubjectName);
				$data= mysqli_fetch_array($subjectName);
				
				echo $data['subject_name']." (".$data['type'].")";
				
				
				
				?></td>
			<td>Rs.<?php echo $res['salary']; ?>/=</td>
			<td>
			<div class="hidepass"><?php echo $res['password']; ?></div>
			<a href="TeacherOperations/passwordgenerator.php?tid=<?php echo $res['teacher_id']; ?>">Generate Other Password</a></td>
			
			<td><a href="TeacherOperations/updateteacher.php?tid=<?php echo $res['teacher_id']; ?>& name=<?php echo $res['Name']; ?>& email=<?php echo $res['email_address']; ?>& pno=<?php echo $res['phone_no']; ?>& dob=<?php echo $res['date_of_birth']?>& salary=<?php echo $res['salary']; ?>"><div class="subbtn">edit</div></a></td>
			<td><a href="TeacherOperations/deleteteacher.php?tid=<?php echo $res['teacher_id']; ?>" onclick="return confirmdelete()"><div class="subbtn">delete</div></a></td>
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


