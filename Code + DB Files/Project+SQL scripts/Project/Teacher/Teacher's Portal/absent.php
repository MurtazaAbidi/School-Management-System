<?php
    $student_id = $_GET['sid']; 
    $date= $_GET['date'];
    $sclass= $_GET['sclass'];
    $email= $_GET['email'];
    include('../connection.php');
    $query= "insert into attendance values ('$date', '$student_id', 'A')";

    if (mysqli_query($conn, $query)){
        echo"Marked Absent sucessfully!";
        // header("Location: student.php");
        ?>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Teacher/Teacher's%20Portal/insertAttendance.php?sclass=<?php echo $sclass?>&date=<?php echo $date;?>&email=<?php echo $email;?>">
        <?php
    }else{
        echo "Error Occur during deleting record!";
        mysqli_connect_error();
    }
?>