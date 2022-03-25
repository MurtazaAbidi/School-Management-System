<?php
    $cid = $_GET['cid'];
    $sid = $_GET['sid'];
    include('../../../../connection.php');
    $query= "delete from class_subjects where class_id='$cid' and subject_id = '$sid'";

    if (mysqli_query($conn, $query)){
        echo"record Deleted sucessfully!";
        // header("Location: class.php");
        ?>
        <META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/project/Admin/Admin's%20Portal/details/ClassOperations/showdetails.php?cid=<?php echo $cid;?>">
        <?php
    }else{
        echo "Error Occur during deleting record!";
        mysqli_connect_error();
    }
?>