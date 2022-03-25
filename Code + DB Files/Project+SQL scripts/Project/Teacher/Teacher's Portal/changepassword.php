<?php
		include('../connection.php');
		$email= $_GET['email'];
		$quer = "select * from teacher_info where email_address='$email'";
		$query = mysqli_query($conn, $quer);
		$res = mysqli_fetch_array ($query);
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
				<a href="attendance.php?email=<?php echo $email;?>">Attendance</a>
			</li>
			<li>
				<a href="changepassword.php?email=<?php echo $email;?>" class="active">Change_password</a>
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
<!--
	<div style="border: 2px solid red;
				padding: 200px;
				display: inline-block;
				align-items: center;
				position: absolute;
				margin:auto;
				left:20%;
				top:20%;"
				>
		Teacher Details
	</div>
-->
	<div class="heading">
		Change Password
	</div>
    <div class= "teacherdetails">
        <form action="#" method = "post">
        <div>
            <label for="oldpass">Enter Old Password:</label>
            <input type="password" name="oldpass" required>
        </div>
        <div>
            <label for="newpass">Enter New Password:</label>
            <input type="password" name="newpass" required>
        </div>
        <div>
            <label for="againpass">Enter New Password (Again):</label>
            <input type="password" name="againpass" required>
        </div>
        <div>
            <input type="submit" name = "submit" value="Update" class= "btn">
        </div>
    </div>

	<script src="app.js"></script>
<?php
    if(isset($_POST['submit'])){
        $teacher_id=$res['teacher_id'];
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        $againpass=$_POST['againpass'];
        if ($oldpass==$res['password']){
            if ($newpass==$againpass){
                $query= "Update teacher_info set password='$newpass' where teacher_id = '$teacher_id'";

                if (mysqli_query($conn, $query)){
                    echo"Password Updated sucessfully!";
                    ?>
                    <script>
                    alert("Password Updated Successfully!");
                    </script>
                    <!-- // header("Location: teacher.php"); -->
                    <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Teacher/Teacher's%20Portal/teacherhome.php?email=<?php echo $email?>">
                    <?php
                }else{
                    echo "Error while changing password!";
                    mysqli_connect_error();
                }
            }else{
                echo "Please Enter Same \"New Password\"";
            }
        }else{
            echo "Incorrect Old Password!!";
        }
    }

?>
</body>
</html>