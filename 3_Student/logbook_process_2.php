<?php
    include 'session.php';
    include '../conn.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $query = "DELETE FROM `logbook_student` WHERE `id` = '$id'";
        $results = mysqli_query($conn, $query);

        echo "<script>window.location.href='logbook.php';alert('Your logbook report has been deleted')</script>";
    }