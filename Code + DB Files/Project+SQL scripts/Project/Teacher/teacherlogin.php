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
		background-image: url('teacher.jpg');
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
    top: 170px;
    left: 245px;
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
    color:gray;
    background-color: yellow;
    text-decoration: underline;
    transition: 2s;   
}

.output{
    color: white;
    font-size: 21px;
    font-weight: bold;
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
            <h6> Teacher Login </h6>
            <!-- <a href="login.php" target="_blank" rel="noopener noreferrer">Update</a> -->
         <form action="#" method = "post">
             <div>
            <input type="email" name="email" placeholder="Enter Email Address" id="email" required>
        </div>
        <div>
            <input type="password" name="pass" placeholder= "Enter Password" id="AdminPass" required>
        </div>
        <div>
            <input type="submit" name = "submit" value="Go" class= "btn">
        </div>
        
    </div>
    <div class="output">
    <?php 
        include ('login.php');
        ?>
    </div>
    </div>
</body>
</html>
