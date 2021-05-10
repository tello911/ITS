<?php
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

<body class="theme-red">
    <?php include 'navbar.php' ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    VIEW INTERN
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Matrics <br>Number</th>
                                            <th>Course</th>
                                            <th>Resume</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Matrics <br>Number</th>
                                            <th>Course</th>
                                            <th>Resume</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM `student` INNER JOIN `user` ON `student`.`s_uni_coach`=`user`.`u_email` WHERE `s_uni_coach`='hazque99@gmail.com' AND `user`.`u_role`='uc'";
                                            $results = mysqli_query($conn, $query);
                                            while($row_users = mysqli_fetch_array($results)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row_users['s_name']?></td>
                                            <td><?php echo $row_users['s_email']?></td>
                                            <td><?php echo $row_users['s_matrics_num']?></td>
                                            <td><?php echo $row_users['s_course']?></td>
                                            <td>
                                                <details style="cursor:pointer;">
                                                    <summary>Resume</summary>
                                                    <p><a target="_blank" rel="noopener noreferrer" href="../../3_Student/resume/<?php echo $row_users['s_matrics_num']?>.pdf">Resume</a></p>
                                                </details>
                                            </td>
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
            <!-- #END# Basic Examples -->
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>