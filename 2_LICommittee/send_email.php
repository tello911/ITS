<?php
    include 'session.php';
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<?php include 'navbar.php' ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-md-3">
                    <p>
                        <b>SELECT RECIPIENT</b>
                    </p>
                    <form method="POST">
                        <input type="text" name="subject" placeholder="Subject">
                        <br><br><br>
                        <select class="form-control show-tick"  name="email[]"multiple>
                            <?php
                                $query = "SELECT * FROM `student`;";
                                $results = mysqli_query($conn, $query);
                                while($row_users = mysqli_fetch_array($results)){
                            ?>
                            <option value=<?php echo $row_users['s_email'];?>><?php echo $row_users['s_name'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                        <br><br><br>
                        <input type="submit" name="submit" value="submit" />
                    </form>
                    <?php
                        if(isset($_POST['email'])){
                            $i = 0;
                            $email = "";
                        while($i < count($_POST['email'])){
                            $email .= $_POST['email'][$i].",";
                            $i++;
                    ?>
                            
                    <?php
                            } 
                    ?>
                            <br><br><br>
                            <button type="button" class="btn btn-primary"><a  href='mailto: <?php echo $email?>?subject=<?php echo $_POST['subject']?>' style="color:white">SEND EMAIL</a></button>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    <!-- Multi Select Css -->
    <link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>

</body>

</html>