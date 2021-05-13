<?php
    include 'session.php';
    include '../conn.php';

    $matnum = $_POST['matnum'];
    $code1 = $_POST['code'][0];
    $code2 = $_POST['code'][1];
    $code3 = $_POST['code'][2];

    $query = "UPDATE `student` SET `mark_1` = $code1,`mark_2` = $code2,`mark_3` = $code3 WHERE `student`.`s_matrics_num` = '$matnum';";
    // var_dump($query);
    $results = mysqli_query($conn, $query);

    echo "<script>window.location.href='view_intern_assessment.php';alert('Student account have already been updated');</script>";

?>