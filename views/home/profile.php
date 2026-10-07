<?php
// if (!isset($_SESSION["auth"])) {
//     header("location:/login");
// }
// require BASE_MODEL_DIR . "users.php";
require BASE_MODEL_DIR . "deejay.php";
require BASE_MODEL_DIR . "evenement.php";





$css = "assets/css/video.css";
$deejay = find_dj($_GET['id']);
$evenement = find_dj_evenement($_GET['id']);
$navbar = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "navbar.php";
$body = BASE_VIEW_DIR . "home/page" . DIRECTORY_SEPARATOR . "profile.php";
$footer = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "footer.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "base.php";
