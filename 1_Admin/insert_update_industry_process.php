<?php
    include '../conn.php';
    if(isset($_POST['submit'])){
        if($_POST['submit']=='Update'){
            //UPDATE
            print_r($_POST);
        }else{
            //DELETE
        }
    }
?>