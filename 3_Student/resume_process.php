<?php
    // print_r($_FILES);
    //echo ini_get('upload_tmp_dir');
    $targetfolder = "resume/";

    $targetfolder = $targetfolder."A18CS0001".".".pathinfo($_FILES['file']['name'])['extension'];

    $ok=1;

    $file_type=$_FILES['file']['type'];

    if ($file_type=="application/pdf" ){
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
        {
            echo "<script>window.location.href='resume.html';alert('The file is uploaded\n Please clear your cache');</script>";
        }
        else {
            echo "<script>window.location.href='resume.html';alert('Problem uploading file);</script>";
        }
    }else {
        echo "<script>window.location.href='resume.html';alert('Only PDF is permitted');</script>";
    }

?>