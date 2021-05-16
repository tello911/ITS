<?php
    session_start();
    include 'conn.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    $query = "SELECT * FROM `user` WHERE `u_email`='$email' AND `u_password`='$password'";
    $results = mysqli_query($conn,$query);
    $rowcount=mysqli_num_rows($results);

    if($rowcount){
        while($pass = mysqli_fetch_array($results)){
            $_SESSION['u_name'] = $pass['u_name'];
            $_SESSION['u_email'] = $pass['u_email'];
            //CHECK ADMIN
            if($pass['u_role'] == 'admin'){
                $_SESSION['u_id'] = $email;
                $_SESSION['u_role'] = 'admin';
                echo "<script>window.location.href='1_Admin/';alert('Welcome to ITS System');</script>";
            }
            //CHECK LI COMMITTEE
            if($pass['u_role'] == 'li_comm'){
                $_SESSION['u_id'] = $email;
                $_SESSION['u_role'] = 'li_comm';
                echo "<script>window.location.href='2_LICommittee/';alert('Welcome to ITS System');</script>";
            }
            //CHECK STUDENT
            if($pass['u_role'] == 'student'){
                $_SESSION['u_id'] = $email;
                $_SESSION['u_role'] = 'student';
                echo "<script>window.location.href='3_Student/';alert('Welcome to ITS System');</script>";
            }
            //CHECK UNI COACH
            if($pass['u_role'] == 'uc'){
                $_SESSION['u_id'] = $email;
                $_SESSION['u_role'] = 'uc';
                echo "<script>window.location.href='4_UniCoach/';alert('Welcome to ITS System');</script>";
            }
            //CHECK INDUSTRY COACH
            if($pass['u_role'] == 'ic'){
                $_SESSION['u_id'] = $email;
                $_SESSION['u_role'] = 'ic';
                echo "<script>window.location.href='5_IndCoach/';alert('Welcome to ITS System');</script>";
            }
        }
    }else{
        echo "<script>window.location.href='in.html';alert('Please recheck your email and password');</script>";
    }
?>