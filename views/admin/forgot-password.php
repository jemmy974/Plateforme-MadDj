<?php
if (!isset($_SESSION["auth"])) {
    header("location:/login");
}
$body = BASE_VIEW_DIR . "admin/page" . DIRECTORY_SEPARATOR . "forgot-password.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "baseDash.php";
