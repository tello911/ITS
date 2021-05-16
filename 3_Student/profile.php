<?php
    include 'session.php';
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

<?php include 'navbar.php'?>

    <!-- Create Account-->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Update Account</h2>
                            </div>
                            <?php
                                $email = $_SESSION['u_email'];
                                $query = "SELECT * FROM `student` LEFT JOIN `user` ON `student`.`s_email` = `user`.`u_email` WHERE `s_email` = '$email';";
                                $results = mysqli_query($conn, $query);
                                $row_users = mysqli_fetch_array($results);
                            ?>
                            <form action="../profile_process.php" id="frmFileUpload" method="post" enctype='multipart/form-data'>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <img src="../testupload/<?php echo $row_users['s_matrics_num']?>.JPG" alt="Student Picture" width="100" height="100" style="border-radius: 50%;">
                                            <input type="file" name="file" multiple>
                                            <p>(Please clear cache after upload)</p>
                                        </div>
                                        <div class="col-md-5">
                                            <p>
                                                <b>Username</b>
                                            </p>
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Username" value=<?php echo $row_users['s_name']?> readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <p>
                                                <b>Password</b>
                                            </p>
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                        <i class="material-icons">lock</i>
                                                    </span>
                                                <div class="form-line">
                                                    <input type="password" name="password" class="form-control" placeholder="password" value=<?php echo $row_users['u_password']?>>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="row clearfix col-md-12">
                                            <div class="col-md-4">
                                                <b>Email Address</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                    <div class="form-line">
                                                        <input type="text" name="email" class="form-control email" value=<?php echo $row_users['s_email']?> readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Mobile Phone Number</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone_iphone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" name="phone" class="form-control mobile-phone-number" value=<?php echo $row_users['u_phone']?>>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Matrics Number</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">verified_user</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" name="mat_num" class="form-control" value=<?php echo $row_users['s_matrics_num']?> readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input name="submit" class="btn btn-primary waves-effect" type="submit" onclick="confirm('Are you sure?');" value="Submit">
                            </form>

                            </div>
                        </div>
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

    <!-- Bootstrap Colorpicker Js -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../../plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../../plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>