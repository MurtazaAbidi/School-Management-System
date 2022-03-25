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
    margin :0;
    border:0;
    text-align: center;
}
	body{
		background-image: url('Student.jpg');
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
	}
.left{
    position: absolute;
    font-size: 15px;
    color: white;
    left: 0px;
    /*border: 2px solid red; */
    display: inline-block; 
}
	.left img {
    width: 115px;
    cursor: pointer;
}

.formHeading{

    color: whitesmoke;
    font-size: 47px;
     /*border: 2px solid red; */
    padding:40px;

}

	.container{
    display: inline-block;
    border: 4px solid dimgray;
    background-color: rgb(99, 141, 155, 0.4);


    z-index : -1;
    position: absolute;    
    top: 190px;
    left: 385px;
    border-radius: 12%;
    padding: 6px 34px;



    /*margin: 30px;
    padding: 70px 71px;
    font-size: 40px;
    position: absolute;
    top: 0px;
    left: 0px;*/
    /*text-align: center;*/

	}
    .container h6{
        color: ghostwhite;
        font-size: 35px;
        display: inline-block;
        /*border: 2px solid white;*/
        padding: 0px 90px;
        margin-bottom: 20px;
    }

	.container form input{
    padding: 12px 90px;
    /* border: 2px solid red; */
    margin: 7px;
    font-size: 18px;
    border-radius: 26px;
    text-align: center;

}
.btn{
    padding: 6px 73px;
    margin: 15px;
    background-color: lightyellow;
    border-radius: 99px;
    text-align: center;
}

.btn:hover{
    cursor: pointer;
    color:gray;
    transition: 2s;
    background-color: yellow;
    text-decoration: underline;    
}

.label{
    color: white;
    font-size: 25px;
    text-decoration: underline; 
}

</style>

<body>
<a href="../index.php">
    <div class="left">
            <img src="logo.jpg" alt="School">
                <div>
                    Tez Learner Public School
                </div>
            </div>
        </a>
    
        <div class= "formHeading">
            <b> School Management System</b></div>
    <div class="container">
            <h6> Student Login </h6>
            <!-- <a href="login.php" target="_blank" rel="noopener noreferrer">Update</a> -->
         <form action="#" method = "post">
             <div>
                 <div class="label">Enter EmailAddress:</div>
            <input type="text" name="email" placeholder="Enter Email_Address" id="email" required>
        </div>
        <div>
            <div class="label">Enter Date Of Birth:</div>
            <input type="date" name="dob" placeholder= "Enter dob" id="dob" required>
        </div>
        <div>
            <input type="submit" name = "submit" value="Go" class= "btn">
        </div>
            
        </div>
    </div>
</body>
</html>

<?php 
include ('login.php');
?>