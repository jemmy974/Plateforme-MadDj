<?php
if (!isset($_SESSION["auth"])) {
    header("location:/login");
}
require BASE_MODEL_DIR . "payement.php";
require BASE_MODEL_DIR . "deejay.php";

$payement = join_payement();
$body = BASE_VIEW_DIR . "admin/page" . DIRECTORY_SEPARATOR . "abonnement.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "baseDash.php";
$js = "/assetsDash/js/dataTable.js";
