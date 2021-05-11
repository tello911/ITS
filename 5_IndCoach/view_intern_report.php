<?php
    include 'session.php';
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php'?>

<?php include 'navbar.php'; ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    INTERN REPORT
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
                                            <th>Report</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Matrics <br>Number</th>
                                            <th>Course</th>
                                            <th>Report</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                        <?php
                                            $query = "SELECT * FROM `student` INNER JOIN `user` ON `student`.`s_li_coach`=`user`.`u_email` WHERE `s_li_coach`='kassim@vitrox.com' AND `user`.`u_role`='ic'";
                                            $results = mysqli_query($conn, $query);
                                            while($row_users = mysqli_fetch_array($results)){
                                        ?>
                                            <td><?php echo $row_users['s_name']?></td>
                                            <td><?php echo $row_users['s_email']?></td>
                                            <td><?php echo $row_users['s_matrics_num']?></td>
                                            <td><?php echo $row_users['s_course']?></td>
                                            <td>
                                                <details style="cursor:pointer;">
                                                    <summary>Click here to see all the reports from the intern</summary>
                                                    <ul>
                                                        <?php
                                                            $query = "SELECT * FROM `logbook_student` WHERE `email` = '".$row_users['s_email']."'";
                                                            $result = mysqli_query($conn, $query);
                                                            while($row_data = mysqli_fetch_array($result)){
                                                        ?>
                                                                <li>
                                                                    <form method="POST" action="../view_intern_report_process.php"> 
                                                                    <p><a target="_blank" rel="noopener noreferrer" href="../../3_Student/resume/<?php echo $row_data['date']?>.pdf"><?php echo $row_data['date']?></a></p>
                                                                    <input type="hidden" name="id" value=<?php echo $row_data['id']?>>
                                                                    <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Approve" class="btn btn-success waves">&nbsp&nbsp
                                                                    <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Delete" class="btn btn-danger waves">
                                                                    </form>
                                                                </li>
                                                        <?php
                                                            }
                                                        ?>
                                                    </ul>
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