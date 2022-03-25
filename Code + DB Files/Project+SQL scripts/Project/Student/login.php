<?php
    if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['dob'];
    
    $sql = "select * from student_info where email_address= '$email' and date_of_birth = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1){
        $_SESSION['uname'] = $name;
//        echo "Connection Successfull !!!";
        header("Location: Student's Portal/studenthome.php?email=$email");
        exit();
    }else {?>
        <script>alert('Incorrect Password')</script>
    <?php
    }    
}
?>