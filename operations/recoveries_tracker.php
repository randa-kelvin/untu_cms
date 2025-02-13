<?php
include('../session/session.php');
include ('check_role.php');
include('../includes/controllers.php');
include('../controllers/recoveries.php');
$nav_header = "Recoveries Tracker Dashboard";

?>

<!DOCTYPE html>
<html >
<!-- HTML HEAD -->
<?php
include('../includes/header.php');
?>
<!-- /HTML HEAD -->
<body>

<!-- Top NavBar -->
<?php include('../includes/top-nav-bar.php'); ?>
<!-- Top NavBar -->

<?php include('../includes/right-sidebar.php'); ?>

<!-- sidebar-left -->
<?php include('../includes/side-bar.php'); ?>
<!-- /sidebar-left -->
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20">

        <?php include('../includes/dashboard/topbar_widget.php'); ?>

        <?php if ($_GET['menu'] == "main"){ ?>
            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                <div class="pd-20 card-box">
                    <h5 class="h4 text-blue mb-20">Recoveries Tracker</h5>
                    <div class="tab">
                        <ul class="nav nav-tabs customtab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#recoveries" role="tab" aria-selected="true">Recoveries Accounts</a>
                            </li>
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" data-toggle="tab" href="#assign_role" role="tab" aria-selected="false">Assign CMS Role</a>-->
<!--                            </li>-->

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="recoveries" role="tabpanel">
                                <div class="pd-20">
                                    <?php include('../includes/tables/recoveries/loans_table.php'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        <?php } elseif ($_GET['menu'] == "recovery_info") {?>
<!--            TODO: ADD INFO ON RECOVERIES             -->

                <div class="pd-ltr-20">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="pd-20 card-box">
                            <h5 class="h4 text-blue mb-20">Recovery Information:</h5>

                            <div class="pd-20 card-box mb-30">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <?php include('../includes/tables/recoveries/recovery_musoni_info.php'); ?>
                                    </div>
                                </div>
                            </div>


                            <div class="pd-20 card-box mb-30">
                                <div class="clearfix">
                                    <h4 class="text-blue h4"></h4>
                                </div>
                                <div class="wizard-content">
                                    <form action="" method="POST">

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <?php include('../includes/forms/recoveries/recovery_actions.php'); ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label><h5>Next Step</h5></label>
                                                    <input type="text" class="form-control" name="next_step" id="next_step" value=" Summons" readonly required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <?php include('../includes/tables/recoveries/recovery_steps.php'); ?>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label><h5>Notes</h5></label>
                                                    <textarea type="text" id="notes" name="notes" required="required" maxlength = "40" minlength="4" class="form-control">Notes</textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger" value="Submit" name="Submit">Submit</button>
                                    </div>
                                </div>
                                </form>

                            </div>

                        </div>
                        <?php include('../includes/footer.php');?>
                    </div>
                </div>


        <?php } ?>

</div>

<!-- js -->
<script src="../vendors/scripts/core.js"></script>
<script src="../vendors/scripts/script.min.js"></script>
<script src="../vendors/scripts/process.js"></script>
<script src="../vendors/scripts/layout-settings.js"></script>
<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>

<!-- js -->
<script src="../src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="../src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
<script src="../vendors/scripts/highchart-setting.js"></script>

<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="../vendors/scripts/dashboard.js"></script>

<!-- buttons for Export datatable -->
<script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="../src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="../src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="../vendors/scripts/datatable-setting.js"></script>

<!-- Google Tag Manager (noscript) -->
<noscript
><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
    ></iframe
    ></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>
