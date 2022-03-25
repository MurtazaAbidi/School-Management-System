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
    $id= $_GET['tid'];
    $name= $_GET['name'];
    $email= $_GET['email'];
    $pno= $_GET['pno'];
    $dob= $_GET['dob'];
    $salary= $_GET['salary'];
    ?>
    <div class="container">
        <div class= "formHeading">
        <b> Updating Teacher (For Teacher_ID=<?php echo $id; ?> )</b></div>
        <form action="#" method = "post">
            <div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name;?>" id="name" placeholder="Teacher's Name" required>
    </div>
    <div>
        <label for="pno">Phone Number:</label>
        <input type="text" name="p_no" value="<?php echo $pno;?>" id="pno" placeholder="Teacher's Phone no." >
    </div>
    <div>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo $dob;?>" id= "dob" placeholder="Teacher's date Of Birth" >
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email;?>" id="email" placeholder="Teacher's Email Address" required>
    </div>
    <div>
        <label for="subject">Subject:</label>
        <select name="subject" id="subject" class="select" >
        <?php 
                $query = "select * from subject";
                $quer = mysqli_query($conn, $query);
			while ($res = mysqli_fetch_array($quer) ){
                ?>
            <option value="<?php echo $res['subject_id'];?>"><?php echo $res['subject_name'];?>(<?php echo $res['type'];?>)</option>
            <?php
            }
            ?>
        </select>
    </div>
    <div>
        <label for="salary">Teacher's Salary:</label>
        <input type="text" name="salary" value="<?php echo $salary;?>" id="salary" placeholder="Teacher's Salary" requi>
    </div>
    <div>
        <input type="submit" name = "submit" value="Update" class= "btn">
    </div>
</div>
<script src="app.js"></script>
<div class=output>
    <?php
    
    if(isset($_POST['submit'])){

    $name=$_POST['name']; 
    $email=$_POST['email'];
    $phoneno=$_POST['p_no'];
    $dateofbirth=$_POST['dob'];
    $subject=$_POST['subject'];
    $salary=$_POST['salary'];

    $sql = "Update teacher_info set Name='$name', email_address= '$email', phone_no='$phoneno', date_of_birth= '$dateofbirth', salary= '$salary', subject_id= '$subject' where teacher_id = '$id'";
    
    
    if (mysqli_query($conn, $sql)){
        echo"record Updated sucessfully!";?>
        <script>alert("record Updated successfully!")</script>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/teacher.php">
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
