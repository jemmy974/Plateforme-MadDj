<?php
// if(!isset($_SESSION["auth"])){
//     header("location:/login");
// }
require BASE_MODEL_DIR . "evenement.php";
require BASE_MODEL_DIR . "users.php";
$calendrier = $_GET['id'];
$navbar = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "navbar.php";
$body = BASE_VIEW_DIR . "home/page" . DIRECTORY_SEPARATOR . "calendrier.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "base.php";
