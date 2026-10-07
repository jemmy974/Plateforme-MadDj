<?php
if (!isset($_SESSION["auth"])) {
    header("location:/login");
}
require BASE_MODEL_DIR . "users.php";
require BASE_MODEL_DIR . "deejay.php";
require BASE_VIEW_DIR . "edit.php";
// require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "baseDash.php";