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
                            UPLOAD TECHNICAL REPORT
                        </div>
                        <div class="body">
                            <form action="../upload_technical_process.php" id="frmFileUpload" method="post" enctype='multipart/form-data'>
                                <div class="dz-message">
                                    <?php while($mat_num = mysqli_fetch_array($results)){ ?>
                                    <label>Matrics Number</label>
                                    <input type="text" name="mat_num" value=<?php echo $mat_num['s_matrics_num'] ?> readonly><br><br>
                                    <label>File name:</label>
                                    <input type="text" name="file_name" required/>
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
    <section class="content ">
        <div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="block-header">

            </div>

            <!-- File Upload | Drag & Drop OR With Click & Choose -->
            <div class="row clearfix">
                <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            TECHNICAL REPORT STATUS
                        </div>
                        <div class="body">
                            <div class="container col-lg-10 col-md-10 col-sm-12 col-xs-12">      
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Report</th>
                                                <th>Approval Industry</th>
                                                <th>Approval University</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM `technical` INNER JOIN `student` ON `technical`.`email` = `student`.`s_matrics_num` WHERE `student`.`s_email` = '".$_SESSION['u_email']."'";
                                            $results = mysqli_query($conn, $query);
                                            while($row_users = mysqli_fetch_array($results)){
                                            ?>
                                            <tr>
                                                <form method="post" action="../upload_technical_process2.php">
                                                    <td><?php echo $row_users['date'] ?></td>
                                                    <td><a href=<?php echo "../".$row_users['path'];?>><?php echo $row_users['report'] ?></a></td>
                                                    <td><?php echo $row_users['approval_industry'] ?></td>
                                                    <td><?php echo $row_users['approval_uni'] ?></td>
                                                    <input type="hidden" value=<?php echo $row_users['id']?> name="id"/>
                                                    <td><input type="submit" onclick="confirm('Are you sure?');"name="submit" class="btn btn-danger waves-effect" value="Delete"></td>
                                                </form>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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