
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tez Learner Public School</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="../../navstyle.css">
	<link rel="stylesheet" href="../adminOperations.css">
</head>

<body>
	<nav>
		<div class="logo">
			<h4><a href="../../adminhome.php">Tez Learner Public School</a></h4>
		</div>
		<ul class= "nav-links">
			<li>
				<a href="../../adminhome.php">HOME</a>
			</li>
			<li>
				<a href="../../../admin.php">LogOut</a>
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
		<a href="../details/Class.php"><div class="Options"><div class= "act">Classes</div></div></a>
		<a href="../details/attendance.php"><div class="Options"><div>Attendance</div></div></a>
	</div>

		<?php
			include ('../../../connection.php');
			$cid= $_GET['cid'];
			
			$subjects = "select * from class_subjects where class_id = '$cid'";
			$subject = mysqli_query($conn, $subjects );
			$subjectcount = mysqli_num_rows($subject);

			$students = "select * from student_info where class_id = '$cid'";
			$student = mysqli_query($conn, $students);
			$studentcount = mysqli_num_rows($student);
			?>

<div class= "right">
	<a href="classsubjectOperations/insertsubject.php?cid=<?php echo $cid;?>">		
		<div class="sidebtn">
			+ Add a Subject to "Class<?php echo $cid; ?>"
		</div>
	</a>
</div >
<div class="top">
	Class "<?php echo $cid; ?>"
	</div>
	
	<div class="subheading">
		(No. of Subjects = <?php 
	if ($subjectcount> 0){
		echo " $subjectcount";
	}else{
		echo " List is Empty";
	}
	?>)
	</div>
	
	<div class="subheading">
		(No. of Students = <?php 
	if ($studentcount> 0){
		echo " $studentcount";
	}else{
		echo " List is Empty";
	}
		?>)
	</div>
	
	<div class = "boundary1">
		<div class="subtable">
			<table class= "table1" >
			<thead>
				<tr>
					<th>Subject_Names</th>
					<th>Operation</th>
				</tr>
			</thead>
			
			
			<tbody>
				<?php
	// $res = mysqli_fetch_array($query);
	
	while ($res = mysqli_fetch_array($subject) ){
		?>
	
	<tr>
		<td><?php
			$temp = $res['subject_id'];
			$query = "select * from subject where subject_id = '$temp'";
			$quer = mysqli_query($conn, $query);
			$val = mysqli_fetch_array($quer);
			echo $val['subject_name']." (".$val['type'].")";
			?></td>
			<td><a href="classsubjectOperations/deletesubject.php?cid=<?php echo $cid;?> & sid=<?php echo $temp;?>" onclick="return confirmdelete()"><div class="subbtn">delete</div></a></td>
</tr>

<?php
	}
	?>

</tbody>  
</table>
</div>
<div class="subtable">
<table class= "table1">
	<thead>
		<tr>
			<th>Student_id</th>
			<th>Stduent_Name</th>
		</tr>
	</thead>
						
		<tbody>
			<?php
			while ($res = mysqli_fetch_array($student) ){
			?>	
			<tr>
				<td><?php echo $res['id']; ?></td>
			<td><?php echo $res['Name']; ?></td>
		</tr>
		<?php
			}
			?>
			</tbody> 
			
		</table>
		</div>
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


