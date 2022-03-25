<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tez Learner Public School</title>
</head>
<style type="text/css">
	*body{
		margin : 0;
		border: 0;
	}
	body{
		background-image: url('background.jpg') ;
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
		text-align: center;

	}
	.logo{
		position: absolute;
		left: 0px;
		top: 0px;
		display: inline-block;
		/*border: 2px solid red ;*/
		font-size: 15px;
		text-align: center;
		color:black;
	}
	.logo img {
		/*border: 2px solid black;*/
		width: 102px;

	}
	.mid{
		display: inline-block;
        padding: 45px 45px;
        border: 9px solid black;
        font-size: 51px;
        background-color: rgb(0, 255, 255, 0.5);
        border-radius: 45px;
	}

	.choose{
/*		border: 2px solid red;*/
		display: inline-block;
    	position: relative;
        width: 610px;
		top: 50px;
		padding: 15px 15px;
		font-size: 40px;
	}
    
    .choose h4{
            border: 2px solid black;
            margin: 0;
            margin-bottom: 40px;
            display: inline-block;
    }

	.btn {

		border: 2px solid black;
		display: inline-block;
		padding: 23px 32px;
		cursor: pointer;
		border-radius: 50%;
		background-repeat: no-repeat;
		background-size: 100% 100%;
		color: white;
	}
    
    .btn:hover{
        color: beige;
        text-decoration: underline;
        
    }
/*
	#admin:hover{
		background-image: url('admin1.jpg');
		opacity: .7;
	}
	#teacher:hover{
		background-image: url('teacher1.jpg');
	opacity: .7;
	}
	#student:hover{
		background-image: url('student1.jpg');
		opacity: .7;
	}
*/

	#admin{
		position: relative;
		top: 70px;
		background-image: url('admin.jpg');
	}
	#student{
		background-image: url('student.jpg');
	}
	#teacher{
		
		background-image: url('teacher.jpg');
	}

</style>
<body>
<a href="index.php">
		<div class="logo" >
			<img src="logo.jpg" alt="School">
			<div>
				<b>Tez Learner Public School</b>
			</div>
		</div>
	</a>

	<div class="mid">
		School Management System
	</div>

	<div class="choose">
        <h4>Select the Desire Option</h4>
		<br>
			<a href = "Student/student.php"><div class="btn" id="student">Student</div></a>
			<a href = "Admin/admin.php"><div class="btn" id="admin">Admin</div></a>
			<a href = "Teacher/teacherlogin.php"><div class="btn" id="teacher">Teacher</div></a>
	</div>
</body>
</html>