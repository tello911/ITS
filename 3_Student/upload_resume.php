<?php
    include 'session.php';
    include '../conn.php';
    $query = "SELECT `s_matrics_num` FROM `student` WHERE `s_email` = '".$_SESSION['u_id']."';";
    $results = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
   <?php include 'navbar.php' ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <!-- File Upload | Drag & Drop OR With Click & Choose -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            UPLOAD RESUME
                        </div>
                        <div class="body">
                            <form action="../upload_resume_process.php" id="frmFileUpload" method="post" enctype='multipart/form-data'>
                                <div class="dz-message">
                                    <?php while($mat_num = mysqli_fetch_array($results)){ ?>
                                    <input type="text" name="mat_num" value=<?php echo $mat_num['s_matrics_num'] ?> readonly>
                                    <?php }?>
                                </div>
                                <div class="fallback">
                                    <br><br>
                                    <input type="file" name="file" multiple />
                                </div>
                                <div>
                                    <br><br>
                                    <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Submit" class="btn btn-primary waves-effect">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
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