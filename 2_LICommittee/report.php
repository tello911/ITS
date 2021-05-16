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
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            REPORTS
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <!--th>Email</th-->
                                            <th>No. Application</th>
                                            <th>Status</th>
                                            <th>Marks 1</th>
                                            <th>Marks 2</th>
                                            <th>Marks 3</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <!--th>Email</th-->
                                            <th>No. Application</th>
                                            <th>Status</th>
                                            <th>Marks 1</th>
                                            <th>Marks 2</th>
                                            <th>Marks 3</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            <?php
                                            $query = "SELECT * FROM `student`";
                                            $results = mysqli_query($conn,$query);
                                            while ($row_users = mysqli_fetch_array($results)) {
                                                //output a row here
                                                echo "<tr>";
                                                echo '<form method="POST" action="../report_process.php">';
                                                echo "<td>".($row_users['s_name'])."</td>";
                                                echo "<td>".($row_users['s_email'])."</td>";
                                                //echo "<td>".($row_users['s_email'])."</td>";
                                                echo '<input type="hidden" name="s_id" value="'.$row_users['s_id'].'">';
                                                echo '<input type="hidden" name="s_name" value="'.$row_users['s_name'].'">';
                                                echo '<input type="hidden" name="s_matrics_num" value="'.$row_users['s_matrics_num'].'">';
                                                echo '<input type="hidden" name="s_email" value="'.$row_users['s_email'].'">';                                            
                                            ?>
                                                <td>
                                                    <div>
                                                        <p><?php echo $row_users['no_app']?></p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php 
                                                        echo "<input list='statuss' id='status' name='status' pattern='In Progress|Accepted|Finished' value=\"".$row_users['status']."\" />";
                                                    ?>
                                                        <br><p style='opacity:0'><?php echo $row_users['status']?>
                                                        <datalist id="statuss">
                                                            <select name="status">
                                                                <option value="In Progress">
                                                                <option value="Accepted">
                                                                <option value="Finished">
                                                            </select>
                                                        </datalist>
                                                </td>
                                                <td><?php echo $row_users['mark_1']?></td>
                                                <td><?php echo $row_users['mark_2']?></td>
                                                <td><?php echo $row_users['mark_3']?></td>
                                                <td>
                                                    <div class="button-demo">
                                                        <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Update" class="btn btn-primary waves-effect">
                                                        <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Reset" class="btn btn-danger waves-effect">
                                                    </div>
                                                </td>
                                            </form>
                                             <?php
                                            echo "</tr>";
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
    <!--script src="../../js/pages/tables/jquery-datatable.js"></script-->

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
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
</body>

</html>