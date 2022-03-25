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
    $cid= $_GET['cid'];
    $teacher= $_GET['teacher'];
    ?>
    <div class="container">
        <div class= "formHeading">
        <b> Updating Class (For Class = <?php echo $cid; ?> )</b></div>
        <form action="#" method = "post">
        <div>
            <label for="classteacher">Class Teacher:</label>
            <select name="classteacher" value="<?php echo $teacher;?>" id="classteacher" class="select">
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
        <input type="submit" name = "submit" value="Update" class= "btn">
    </div>
</div>
<div class="output">
    <?php
    
    if(isset($_POST['submit'])){


    $teacher=$_POST['classteacher'];

    $sql = "Update class_info set class_teacher = '$teacher' where class_id = '$cid'";
    $addSubject="select * from teacher_info t join subject s on t.subject_id = s.subject_id where teacher_id = '$teacher'";
    $addsubjects= mysqli_query($conn, $addSubject);
    $sub_id= mysqli_fetch_array($addsubjects);
    $temp= $sub_id['subject_id'];
    
    if (mysqli_query($conn, $sql)){
        mysqli_query($conn, "INSERT into class_subjects Values ('$cid', '$temp')");
        echo"record Updated sucessfully!";?>
        <script>alert("record Updated successfully!")</script>
        <META HTTP- EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/class.php">
        <?php
    }else{
        echo "Error Occur during Updating record!";
        mysqli_connect_error();
    }
}
?>

</div>
<script src="app.js"></script>
</body>
</html>
