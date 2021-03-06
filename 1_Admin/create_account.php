<?php
    include 'session.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

   <?php include 'navbar.php' ?>

    <!-- Create Account-->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Create Account</h2>
                            </div>
                            <form method="POST" action="../create_account_process.php">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <p>
                                                <b>Username</b>
                                            </p>
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Username" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <b>Password</b>
                                            </p>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="password" name="password" class="form-control" placeholder="password" required>
                                                </div>
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock</i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <b>Email Address</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" name="email" class="form-control email" placeholder="Ex: example@example.com" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix col-md-12 col-lg-12">
                                        <div class="col-md-4">
                                            <b>Mobile Phone Number</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                        <i class="material-icons">phone_iphone</i>
                                                    </span>
                                                <div class="form-line">
                                                    <input type="text" name="phone" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p>ROLES</p>
                                            <select name="role" class="form-control show-tick">
                                                <option value="admin">Admin</option>
                                                <option value="li_comm">2u2i LI Committee</option>
                                                <option value="student">Student</option>
                                                <option value="ic">Industry Coach</option>
                                                <option value="uc">Uni Coach</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Submit" class="btn btn-primary waves-effect">
                                </div>
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