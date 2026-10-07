

<?php
// if (!isset($_SESSION["auth"])) {
//     header("location:/login");
// }

require BASE_MODEL_DIR . "payement.php";
require BASE_MODEL_DIR . "deejay.php";
$payement = $_SESSION['auth_deejay']['id_dj'];
$navbar = BASE_VIEW_DIR . "partials" . DIRECTORY_SEPARATOR . "navbar.php";
$body = BASE_VIEW_DIR . "home/page" . DIRECTORY_SEPARATOR . "payement.php";
require BASE_VIEW_DIR . "layouts" . DIRECTORY_SEPARATOR . "base.php";

// $payement = create_payement($id);
