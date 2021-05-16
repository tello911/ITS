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
                APPROVE STUDENT
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            APPROVE STUDENT
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Matrics <br>Number</th>
                                            <th>Course</th>
                                            <th>Resume</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM `student` INNER JOIN `user` ON `student`.`ic_email`=`user`.`u_email` WHERE `ic_email`='".$_SESSION['u_email']."' AND `user`.`u_role`='ic'";
                                            $results = mysqli_query($conn, $query);
                                            while($row_users = mysqli_fetch_array($results)){
                                        ?>
                                        <tr>
                                            <form method="POST" action="../approve_student_process.php">
                                                <td><?php echo $row_users['s_name']?></td>
                                                <td><?php echo $row_users['s_email']?></td>
                                                <input type="hidden" name="email" value=<?php echo $row_users['s_email']?> />
                                                <td><?php echo $row_users['s_matrics_num']?></td>
                                                <td><?php echo $row_users['s_course']?></td>
                                                <td>
                                                    <details style="cursor:pointer;">
                                                        <summary>Resume</summary>
                                                        <?php if(file_exists("../3_Student/resume/".$row_users['s_matrics_num'].".pdf")){ ?>
                                                        <p><a target="_blank" rel="noopener noreferrer" href="../../3_Student/resume/<?php echo $row_users['s_matrics_num']?>.pdf">Resume</a></p>
                                                        <?php }else{ ?>
                                                        <p>Student have not uploaded the resume yet</p>
                                                        <?php } ?>
                                                    </details>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="submit" name="submit" class="btn btn-success" value="Approve">&nbsp&nbsp
                                                        <input type="submit" name="submit" class="btn btn-danger" value="Reject">
                                                    </div>
                                                </td>
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