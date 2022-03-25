<?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_password = '';
    $conn = mysqli_connect ($mysql_host, $mysql_user, $mysql_password);

    if (@mysqli_connect_error())
    {
        // echo "failed";
        die('DataBase Connection Failed!!! Please Try Again...');
    }
    else 
    {
        // echo "congrats yehshhhhh";
        @mysqli_select_db($conn,'school management system');
        
    }
    ?>