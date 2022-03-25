<?php 
include('../connection.php');
$email= $_REQUEST['email'];
$selectID = mysqli_query($conn, "select * from student_info where email_address = '$email'");
$std = mysqli_fetch_assoc($selectID);
$student_id = $std['id'];

$present = mysqli_query($conn, "select count(status) from attendance where student_id = '$student_id' and status = 'P'");
$total = mysqli_query($conn, "select count(status) from attendance where student_id = '$student_id'");
$pres = mysqli_fetch_assoc($present);
$tot = mysqli_fetch_assoc($total);


$selectquery = "select * from attendance where student_id = '$student_id' ";
$query = mysqli_query ($conn, $selectquery);
$nums = mysqli_num_rows($query);
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
            <a href="classinfo.php?email=<?php echo $email;?>">Class_info</a>
			</li>
			<li>
				<a href="attendance.php?email=<?php echo $email;?>" class="active">Attendance</a>
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

    <div class="top">
        <br><br>
		Attendence Percentage = <?php
        if ($tot["count(status)"]>0){   
            $Att = ($pres["count(status)"] *100)/$tot["count(status)"];
            printf("%d", $Att);
        }else{
            echo "100";
        }
        echo "%";
        ?> 
	</div>
	<div>
		<table class= "table">
			<thead>
				<tr>
					<th>Date (YYYY-MM-DD)</th>
					<th>Status</th>
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
		</tr>

		<?php
			}
			?>

			</tbody>  
	</table>
</div>
	<script src="app.js"></script>
</body>
</html>


