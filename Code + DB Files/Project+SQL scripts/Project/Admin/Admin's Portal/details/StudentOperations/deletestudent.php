<?php
    $student_id = $_GET['sid']; 
    $sclass= $_GET['sclass'];
    include('../../../connection.php');
    $query= "delete from student_info where id='$student_id'";

    if (mysqli_query($conn, $query)){
            $students_query= "select * from student_info where class_id = '$sclass'";
            $students= mysqli_query($conn, $students_query);
            $noofStudents = mysqli_num_rows($students);
            $UpdateNoOfStudents = "Update class_info set students = '$noofStudents' where class_id='$sclass'";
            $updateQuery = mysqli_query ($conn, $UpdateNoOfStudents);
        echo"record Deleted sucessfully!";
        // header("Location: student.php");
        ?>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/student.php">
        <?php
    }else{
        echo "Error Occur during deleting record!";
        mysqli_connect_error();
    }
?>