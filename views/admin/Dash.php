<?php
if (!isset($_SESSION["auth"])) {
    header("location:/login");
}

require BASE_MODEL_DIR . "users.php";
require BASE_MODEL_DIR . "payement.php";
require BASE_MODEL_DIR . "deejay.php";

$membre = all_users();
$counts = count_payement();
$count = count_deejay();

$count_C = count_users();
$body = BASE_VIEW_DIR . "admin/page" . DIRECTORY_SEPARATOR . "Dash.php";
$js = "/assetsDash/js/dataTable.js";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "baseDash.php";
