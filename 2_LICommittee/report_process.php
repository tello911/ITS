<?php
    include 'session.php';
    include '../conn.php';
    if(isset($_POST['submit'])){
        $status = $_POST['status'];
        $id = $_POST['s_id'];
        if($_POST['submit']=='Update'){
            
            $query = "UPDATE `student` SET `status` = '$status' WHERE `student`.`s_id` = '$id';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='report.php';alert('Student LI status has been updated');</script>";

        }
        else{
            $query = "UPDATE `student` SET `status` = 'In Progress' WHERE `student`.`s_id` = '$id';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='report.php';alert('Student LI status  has been reset');</script>";
        }
    }
?>