<?php
if (!isset($_SESSION["auth"])) {
    header("location:/login");
}
// require BASE_MODEL_DIR . "users.php";
require BASE_MODEL_DIR . "users.php";
require BASE_MODEL_DIR . "deejay.php";
require BASE_MODEL_DIR . "reservation_dj.php";

$css = "assets/css/styles.css";
$css = "assets/css/all.css";
$css = "assets/css/styles1.css";



$deejay = all_dj();
$count = count_reservation($_SESSION['auth_deejay']['id_dj']);
$resa = all_reservation_dj($_SESSION['auth_deejay']['id_dj']);
$navbar = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "navbar.php";
$body = BASE_VIEW_DIR . "home/page" . DIRECTORY_SEPARATOR . "dashDj.php";
$footer = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "footer.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "base.php";
