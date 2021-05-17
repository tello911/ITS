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
                <h2>EDITORS</h2>
            </div>

            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form method="post" action="../logbook_process.php">
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                    <div class="col-10">
                                        <input class="form-control" id="txtTo" type="date" value="2021-05-05" id="example-date-input" name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Title</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" value="Put your logbook title here" id="example-text-input" name="title">
                                    </div>
                                </div>
                                <textarea id="ckeditor" name="logbook">
                                </textarea>
                                <input type="submit" onclick="confirm('Are you sure?');" name="submit" value="Insert" class="btn btn-primary waves" />
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <!-- #END# CKEditor -->
            <div class="card col-lg-12">
                <div class="body">
                    <div class="container">
                        <h2>Logbook Status</h2>
                        <table class="table table-hover col-xl-9 col-lg-9">
                            <thead>
                                <tr>
                                    <th style="width: 35px !important">Firstname</th>
                                    <th style="width: 35px !important">Title</th>
                                    <th style="width: 50px !important">Content</th>
                                    <th style="width: 35px !important">Industry</th>
                                    <th style="width: 35px !important">University</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM `logbook_student` WHERE email = '".$_SESSION['u_email']."'";
                                    $results = mysqli_query($conn, $query);
                                    while($row_users = mysqli_fetch_array($results)){
                                ?>
                                <tr>
                                    <form method="POST" action="../logbook_process_2.php">
                                    <td style="width:  35px !important"><?php echo $row_users['date']?></td>
                                    <td style="width:  35px !important"><?php echo $row_users['title']?></td>
                                    <td style="width:  50px !important"><?php echo html_entity_decode($row_users['content'])?></td>
                                    <td style="width:  35px !important"><?php echo ($row_users['approval_industry']==0)?'No':'Yes'; ?></td>
                                    <td style="width:  35px !important"><?php echo ($row_users['approval_uni']==0)?'No':'Yes'; ?></td>
                                    <td>
                                        <input type="hidden" name="id" value=<?php echo $row_users['id']?> />
                                        <input type="submit" onclick="confirm('Are you sure you want to delete the logbook?');" name="submit" class="btn btn-danger" value="Delete"/>
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

    <!-- Ckeditor -->
    <script src="../../plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="../../plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    <script>
        $('#txtTo').datepicker({
            dateFormat: "dd/MM/yy",
            changeMonth: true,
            changeYear: true,
            ignoreReadonly: true,
            maxDate: 'now'
        });
    </script>
</body>

</html>