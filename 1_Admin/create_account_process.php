<?php
    include 'session.php';
    include '../conn.php';
    $name = $email = $gender = $comment = $website = "";

    if (isset($_POST['submit'])) {
        $name = test_input($_POST['name']);
        $password = test_input($_POST['password']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $role = test_input($_POST['role']);
    }
    $sql = "INSERT INTO User VALUES(DEFAULT,'".$name."','".$password."','".$phone."','".$email."','".$role."');";

    if (mysqli_query($conn, $sql)) {
        $sql = "INSERT INTO log_info VALUES('An account has been created by ','".$date."');";
        mysqli_query($conn,$sql);
        echo "<script>window.location.href='create_account.html';alert('An account for a ".$role." created successfully!')</script>";
      } else {
        echo $sql;
        //echo "<script>window.location.href='create_account.html';alert('Your SQL query have error ')</script>";
      }
      
      mysqli_close($conn);
    //echo "INSERT INTO Log VALUES('Admin Name','Insert User ".$name." as a ".$role."')";

    //echo "<script>window.location.href='create_account.html';alert('An account for a ".$role." created successfully!')</script>";
?>
<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>