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
        <b> Add a new Class</b></div>
        <form action="#" method = "post">
            <div>
        <label for="cid">Class:</label>
        <input type="text" name="cid" id="cid" placeholder="Class Number" requi>
    </div>
    <div>
        <label for="classteacher">Class Teacher:</label>
        <select name="classteacher" id="classteacher" class="select">
            <?php 
                $query = "select * from teacher_info";
                $quer = mysqli_query($conn, $query);
			while ($res = mysqli_fetch_array($quer) ){
                ?>
            <option value="<?php echo $res['teacher_id'];?>"><?php echo $res['Name'];?></option>
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

    $cid=$_POST['cid']; 
    $teacher=$_POST['classteacher'];


        $students_query= "select * from student_info where class_id = '$cid'";
        $students= mysqli_query($conn, $students_query);
        $noofStudents = mysqli_num_rows($students); 

    
    $sql = "INSERT INTO class_info (class_id, class_teacher, students) 
    VALUES ('$cid', '$teacher', '$noofStudents')";
    
    // $addSubject="select subject_id from student_info s JOIN class_info c ON s.Class_id= c.class_id JOIN teacher_info t ON c.class_teacher=t.teacher_id JOIN subject sb ON t.subject_id= sb.subject_id where t.teacher_id='$teacher'"; 
    $addSubject="select * from teacher_info t join subject s on t.subject_id = s.subject_id where teacher_id = '$teacher'";
    $addsubjects= mysqli_query($conn, $addSubject);
    $sub_id= mysqli_fetch_array($addsubjects);
    $temp= $sub_id['subject_id'];

        if (mysqli_query($conn, $sql)){
            mysqli_query($conn, "INSERT into class_subjects Values ('$cid', '$temp')");
            echo"record inserted sucessfully!";?>
        <script>alert("record inserted successfully!")</script>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/class.php">
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




<!-- insert into class_subjects(class_id, subject_id) values (cid, sid); -->