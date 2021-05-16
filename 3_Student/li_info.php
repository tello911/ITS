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

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Info</th>
                                            <th>File</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>Info</th>
                                            <th>File</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            <?php
                                                $query = "SELECT * FROM `li_info`;";
                                                $results = mysqli_query($conn,$query);
                                                while ($row_users = mysqli_fetch_array($results)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_users['date'];?></td>
                                                <td><?php echo html_entity_decode($row_users['info']);?></td>
                                                <td>
                                                    <details>
                                                        <summary style="cursor:pointer;">Click here to download file</summary>
                                                        <a href="../../uploads/<?php echo $row_users['file']?>" download>Download File</a>
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
            <!-- #END# Exportable Table -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                    </div>
                    <div class="body">
                        <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                            <?php
                                $query = "SELECT * FROM `li_info`;";
                                $results = mysqli_query($conn,$query);
                                $i = 0;
                                while ($row_users = mysqli_fetch_array($results)) {
                            ?>
                                        <li data-target="../../../li_info.php#carousel-example-generic_2" data-slide-to=<?php echo $i++; ?> class=<?php echo ($i==0)?'active':''; ?>></li>
                            <?php
                                }
                            ?>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <?php
                                    $query = "SELECT * FROM `li_info`;";
                                    $results = mysqli_query($conn,$query);
                                    $i = 0;
                                    while ($row_users = mysqli_fetch_array($results)) {
                                ?>
                                        <div class="item<?php echo ($i++==0)?' active':''; ?> col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <!--mg src="../../images/image-gallery/Black.png"-->
                                            <iframe class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="../../uploads/<?echo $row_users['file']?>" style="width: 900px;height: 1000px;"></iframe>
                                            <div class="carousel-caption"></div>
                                            <?php echo html_entity_decode($row_users['info']); ?>
                                        </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="../li_info.php#carousel-example-generic_2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="../li_info.php#carousel-example-generic_2" role="button" data-slide="next">
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