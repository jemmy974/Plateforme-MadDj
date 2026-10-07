<?php
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
if (isset($_POST['update'])) {


    $couverture = $_FILES['couverture'];
    $targetdir = "upload/couverture/";
    $move = move_uploaded_file($couverture['tmp_name'], $targetdir . $couverture['name']);
    if (!$move) {
        $_SESSION["error_message"] = "Impossible de telecharger une image! reesayez s'il vous plaît";
        header("location:/");
    }


    $array_users = [
        "couverture" => $couverture['name'],
    ];
    $users = update_couverture($array_users, $_GET['id']);

    if ($users) {
        $_SESSION["success_message"] = "Modification reussi !";
        header('location:/');
    } else {
        $_SESSION["error_message"] = "Non reussi !";
        header('location:/');
    }
} else {
    $_SESSION["error_message"] = "Veuillez remplir le champ !";
    header("location:/");
}
