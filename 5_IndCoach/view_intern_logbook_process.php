<?php
    include 'session.php';
    include '../conn.php';

    if(isset($_POST['submit'])){
        $id =$_POST['id'];
        if($_POST['submit']=='Approve'){
            $query = "UPDATE `logbook_student` SET `approval_industry` = '1' WHERE `logbook_student`.`id` = '$id' ;";
            $results = mysqli_query($conn, $query);
            echo "<script>window.location.href='view_intern_logbook.php';alert('The logbook has been approved');</script>"; 
        }
        if($_POST['submit']=='Reject'){
            $query = "UPDATE `logbook_student` SET `approval_industry` = '-1' WHERE `logbook_student`.`id` = '$id' ;";
            $results = mysqli_query($conn, $query);
            echo "<script>window.location.href='view_intern_logbook.php';alert('The logbook has been rejected');</script>"; 
        }
    }
?>