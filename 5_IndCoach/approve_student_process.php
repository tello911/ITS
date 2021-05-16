<?php
    include 'session.php';
    include '../conn.php';
    if(isset($_POST['submit'])){
        $email = $_SESSION['u_email'];
        $s_email = $_POST['email'];
        if($_POST['submit']=='Approve'){
            $query = "UPDATE `student` SET `s_application` = '1',`ic_email` = '',`s_li_coach` = '$email' WHERE `student`.`s_email` = '$s_email';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='approve_student.php';alert('Your info will being updated');</script>";

        }
        if($_POST['submit']=='Reject'){
            $query = "UPDATE `student` SET `s_application` = '0',`ic_email` = '',`s_li_coach` = '' WHERE `student`.`s_email` = '$s_email';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='approve_student.php';alert('Your info will being updated');</script>";

        }
    }
?>