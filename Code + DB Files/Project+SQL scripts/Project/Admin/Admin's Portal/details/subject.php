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
		<a href="../details/subject.php"><div class="Options"><div class= "act">Subjects</div></div></a>
		<a href="../details/Class.php"><div class="Options"><div>Classes</div></div></a>
		<a href="../details/attendance.php"><div class="Options"><div>Attendance</div></div></a>
	</div>

	<div class= "right">
	<a href="SubjectOperations/insertsubject.php">	
			<div class="sidebtn">
				+ Add Subject
			</div>
		</a>
	</div >
		<?php
			include ('../../connection.php');
			
			$selectquery = "select * from subject";

			$query = mysqli_query($conn, $selectquery);

			$nums = mysqli_num_rows($query);

		?>
	<div class="top">
		Total Subjects = <?php 
                            if ($nums> 0){
                            echo " $nums";
                            ?> 
	</div>
	<div>
		<table class= "table">
			<thead>
				<tr>
                    <th>Subject ID</th>
                    <th>Subject Name</th>
                    <th>Type</th>
					<th colspan = "2">Operations</th>
				</tr>
			</thead>
				<?php
                            }else{
                                echo " List is Empty"; 
                            }
                            ?>

		<tbody>
		-	<?php
			// $res = mysqli_fetch_array($query);

			while ($res = mysqli_fetch_array($query) ){
			?>
			
			<tr>

			<td><?php echo $res['subject_id']; ?></td>
			<td><?php echo $res['subject_name']; ?></td>
			<td><?php echo $res['type']; ?></td>

			<td><a href="SubjectOperations/updatesubject.php?sid=<?php echo $res['subject_id']; ?>& sname=<?php echo $res['subject_name']; ?>& type=<?php echo $res['type']; ?>"><div class="subbtn">edit</div></a></td>
			<td><a href="SubjectOperations/deletesubject.php?sid=<?php echo $res['subject_id']; ?>" onclick="return confirmdelete()"><div class="subbtn">delete</div></a></td>
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


