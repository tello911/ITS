<?php
    include 'session.php';
    include '../conn.php';

    $targetfolder = "resume/";
    $targetfolder = $targetfolder.$_POST['mat_num'].".".pathinfo($_FILES['file']['name'])['extension'];

    $ok=1;

    $file_type=$_FILES['file']['type'];

    if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
        {
            echo "<script>window.location.href='upload_resume.php';alert('The file ". $_POST['description']. " is uploaded');</script>";
        }
        else {
            echo "<script>window.location.href='upload_resume.php';alert('Problem uploading file);</script>";
        }
    }else {
        echo "<script>window.location.href='upload_resume.php';alert('Only PDF, GIF, and JPEG is permitted');</script>";
    }

?>