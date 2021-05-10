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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>WITH CAPTIONS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic_2" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-example-generic_2" data-slide-to="1" class="active"></li>
                                <li data-target="#carousel-example-generic_2" data-slide-to="2" class=""></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item">
                                    <img src="../../images/image-gallery/10.jpg">
                                    <div class="carousel-caption">
                                        <h3>First slide label</h3>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                                <div class="item active">
                                    <img src="../../images/image-gallery/12.jpg">
                                    <div class="carousel-caption">
                                        <h3>Second slide label</h3>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="../../images/image-gallery/19.jpg">
                                    <div class="carousel-caption">
                                        <h3>Third slide label</h3>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
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
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        });

    </script>
</body>

</html>