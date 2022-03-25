<?php
    $cid = $_GET['cid'];
    include('../../../connection.php');
    $query= "delete from class_info where class_id='$cid'";

    if (mysqli_query($conn, $query)){
        echo"record Deleted sucessfully!";
        // header("Location: class.php");
        ?>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/class.php">
        <?php
    }else{
        echo "Error Occur during deleting record!";
        mysqli_connect_error();
    }
?>