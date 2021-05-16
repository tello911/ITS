<?php
    include 'session.php';
    include '../conn.php'; 
    if (isset($_POST['submit'])) {
        $info = htmlentities($_POST['logbook']);
        $date = $_POST['date'];
        $title = $_POST['title'];
    }

    $query = "INSERT INTO `logbook_student` (`id`, `date`, `title`, `content`, `email`, `approval_industry`, `approval_uni`) VALUES (NULL, '".$date."', '".$title."', '".$info."', 'lol@gmail.com', '0', '0')";
    if (mysqli_query($conn, $query)) {
        // $sql = "INSERT INTO log_info VALUES('LI info has been inserted by ','".$date."');
        // mysqli_query($conn,$sql);
        echo "<script>window.location.href='logbook.php';alert('Your logbook has been updated for date ".$date."')</script>";
    } else {
        echo "<script>window.location.href='logbook.php';alert('Your SQL query have error ')</script>";
    }
    mysqli_close($conn);
?>