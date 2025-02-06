<?php
include('../session/session.php');
include('check_role.php');
include "../includes/controllers.php";
$market_campaign_by_id = market_campaign_by_id($_GET['id']);

if (isset($_SESSION['show_modal']) && $_SESSION['show_modal']): ?>
    <script>
        $(document).ready(function () {
            $("#myModal").modal("show");
        });
    </script>
    <?php unset($_SESSION['show_modal']); // Clear flag after showing ?>
<?php endif;


$errors = array();
// Escape user inputs for security
if (isset($_POST['close_campaign'])) {
    $id = $_GET['id'];

    $url = "http://localhost:7878/api/utg/market_campaigns/campaignStatus/" . $id;
    $data_array = array(
        'campaignStatus' => "closed",
    );
    $market_campaign_by_id = json_encode($data_array);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $market_campaign_by_id);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    $resp = curl_exec($ch);

    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $headerStr = substr($resp, 0, $headerSize);
    $bodyStr = substr($resp, $headerSize);

    if (!curl_errno($ch)) {
        switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
            case 200:  # OK, show modal
                $_SESSION['info'] = "Success";
                $_SESSION['show_modal'] = true; // Set flag to trigger modal
                header('location: view_campaign.php?id='.$id); // Redirect to refresh the page
                exit();

            case 400:  # Bad Request
                $decoded = json_decode($bodyStr, true);
                $error_message = isset($decoded['error']) ? $decoded['error'] : 'Failed. Please try again.';
                $_SESSION['error'] = $error_message;
                header('location: open_campaigns.php');
                exit();

            case 401: # Unauthorized
                $_SESSION['error'] = 'Application failed. Please try again!';
                header('location: open_campaigns.php');
                exit();

            default:
                $_SESSION['error'] = 'Status update failed. Please try again!';
                header('location: view_campaigns.php');
                exit();
        }
    }
    curl_close($ch);

}
?>

<!DOCTYPE html>
<html>
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
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">


            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Campaign and Marketing</h4>
                </div>
                <div class="row clearfix justify-content-center">
                    <div class="col-sm-12 col-md-10 mb-30">
                        <div class="card card-box text-left">
                            <div class="card-body">
                                <h5 class="card-title">Campaign Details</h5>

                                <!-- First Row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Campaign Name:</strong></label>
                                            <p><?= $market_campaign_by_id["campaignName"] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Branch:</strong></label>
                                            <p><?= $market_campaign_by_id["branchName"] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second Row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>City:</strong></label>
                                            <p><?= $market_campaign_by_id["city"] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Zone:</strong></label>
                                            <p><?= $market_campaign_by_id["zoneArea"] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Third Row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Sector:</strong></label>
                                            <p><?= $market_campaign_by_id["sector"] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Subsector:</strong></label>
                                            <p><?= $market_campaign_by_id["subSector"] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fourth Row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Value Chain:</strong></label>
                                            <p><?= $market_campaign_by_id["valueChain"] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Venue:</strong></label>
                                            <p><?= $market_campaign_by_id["venue"] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fifth Row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Resources Needed:</strong></label>
                                            <p><?= $market_campaign_by_id["resourceNeed"] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Target Audience:</strong></label>
                                            <p><?= $market_campaign_by_id["targetAudience"] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sixth Row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Objectives:</strong></label>
                                            <p><?= $market_campaign_by_id["objectives"] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Key Performance Indicator:</strong></label>
                                            <p><?= $market_campaign_by_id["keyPerformanceIndicator"] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Seventh Row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Start Date:</strong></label>
                                            <p><?= $market_campaign_by_id["startDate"] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>End Date:</strong></label>
                                            <p><?= $market_campaign_by_id["endDate"] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Eighth Row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Loan Officer:</strong></label>
                                            <p><?= $market_campaign_by_id["allocatedLoanOfficer"] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Campaign Status:</strong></label>
                                            <p><?= $market_campaign_by_id["campaignStatus"] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <!-- Action Buttons -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="campaign_and_marketing.php?menu=main" class="btn btn-primary">Back</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <form action="" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $_GET['$id'] ?>"/>
                                            <button type="submit" class="btn btn-danger" name="close_campaign">Close
                                                Campaign
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- success Popup html Start -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center font-18">
                            <h3 class="mb-20">Campaign Closed!</h3>
                            <div class="mb-30 text-center">
                                <img src="../vendors/images/success.png"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-0">
                                    <a class="btn btn-danger btn-lg btn-block" href="campaign_and_marketing.php?menu=main">Ok</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- success Popup html End -->
        </div>
        <?php include('../includes/footer.php'); ?>
    </div>
</div>

<!-- js -->
<script src="../vendors/scripts/core.js"></script>
<script src="../vendors/scripts/script.min.js"></script>
<script src="../vendors/scripts/process.js"></script>
<script src="../vendors/scripts/layout-settings.js"></script>
<script src="../src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="../vendors/scripts/steps-setting.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>
