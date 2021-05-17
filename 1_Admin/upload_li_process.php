<?php
    include 'session.php';
    include '../conn.php';

    $targetfolder = "li/";
    $targetfolder = $targetfolder.$_POST['li_info'].".".pathinfo($_FILES['file']['name'])['extension'];

    $ok=1;
    $date = date("Y-m-d");
    $file_type=$_FILES['file']['type'];
    $query = "INSERT INTO `li_info` (`info`, `date`, `file`) VALUES ('".$_POST['li_info']."', '$date', '$targetfolder');";
    $results = mysqli_query($conn, $query);

    if ($file_type=="application/pdf") {
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
        {
            echo "<script>window.location.href='upload_li.php';alert('The file ". $_POST['li_info']. " is uploaded');</script>";
        }
        else {
            echo "<script>window.location.href='upload_li.php';alert('Problem uploading file);</script>";
        }
    }else {
        echo "<script>window.location.href='upload_li.php';alert('Only PDF file is permitted');</script>";
    }

?>