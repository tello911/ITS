<?php
    include 'session.php';
    include '../conn.php';

        $email = $_POST['email'];
        $company = $_POST['company'];
        $ic = $_POST['ic'];
        $uniCoach = $_POST['uniCoach'];
        $student = $_POST['student'];

        $qb1 = $_POST['qb1'];$qb2 = $_POST['qb2'];$qb3 = $_POST['qb3'];
        $qb4 = $_POST['qb4'];$qb5 = $_POST['qb5'];$qb6 = $_POST['qb6'];
        $qb7 = $_POST['qb7'];$qb8 = $_POST['qb8'];
        $commentb = $_POST['commentb'];

        $qc1 = $_POST['qc1'];$qc2 = $_POST['qc2'];$qc3 = $_POST['qc3'];
        $qc4 = $_POST['qc4'];$qc5 = $_POST['qc5'];$qc6 = $_POST['qc6'];
        $qc7 = $_POST['qc7'];$qc8 = $_POST['qc8'];$qc9 = $_POST['qc9'];
        $qc10 = $_POST['qc10'];$qc11 = $_POST['qc11'];
        $commentc = $_POST['commentc'];

        $qd1 = $_POST['qd1'];$qd2 = $_POST['qd2'];$qd3 = $_POST['qd3'];
        $qd4 = $_POST['qd4'];$qd5 = $_POST['qd5'];
        $qd6 = $_POST['qd6'];$qd7 = $_POST['qd7'];$qd8 = $_POST['qd8'];
        $commentd = $_POST['commentd'];

        //SECTION B
       //SECTION B
       $query ="INSERT INTO `code1_uni` (`id`, `email`, `company`, `industry_coach`, `university_coach`, `student_mat_num`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`,`comment`) VALUES (NULL, '$email', '$company', '$ic', '$uniCoach', '$student', '$qb1', '$qb2', '$qb3', '$qb4', '$qb5', '$qb6', '$qb7', '$qb8', '$commentb');";
       //var_dump($query);
       if(mysqli_query($conn, $query)){

       }else{
           echo "<script>window.location.href='intern_assessment.php';alert('Please enter again for section B')</script>";
       }

       //SECTION C
       $query ="INSERT INTO `code2_uni` (`id`, `email`, `company`, `industry_coach`, `university_coach`, `student_mat_num`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`,`q10`,`q11`,`comment`) VALUES (NULL, '$email', '$company', '$ic', '$uniCoach', '$student', '$qc1', '$qc2', '$qc3', '$qc4', '$qc5', '$qc6', '$qc7', '$qc8', '$qc9','$qc10','$qc11','$commentc');";
       //var_dump($query);
       if(mysqli_query($conn, $query)){

       }else{
           echo "<script>window.location.href='intern_assessment.php';alert('Please enter again for section C')</script>";
       }
       

       //SECTION D
       $query ="INSERT INTO `code3_uni` (`id`, `email`, `company`, `industry_coach`, `university_coach`, `student_mat_num`, `q1`, `q2`, `q3`, `q4`, `q5`,`q6`,`q7`,`q8`, `comment`) VALUES (NULL, '$email', '$company', '$ic', '$uniCoach', '$student', '$qd1', '$qd2', '$qd3', '$qd4', '$qd5','$qd6','$qd7','$qd8','$commentd');";
       //var_dump($query);
       if(mysqli_query($conn, $query)){

       }else{
           echo "<script>window.location.href='intern_assessment.php';alert('Please enter again for section D')</script>";
       }

       
       echo "<script>window.location.href='intern_assessment.php';alert('All information are being inserted')</script>";


?>