<?php
require BASE_MODEL_DIR . "users.php";
require BASE_MODEL_DIR . "reservation_dj.php";

$id = $_GET['id'];
$reservationD = delete_reservation($id);

if ($reservationD) {
    $_SESSION["success_message"] = "Modification reussi !";
    header('location:/dashDj?id={$id}');
} else {
    $_SESSION["error_message"] = "Non reussi !";
    header('location:/');
}
