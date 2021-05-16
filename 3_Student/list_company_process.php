<?php
    include 'session.php';
    include '../conn.php';
    if(isset($_POST['submit'])){
        $email = $_SESSION['u_email'];
        $i_email = $_POST['i_email'];
        if($_POST['submit']=='Apply'){
            $query = "UPDATE `student` SET `s_application` = '1',`ic_email` = '$i_email' WHERE `student`.`s_email` = '$email';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='list_company.php';alert('Your info will being updated');</script>";

        }
    }
?>