<?php
    $student_id = $_GET['sid']; 
    $date= $_GET['date'];
    include('../../../connection.php');
    $query= "delete from attendance where student_id='$student_id' and date = '$date'";

    if (mysqli_query($conn, $query)){
        echo"record Deleted sucessfully!";
        // header("Location: student.php");
        ?>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/AttendanceOperations/attendanceshow.php?sid=<?php echo $student_id;?>">
        <?php
    }else{
        echo "Error Occur during deleting record!";
        mysqli_connect_error();
    }
?>