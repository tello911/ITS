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
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ASSIGN UNIVERSITY COACH
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Matrics Number</th>
                                            <th>Email</th>
                                            <th>Uni Coach</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Matrics Number</th>
                                            <th>Email</th>
                                            <th>Uni Coach</th>
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
                                                echo '<form method="POST" action="../assign_uni_coach_process.php">';
                                                echo "<td>".($row_users['s_name'])."</td>";
                                                echo "<td>".($row_users['s_matrics_num'])."</td>";
                                                echo "<td>".($row_users['s_email'])."</td>";
                                                echo '<input type="hidden" name="s_id" value="'.$row_users['s_id'].'">';
                                                echo '<input type="hidden" name="s_name" value="'.$row_users['s_name'].'">';
                                                echo '<input type="hidden" name="s_matrics_num" value="'.$row_users['s_matrics_num'].'">';
                                                echo '<input type="hidden" name="s_email" value="'.$row_users['s_email'].'">';                                            
                                            ?>
                                                <td>
                                                    <div>
                                                        <input list="coach" id="uCoach" name="u_coach" value=<?php echo $row_users['s_uni_coach']?> />
                                                        <datalist id="coach">
                                                        <?php
                                                            $sql = "SELECT * FROM `user` WHERE u_role = 'uc';";
                                                            $result = mysqli_query($conn,$sql);
                                                            while ($row_data= mysqli_fetch_array($result)) {
                                                            ?>
                                                                <option value=<?php echo $row_data['u_email']?>><?php echo $row_data['u_name']?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </datalist>
                                                    </div>
                                                    <p>Current Coach :   <?php echo $row_users['s_uni_coach']?></p>
                                                </td>
                                                <td>
                                                    <div class="button-demo">
                                                        <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Update" class="btn btn-primary waves-effect">
                                                        <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Delete" class="btn btn-danger waves-effect">
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
            select: true,
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        });
    </script>
</body>

</html>