<?php
    session_start();
    if($_SESSION['u_role'] != 'li_comm' || $_SESSION['u_role'] == NULL){
        echo "<script>window.location.href='../in.html';alert('You cannot access LI Committee system. Please login again');</script>";        
        session_unset();
        session_destroy();
        
    }
?>