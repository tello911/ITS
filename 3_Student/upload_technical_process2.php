<?php
    include 'session.php';
    include '../conn.php';

    $query = "DELETE FROM `technical` WHERE `id` = '".$_POST['id']."'";
    $results = mysqli_query($conn, $query);

    echo "<script>window.location.href='upload_technical.php';alert('Your report has been deleted');</script>";

?>