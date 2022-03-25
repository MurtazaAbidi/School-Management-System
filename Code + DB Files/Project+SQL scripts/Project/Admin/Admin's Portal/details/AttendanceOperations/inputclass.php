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
                <a href="../../../admin.php ">LogOut</a>
			</li>
		</ul>
		<div class="burger">
            <div class= "line1"></div>
			<div class= "line2"></div>
			<div class= "line3"></div>
		</div>
	</nav>

    <div class="container">
        <div class= "formHeading">
            <b>Taking Attendance <b></div>
            <form action="#" method = "post">
        <div>
            <label for="date">Enter Date:</label>
            <input type="date" name="date" id="date" placeholder="Enter Attendance Date" required>
        </div>
            <div>
                <label for="sclass">Enter Class:</label>
                <select name="sclass" class="select" id="sclass">
            <?php 
                include('../../../connection.php');
                $query = "select * from class_info";
                $quer = mysqli_query($conn, $query);
                while ($res = mysqli_fetch_array($quer) ){
                ?>
                <option value="<?php echo $res['class_id'];?>"><?php echo $res['class_id'];?></option>
            <?php
            }
            ?>
        </select>
    </div>
    
    <div>
        <input type="submit" name = "submit" value="GO" class= "btn">
    </div>
</div>
<script src="app.js"></script>
<div class=output>
    <?php
    
    if(isset($_POST['submit'])){
    $sclass=$_POST['sclass']; 
    $date = $_POST['date'];
    }
    ?>

<META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/AttendanceOperations/insertAttendance.php?sclass=<?php echo $sclass;?>&date=<?php echo $date;?>">


</div>
</body>
</html>
