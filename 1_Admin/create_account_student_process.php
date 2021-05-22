<?php
    include 'session.php';
    include '../conn.php';
    $name = $email = $gender = $comment = $website = "";
    if (isset($_POST['submit'])) {
        $name = test_input($_POST['name']);
        $matnum = test_input($_POST['matnum']);
        $email = test_input($_POST['email']);
        $course = test_input($_POST['course']);
    }
    $sql = "INSERT INTO `student` (`s_id`, `s_name`, `s_email`, `s_matrics_num`, `s_li_coach`, `s_uni_coach`, `s_picture`, `s_course`, `no_app`, `mark_1`, `mark_2`, `mark_3`, `status`,`s_application`,`ic_email`) VALUES (NULL, '$name', '$email', '$matnum', NULL, NULL, NULL, '$course', '0', '0', '0', '0', 'In Progress',DEFAULT,'')";

    if (mysqli_query($conn, $sql)) {
        $sql = "INSERT INTO log_info VALUES('A STUDENT account has been created by ".$_SESSION['u_name']."','".$date."');";
        mysqli_query($conn,$sql);
        echo "<script>window.location.href='create_account_student.php';alert('An STUDENT account has been created')</script>";
      } else {
        // echo $sql;
        echo "<script>window.location.href='create_account_student.php';alert('Your SQL query have error ')</script>";
      }
      
      mysqli_close($conn);
    //echo "INSERT INTO Log VALUES('Admin Name','Insert User ".$name." as a ".$role."')";

    //echo "<script>window.location.href='create_account_student.php';alert('An account for a ".$role." created successfully!')</script>";
?>
<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>