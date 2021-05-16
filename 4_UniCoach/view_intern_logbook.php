<?php
    include 'session.php';
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

<?php include 'navbar.php' ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <!-- #END# Basic Examples -->
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
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Matrics Num</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Matrics Num</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM `logbook_student` INNER JOIN `student` ON `student`.`s_email`= `logbook_student`.`email` WHERE `student`.`s_uni_coach` = '".$_SESSION['u_email']."'";
                                        $results = mysqli_query($conn, $query);
                                        $i = 0;

                                        while($row_users = mysqli_fetch_array($results)){
                                    ?>
                                    <tr>
                                        <form method="POST" action="../view_intern_logbook_process.php">
                                        <td><?php echo $row_users['date'];?></td>
                                        <td><?php echo $row_users['title'];?></td>
                                        <td><?php echo html_entity_decode($row_users['content']);?></td>
                                        <td><?php echo $row_users['s_matrics_num'];?></td>
                                        <td><?php echo $row_users['s_name'];?></td>
                                        <td><?php echo $row_users['s_email'];?></td>
                                        <input type="hidden" name="id" value=<?php echo $row_users['id'];?> />
                                        <td>
                                            <input type="submit" name="submit" value="Approve" class="btn btn-success">&nbsp&nbsp
                                            <input type="submit" name="submit" value="Reject" class="btn btn-danger"><br><br>
                                            <details style="cursor:pointer;">
                                                <summary class="btn btn-info">Status</summary>
                                                <?php echo ($row_users['approval_industry']==1)?"Approved":"Rejected/ Not Checked";?>
                                            </details>
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
    <script>
        //Exportable table
        $('.js-exportable').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        });
    </script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>