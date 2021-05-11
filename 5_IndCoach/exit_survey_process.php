<?php
    include 'session.php';
    include '../conn.php';

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $industry = $_POST['industry'];
        $comment = $_POST['comment'];
    }

    $query = "INSERT INTO `survey` (`id`, `name`, `contact`, `industry`, `comment`) VALUES (NULL, '$name', '$contact', '$industry', '$comment');";
    $results = mysqli_query($conn, $query);

    echo "<script>alert('Your info will being updated');window.location.href='exit_survey.html';</script>";

?>