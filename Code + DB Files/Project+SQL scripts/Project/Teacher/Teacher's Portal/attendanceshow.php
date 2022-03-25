<?php
	include ('../connection.php');
	$email= $_REQUEST['email'];
    $sid = $_REQUEST['sid'];
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
            $selectquery = "select * from attendance where student_id = '$sid'";
            $query = mysqli_query($conn, $selectquery);
            
            $nums = mysqli_num_rows($query);
    
            ?>
        <div class= "right">
        <a href="studentattendance.php?sid=<?php echo $sid;?>&email=<?php echo $email;?>">		
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
                <td><a href="updateattendance.php?sid=<?php echo $sid; ?>&date=<?php echo $res['date'];?>&status=<?php echo $res['status'];?>&email=<?php echo $email;?>"><div class="subbtn">Edit</div></a></td>
                <td><a href="deleteattendance.php?sid=<?php echo $sid; ?>&date=<?php echo $res['date'];?>&email=<?php echo $email;?>" onclick="return confirmdelete()"><div class="subbtn">Delete</div></a></td>
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
        
