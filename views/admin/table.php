<?php
if (!isset($_SESSION["auth"])) {
    header("location:/login");
}
require BASE_MODEL_DIR . "users.php";
$users = all_users();
$js = "/assetsDash/js/dataTable.js";
$body = BASE_VIEW_DIR . "admin/page" . DIRECTORY_SEPARATOR . "table.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "baseDash.php";
