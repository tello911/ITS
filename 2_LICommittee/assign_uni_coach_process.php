<?php
    include '../conn.php';
    if(isset($_POST['submit'])){
        if($_POST['submit']=='Update'){
            $query = "UPDATE `user` SET `u_id`='".$_POST['u_id']."',`u_name`='".$_POST['u_name']."',`u_password`='".$_POST['u_password']."',`u_phone`='".$_POST['u_phone']."',`u_email`='".$_POST['u_email']."',`u_role`='student' WHERE `u_id`='".$_POST['u_id']."';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='assign_uni_coach.php';alert('University Coach info has been updated');</script>";

        }
        else{
            $query = "UPDATE `user` SET `u_id`='".$_POST['u_id']."',`u_name`='".$_POST['u_name']."',`u_password`=\'',`u_phone`='".$_POST['u_phone']."',`u_email`='".$_POST['u_email']."',`u_role`='student' WHERE `u_id`='".$_POST['u_id']."';";
            $results = mysqli_query($conn,$query);
            echo "<script>window.location.href='assign_uni_coach.php';alert('University Coach info has been reset');</script>";
        }
    }
?>