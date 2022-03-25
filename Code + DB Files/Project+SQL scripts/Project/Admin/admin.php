<?php 
    include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tez Learner Public School</title>
</head>
<style type="text/css">
*{
	margin: 0;
	padding: 0;
	color: white;
}

body{
	background-image: url('admin1.jpg');
	background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
}
.logo {
	position: absolute;
    left: 0px;
    display: inline-block;
     /*border: 2px solid red; */
    font-size: 15px;
    text-align: center;
    cursor: pointer;
}
.logo img{
	width: 102px;
}

.heading {
    left: 159px;
    position: absolute;
    font-size: 36px;
    padding: 40px;
}
.admin-panel{
	display: inline-block;
    margin: 200px 100px;
    position: absolute;
    text-align: center;
    padding: 45px 60px;
    padding-top: 14px;
	border: 2px solid black;
	border-radius: 20%;
	    background-color: rgb(91, 91, 91, .6);
}
.form-heading{
	/*border: 2px solid blue;*/
	padding: 11px 0px;
    margin-bottom: 5px;
    font-size: 30px;
    font-weight: bold;
}
.admin-panel input{
	border: 2px solid black;
    text-align: center;
    margin: 5px 18px;
    border-radius: 24px;
    padding: 8px 31px;
    color: black;
}

.btn{
	border: 2px solid black;
	color: black;
    background-color: #bff9ff;
    cursor: pointer;
}

.btn:hover{
	background-color: #c9c9c9;
	text-decoration: underline;
    transition: 1s;
}

.disp{
	display: inline-block;
    position: relative;
    top: 160px;
    left: 200px;
}



</style>

<body>

	<a href="../index.php">
		<div class= "logo">
		<img src="logo.jpg" alt="logo">
		<div>Tez Learner Public School</div>
	</div></a>
    <div class= "heading">
    School Management System
    </div>
	<div class="admin-panel">
		<div class=form-heading>Admin Login</div>
		<form action="#" method= "post">
			<div>
				<input type="text" name="name" placeholder="Enter Name" id="adminName" required>
			</div>
			<div>
				<input type="password" name="pass" placeholder="Enter Password" id="Adminpass" required>
			</div>
			<div>
				<input type="submit" name="submit" value="Go" class="btn">
			</div>
		</form>
	</div>

<div class="disp">
<?php 
include ('login.php');
?>
</div>
</body>
</html>
