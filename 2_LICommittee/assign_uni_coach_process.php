<?php
    include '../conn.php';
    if(isset($_POST['submit'])){
        $coach = $_POST['u_coach'];
        $id = $_POST['s_id'];
        if($_POST['submit']=='Update'){
            
            $query = "UPDATE `student` SET `s_uni_coach` = '$coach' WHERE `student`.`s_id` = '$id';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='assign_uni_coach.php';alert('University Coach info has been updated');</script>";

        }
        else{
            $query = "UPDATE `student` SET `s_uni_coach` = '' WHERE `student`.`s_id` = '$id';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='assign_uni_coach.php';alert('University Coach info has been reset');</script>";
        }
    }
?>