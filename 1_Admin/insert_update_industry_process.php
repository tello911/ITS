<?php
    include '../conn.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $picname = $_POST['picname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        if($_POST['submit']=='Update'){
            //UPDATE
            $query = "UPDATE `company` SET `name` = '$name',`name` = '$name',`address` = '$address',`picname` = '$picname',`contact` = '$contact' WHERE `company`.`id` = '$id';";
            $results = mysqli_query($conn, $query);
            echo "<script>window.location.href='insert_update_industry.php';alert('Company info has been updated');</script>";
        }else if($_POST['submit'] == 'Delete'){
            //DELETE
            $query = "DELETE FROM `company` WHERE `company`.`id` = '$id';";
            $results = mysqli_query($conn, $query);
            echo "<script>window.location.href='insert_update_industry.php';alert('Company info has been deleted');</script>";
        } else{
            $query = "INSERT INTO `company` (`id`, `name`, `address`, `picname`, `contact`, `email`) VALUES (NULL, '$name', '$address', '$picname', '$contact', '$email');";
            $results = mysqli_query($conn, $query);
            echo "<script>window.location.href='insert_update_industry.php';alert('A company has being added');</script>";
        }
    }
?>