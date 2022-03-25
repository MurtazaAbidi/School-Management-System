<?php
    if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $sql = "select * from Admin where username= '$name' and password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0){
        $_SESSION["uname"] = $name;
        // echo "Connection Successfull !!!";
        header("Location: Admin's Portal/adminhome.php");
        exit();
    }else {
        echo "Incorrect Password !! ";
    }    
}
?>