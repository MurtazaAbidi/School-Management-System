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
    <?php
    include('../../../connection.php');
    $sid= $_GET['sid'];
    $date= $_GET['date'];
    $status= $_GET['status'];
    ?>
    <div class="container">
        <div class= "formHeading">
        <b>(Update Attendance) <br> Student_id="<?php echo $sid; ?>" and Date= "<?php echo $date?>"</b></div>
        <form action="#" method = "post">
    <div>
        <label for="status">Status:</label>
        <select name="status" value="<?php echo $status;?>" id="status" class="select">
            <option value="P">Present</option>
            <option value="A">Absent</option>
        </select>
    </div>
    
    <div>
        <input type="submit" name = "submit" value="Update" class= "btn">
    </div>
</div>
<script src="app.js"></script>
<div class=output>
    <?php
    
    if(isset($_POST['submit'])){

    $status=$_POST['status']; 

    $sql = "Update attendance set status='$status' where student_id = '$sid' and date = '$date'";
    if (mysqli_query($conn, $sql)){
        echo"record Updated sucessfully!";?>
        <script>alert("record Updated successfully!")</script>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/AttendanceOperations/attendanceshow.php?sid=<?php echo $sid;?>">
        <?php
    }else{
        echo "Error Occur during Updating record!";
        mysqli_connect_error();
    }
}

?>

</div>
</body>
</html>
