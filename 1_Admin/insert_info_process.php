<?php
    include '../conn.php'; 
    if (isset($_POST['info'])) {
    $info = htmlentities($_POST['info']);
    $date = new DateTime("now", new DateTimeZone('Asia/Kuala_Lumpur'));
    $date = $date->format('Y-m-d');
    }
    
    $sql = "INSERT INTO li_info VALUES('".$info."','".$date."');";

    if (mysqli_query($conn, $sql)) {
        $sql = "INSERT INTO log_info VALUES('LI info has been inserted by ','".$date."');";
        mysqli_query($conn,$sql);
        echo "<script>window.location.href='insert_info.html';alert('LI info has being updated on ".$date."')</script>";
    } else {
    echo $sql;
    //echo "<script>window.location.href='create_account.html';alert('Your SQL query have error '")</script>";
    }
    mysqli_close($conn);

?>