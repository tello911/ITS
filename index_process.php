<?php
    include 'conn.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    $query = "SELECT `u_role` FROM `user` WHERE `u_email`='$email' AND `u_password`='$password'";
    $results = mysqli_query($conn,$query);

    if($results){
        while($pass = mysqli_fetch_array($results)){
            if($pass['u_role'] == 'admin'){
                echo "<script>window.location.href='1_Admin/';alert('Welcome to ITS System');</script>";
            }
        }
    }else{
        echo "Tak ada dalam database wei!";
    }
?>