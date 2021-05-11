<?php
    include 'session.php';
    include '../conn.php';
    if(isset($_POST['submit'])){
        echo $_POST['id'];
    }
?>