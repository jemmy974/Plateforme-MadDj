<?php
if (!isset($_SESSION["auth"])) {
    header("location:/login");
}

require BASE_MODEL_DIR . "reservation_dj.php";
require BASE_MODEL_DIR . "users.php";
require BASE_MODEL_DIR . "deejay.php";


$css = "assets/css/select2.min.css";
$css = "assets/daterangepicker.css";
$css = "assets/css/main.css";
$js = "assets/js/daterangepicker.js";



$formulaire = $_GET['id'];


$navbar = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "navbar.php";
$body = BASE_VIEW_DIR . "home/page" . DIRECTORY_SEPARATOR . "formulaire.php";
$footer = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "footer.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "base.php";
