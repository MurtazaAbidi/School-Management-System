<?php
	include ('../connection.php');
	$email= $_REQUEST['email'];
    $sclass= $_REQUEST['sclass'];
    $date= $_REQUEST['date'];
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
    $selectquery = "select * from student_info where class_id = '$sclass'";
    $query = mysqli_query($conn, $selectquery);
			$nums = mysqli_num_rows($query);
		?>
	<div class="top">
		<br><br>
		Attendence of Class = <?php echo $sclass;?> (Date: "<?php echo $date;?>") 
	</div>
	<div>
		<table class= "table">
			<thead>
				<tr>
					<th>Student_ID</th>
                    <th>Student_Name</th>
					<th>Status</th>
				</tr>
			</thead>
		<tbody>
			<?php
			// $res = mysqli_fetch_array($query);

			while ($res = mysqli_fetch_array($query) ){
			?>
			
			<tr>

			<td><?php echo $res['id']; ?></td>
			<td><?php echo $res['Name']; ?></td>
			<td>
                <?php
                $tempid = $res['id'];
                
                $sql= mysqli_query($conn, "select * from attendance where student_id='$tempid' and date='$date'");
                $chk= mysqli_num_rows($sql);

                if ($chk==0){?>
                    <a href="present.php?sid=<?php echo $tempid; ?>&date=<?php echo $date;?>& sclass= <?php echo $sclass?>&email=<?php echo $email;?>" onclick="return confirmpresent()"><div class="subbtn" style="background-color: #35db00">Present</div></a>
                    <a href="absent.php?sid=<?php echo $tempid; ?>&date=<?php echo $date;?>& sclass= <?php echo $sclass?>&email=<?php echo $email;?>" onclick="return confirmabsent()"><div class="subbtn" style="background-color: red">Absent</div></a>
                <?php
                }else{
                    ?>
                    <div style=" color:#002dd1; font-size: 27px; font-weight:bold; ">
                        <?php
                        $val= mysqli_fetch_assoc($sql);
                        if ($val['status'] == "P"){
                            echo "Present";
                        }else{
                            echo "Absent";
                        }
                        ?>
                        </div>
                    <?php
                }
                ?>
            </td>
		</tr>

		<?php
			}
			?>

			</tbody>  
        </table>
    </div>
    <a href="attendance.php?email=<?php echo $email;?>"><div class="btn" style="text-align:center; position:absolute;right: 60px;width: 20%;">DONE</div></a>
<script src="app.js"></script>

<script>
        function confirmpresent()
        {
            return confirm('Are you sure to mark him Present');
        }
        function confirmabsent()
        {
            return confirm('Are you sure to mark him Absent');
        }
	</script>

</body>
</html>

