<?php
include ('../../../connection.php');
?>

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
        <b> Insert Student Info</b></div>
        <form action="#" method = "post">
            <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Student's Name" required>
    </div>
    <div>
        <label for="fname">Father Name:</label>
        <input type="text" name="fname" id="fname"placeholder="Student' Father Name" >
    </div>
    <div>
        <label for="pno">Phone Number:</label>
        <input type="text" name="p_no" id="pno" placeholder="Student's Phone no." >
    </div>
    <div>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id= "dob" placeholder="Student's date Of Birth" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Student's Email Address" required>
    </div>
    <div>
        <label for="sclass">Class:</label>
        <select name="sclass" class="select" id="sclass">
        <?php 
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
        <input type="submit" name = "submit" value="Submit" class= "btn">
    </div>
</div>
<script src="app.js"></script>
<div class=output>
    <?php
    
    if(isset($_POST['submit'])){

    $name=$_POST['name']; 
    $fname=$_POST['fname'];
    $phoneno=$_POST['p_no'];
    $dateofbirth=$_POST['dob'];
    $email=$_POST['email'];
    $sclass=$_POST['sclass'];
    
    $sql = "INSERT INTO student_info (Name, Father_Name, phone_no, email_address, date_of_birth, Class_id) 
    VALUES ('$name', '$fname', '$phoneno', '$email', '$dateofbirth', '$sclass')";
    
    if (mysqli_query($conn, $sql)){
        echo"record inserted sucessfully!";
        
            $students_query= "select * from student_info where class_id = '$sclass'";
            $students= mysqli_query($conn, $students_query);
            $noofStudents = mysqli_num_rows($students);
            
            $UpdateNoOfStudents = "Update class_info set students = '$noofStudents' where class_id='$sclass'";
            $updateQuery = mysqli_query ($conn, $UpdateNoOfStudents);
        
        ?>
        
        <script>alert("record inserted successfully!")</script>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/student.php">
        <?php
    }else{
        echo "Error Occur during inserting record!";
        mysqli_connect_error();
    }
}

?>

</div>
</body>
</html>