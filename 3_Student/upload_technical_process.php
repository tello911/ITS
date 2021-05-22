<?php
    include 'session.php';
    include '../conn.php';

    $targetfolder = "technical/";
    $targetfolder = $targetfolder.$_POST['mat_num']."_".$_POST['file_name'].".".pathinfo($_FILES['file']['name'])['extension'];

    $ok=1;

    $file_type=$_FILES['file']['type'];
    $file_name = $_POST['mat_num']."_".$_POST['file_name'];
    $date = date('Y-m-d');
    $query = "INSERT INTO `technical` (`id`, `email`, `date`, `report`, `path`,`approval_industry`,`approval_uni`) VALUES (NULL, '".$_POST['mat_num']."','$date' , '$file_name', '$targetfolder',0,0);";
    $results = mysqli_query($conn, $query);

    if ($file_type=="application/pdf" ) {
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
        {
            // echo $query;
            echo "<script>window.location.href='upload_technical.php';alert('The file  is uploaded');</script>";
        }
        else {
            echo "<script>window.location.href='upload_technical.php';alert('Problem uploading file);</script>";
        }
    }else {
        echo "<script>window.location.href='upload_technical.php';alert('Only PDF, GIF, and JPEG is permitted');</script>";
    }

?>