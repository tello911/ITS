<?php
    include 'session.php';
    include '../conn.php';
?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

<?php include 'navbar.php'?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>PIC Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>PIC Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $email = $_SESSION['u_email'];
                                            $sql = "SELECT * FROM `student` WHERE `s_email` = '$email'";
                                            $lists = mysqli_query($conn, $sql);
                                            $row_data = mysqli_fetch_array($lists);

                                            $query = "SELECT * FROM `company`;";
                                            $results = mysqli_query($conn,$query);
                                            while ($row_users = mysqli_fetch_array($results)) {
                                        ?>
                                                <tr>
                                                    <form method="post" action="../list_company_process.php">    
                                                    <td><?php echo $row_users['name'];?></td>
                                                    <td><?php echo $row_users['address'];?></td>
                                                    <td><?php echo $row_users['picname'];?></td>
                                                    <td><?php echo $row_users['contact'];?></td>
                                                    <td><?php echo $row_users['email'];?></td>
                                                    <input type="hidden" name="i_email" value=<?php echo $row_users['email'];?> />
                                                    <td>
                                                        <div class="button-demo">
                                                            <?php
                                                                if($row_data['s_application']==0){
                                                            ?>
                                                                <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Apply" class="btn btn-primary waves-effect">
                                                            <?php
                                                                }
                                                            ?>
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