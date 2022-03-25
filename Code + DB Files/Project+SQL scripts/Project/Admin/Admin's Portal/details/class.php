
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
		<a href="../details/Class.php"><div class="Options"><div class= "act">Classes</div></div></a>
		<a href="../details/attendance.php"><div class="Options"><div>Attendance</div></div></a>
	</div>

	<div class= "right">
	<a href="ClassOperations/insertclass.php">		
			<div class="sidebtn">
				+ Add Class
			</div>
		</a>
	</div >
		<?php
			include ('../../connection.php');
            
			$today = date("Y-m-d");
			
			$selectquery = "select * from class_info";

			$query = mysqli_query($conn, $selectquery);

			$nums = mysqli_num_rows($query);

		?>
	<div class="top">
		Total Classes = <?php 
                            if ($nums> 0){
                            echo " $nums";
                            ?> 
	</div>
	<div>
		<table class= "table">
			<thead>
				<tr>
					<th>Class</th>
                    <th>Class Teacher's ID</th>
                    <th>Class Teacher's Name</th>
					<th>Number of Students</th>
					<th>Further Details</th>
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
                <?php
                    $temp = $res['class_teacher'];
                    $classteachername="select * from teacher_info where teacher_id = '$temp'";
                    $getname= mysqli_query($conn, $classteachername);
                    $value = mysqli_fetch_array($getname);
                ?>
			<td>Class "<?php echo $res['class_id']; ?>"</td>
			<td><?php echo $res['class_teacher']; ?></td>
            <td><?php echo $value['Name']; ?></td>
			<td><?php echo $res['students']; ?></td>
			<td><a href="ClassOperations/showdetails.php?cid=<?php echo $res['class_id']; ?>"><div class="subbtn">Click Here</div></a></td>
			<td><a href="ClassOperations/updateclass.php?cid=<?php echo $res['class_id']; ?>& teacher=<?php echo $res['class_teacher']; ?>"><div class="subbtn">edit</div></a></td>
			<td><a href="ClassOperations/deleteclass.php?cid=<?php echo $res['class_id']; ?>" onclick="return confirmdelete()"><div class="subbtn">delete</div></a></td>
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


