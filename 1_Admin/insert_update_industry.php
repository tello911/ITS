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
                <h2>
                    INSERT and UPDATE INDUSTRY
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INSERT and UPDATE INDUSTRY
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-striped table-hover dataTable js-exportable">
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
                                            $query = "SELECT * FROM `company`;";
                                            $results = mysqli_query($conn, $query);
                                            while($row_users = mysqli_fetch_array($results)){
                                        ?>
                                            <tr>
                                                <form method="POST" action="../insert_update_industry_process.php">
                                                    <input type="hidden" name="id" value=<?php echo $row_users['id']?> readonly/>
                                                    <td><input type="text" name="name" value=<?php echo $row_users['name']?> /><br><p style="opacity:0"><?php echo $row_users['name'];?></p></td>
                                                    <td>
                                                        <textarea id="address" name="address" rows="4" cols="50"><?php echo $row_users['address'];?></textarea>
                                                    </td>
                                                    <td>
                                                    <?php 
                                                        echo "<input type='text' name='picname' value=\"".$row_users['picname']."\" />";
                                                    ?>
                                                        <br><p style='opacity:0'><?php echo $row_users['picname']?>
                                                    </td>
                                                    <td><input type="text" name="contact" value=<?php echo $row_users['contact']?> /><br><p style="opacity:0"><?php echo $row_users['email']?></td>
                                                    <td><input type="text" name="email" value=<?php echo $row_users['email']?> readonly/><br><p style="opacity:0"><?php echo $row_users['contact']?></td>
                                                    <td>
                                                        <div class="button-demo">
                                                            <input type="submit" value="Update" class="btn btn-success waves-effect" name="submit" onclick="confirm('Are you sure?');" />
                                                            <input type="submit" value="Delete" class="btn btn-danger waves-effect" name="submit" onclick="confirm('Are you sure?');" />
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
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Create Account</h2>
                            </div>
                            <form method="POST" action="../insert_update_industry_process.php">
                                <div class="body">
                                    <div class="row clearfix col-md-12 col-lg-12">
                                        <div class="col-md-4">
                                            <p>
                                                <b>Username</b>
                                            </p>
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">business</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Company Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <b>PIC Name</b>
                                            </p>
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" name="picname" class="form-control" placeholder="PIC Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <b>Address</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">local_post_office</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" name="address" class="form-control email" placeholder="Company Address" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix col-md-12 col-lg-12">
                                        <div class="col-md-4">
                                            <b>Mobile Phone Number</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                        <i class="material-icons">phone_iphone</i>
                                                    </span>
                                                <div class="form-line">
                                                    <input type="text" name="contact" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Email</p>
                                            <?php
                                                    $query = "SELECT * FROM `user` LEFT JOIN `company` ON `user`.`u_email` = `company`.`email` WHERE `user`.`u_role` = 'ic' AND `company`.`email` IS NULL";
                                                    $results = mysqli_query($conn, $query);
                                                    $pattern = ""; 
                                                    while($row_data = mysqli_fetch_array($results)){
                                                        $pattern .= $row_data['u_email']."|";
                                                    }
                                                    $pattern = rtrim($pattern, "|");
                                            ?>
                                            <input list="emails_" name="email" id="email" title="Please make sure you've already registered the e-mail" pattern=<?php echo $pattern; ?> >
                                            <datalist id="emails_">
                                                <?php
                                                    $query = "SELECT u_email FROM `user` WHERE `u_role` = 'ic'";
                                                    $results = mysqli_query($conn, $query);
                                                    while($row_users = mysqli_fetch_array($results)){
                                                ?>
                                                    <option value=<?php echo $row_users['u_email'] ?>><?php echo $row_users['u_email'] ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                    <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Submit" class="btn btn-primary waves-effect" >
                                </div>
                            </form>

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