<?php
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

<?php include 'navbar.php' ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    INTERN ASSESSMENT
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
                                            <th>Code 1</th>
                                            <th>Code 2</th>
                                            <th>Code 3</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Matrics <br>Number</th>
                                            <th>Code 1</th>
                                            <th>Code 2</th>
                                            <th>Code 3</th>
                                            <th>Comment</th>
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
                                            <form method="POST" action="../view_intern_assessment_process.php">
                                                <td><input type="number" name="code1" value="0"><br><br><input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Submit" class="btn btn-primary"></td>
                                            </form>
                                            <form method="POST" action="../view_intern_assessment_process.php">
                                                <td><input type="number" name="code2" value="0"><br><br><input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Submit" class="btn btn-primary"></td>
                                            </form>
                                            <form method="POST" action="../view_intern_assessment_process.php">
                                                <td><input type="number" name="code3" value="0"><br><br><input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Submit" class="btn btn-primary"></td>
                                            </form>
                                            <td>Noice</td>
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