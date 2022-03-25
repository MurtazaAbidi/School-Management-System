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
        <b> Add a new Subject</b></div>
        <form action="#" method = "post">
            <div>
        <label for="sname">Subject Name:</label>
        <input type="text" name="sname" id="sname" placeholder="Subject's Name" required>
    </div>
    <div>
        <label for="subject">Subject Type:</label>
        <select name="type" id="subject" class="select">
            <option value="Theory">Theory</option>
            <option value="Practical">Practical</option>
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

    $sname=$_POST['sname']; 
    $type=$_POST['type'];
    
    $sql = "INSERT INTO subject (subject_name, type) 
    VALUES ('$sname', '$type')";

    if (mysqli_query($conn, $sql)){
        echo"record inserted sucessfully!";?>
        <script>alert("record inserted successfully!")</script>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/subject.php">
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