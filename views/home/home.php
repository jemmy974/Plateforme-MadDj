<?php
// if(!isset($_SESSION["auth"])){
//     header("location:/login");
// }
require BASE_MODEL_DIR . "deejay.php";
$css = "assets/css/video.css";

$deejay = all_limit();
// $deejay = all_dj_abonnement();
$navbar = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "navbar.php";
$body = BASE_VIEW_DIR . "home/page" . DIRECTORY_SEPARATOR . "home.php";
$footer = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "footer.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "base.php";
