<?php
    include 'session.php';
    include '../conn.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mat_num = $_POST['mat_num'];
    }

    $query = "UPDATE student SET s_name = '$name', s_password = '$password', s_email = '$email', s_phone = '$phone' WHERE s_email = '$email';";
    $results = mysqli_query($conn, $query);
    if(isset($_FILES['file'])){
        $targetfolder = "testupload/";
        $targetfolder = $targetfolder.$mat_num.".".pathinfo($_FILES['file']['name'])['extension'];

        $file_type=$_FILES['file']['type'];

        if($file_type=="image/jpeg") {
            if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
            {
                echo "<script>window.location.href='profile.php';alert('Your info is been updated');</script>";
            }
            else{
                echo "<script>window.location.href='profile.php';alert('Problem uploading file);</script>";
            }
        }else {
            echo "<script>window.location.href='profile.php';alert('Only JPEG is permitted');</script>";
        }
    }

    echo "<script>window.location.href='profile.php';alert('Your info is been updated');</script>";

?>