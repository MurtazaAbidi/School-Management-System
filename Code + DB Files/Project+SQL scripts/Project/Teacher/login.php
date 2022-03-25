<?php
    if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "select * from teacher_info where email_address= '$email' and password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1){
        $_SESSION['uname'] = $name;
        // echo "Connection Successfull !!!";
        header("Location: Teacher's Portal/teacherhome.php?email=$email");
        exit();
    }else {
        echo "Incorrect ('Email' or 'Password') !! ";
    }    
}
?>