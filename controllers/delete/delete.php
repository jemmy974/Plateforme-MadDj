<?php
require BASE_MODEL_DIR . "users.php";

$id = $_GET['id'];
$usersD = delete_users($id);

if ($users) {
    $_SESSION["success_message"] = "Modification reussi !";
    header('location:/table');
} else {
    $_SESSION["error_message"] = "Non reussi !";
    header('location:/table');
}
