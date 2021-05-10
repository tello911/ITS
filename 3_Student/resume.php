<?php
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

<body class="theme-red">
    <?php include 'navbar.php'?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MODALS</h2>
            </div>
            <!-- #END# Modal Size Example -->
            <!-- Material Design Colors -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                RESUME
                            </h2>
                            <div class="body">
                                <div class="button-demo js-modal-buttons">
                                    <div class="row clearfix">
                                        <form method="POST" action="../resume_process.php" enctype='multipart/form-data'>
                                            <input type="file" name="file" />
                                            <input type="submit" name="submit" value="Submit" />
                                        </form>
                                    </div>
                                    <div class="row clearfix">
                                        <br><br><br><br>
                                        <button type="button" data-color="red" class="btn bg-red waves-effect">RESUME</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Material Design Colors -->
                <!-- Modal Dialogs ====================================================================================================================== -->
                <!-- For Material Design Colors -->
                <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document" style="width: 1050px;height: 1100px;margin-right:auto !important;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel">Resume</h4>
                            </div>
                            <div class="modal-body">
                                <iframe src="../resume/<?php echo "A18CS0001" ?>.pdf" width="900" height="1000"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
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

    <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/ui/modals.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>