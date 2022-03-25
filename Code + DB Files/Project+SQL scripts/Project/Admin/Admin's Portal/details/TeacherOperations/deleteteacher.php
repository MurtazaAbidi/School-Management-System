<?php
    $teacher_id = $_GET['tid']; 
    include('../../../connection.php');
    $query= "delete from teacher_info where teacher_id='$teacher_id'";

    if (mysqli_query($conn, $query)){
        echo"record Deleted sucessfully!";
        // header("Location: teacher.php");
        ?>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/teacher.php">
        <?php
    }else{
        echo "Error Occur during deleting record!";
        mysqli_connect_error();
    }
?>