<?php
    include 'session.php';
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

<?php include 'navbar.php' ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    STUDENT PROGRESS
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Matrics Num</th>
                                            <th>LI Coach</th>
                                            <th>Uni Coach</th>
                                            <th>Course</th>
                                            <th>Application</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Matrics Num</th>
                                            <th>LI Coach</th>
                                            <th>Uni Coach</th>
                                            <th>Course</th>
                                            <th>Application</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM `student`";
                                            $results = mysqli_query($conn,$query);
                                            while ($row_users = mysqli_fetch_array($results)) {
                                        ?>
                                            <tr>
                                                <td><? echo $row_users['s_name']?></td>
                                                <td><? echo $row_users['s_email']?></td>
                                                <td><? echo $row_users['s_matrics_num']?></td>
                                                <td><? echo ($row_users['s_li_coach']) ? $row_users['s_li_coach']:'-'; ?></td>
                                                <td><? echo ($row_users['s_uni_coach']) ? $row_users['s_uni_coach']:'-';?></td>
                                                <td><? echo $row_users['s_course']?></td>
                                                <td><? echo $row_users['no_app']?></td>
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
            <!-- #END# Exportable Table -->
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