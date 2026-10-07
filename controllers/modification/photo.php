<?php
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
if (isset($_POST['update'])) {
    $targetdir = "upload/photo/";


    $image1 = $_FILES['photo1'];
    $photo1 = $image1['name'];
    $move1 = move_uploaded_file($image1['tmp_name'], $targetdir . $photo1);
    if (!$move1) {
        $_SESSION["error_message"] = "Impossible de telecharger une image! reesayez s'il vous plaît";
        header("location:/inscription");
    }

    $image2 = $_FILES['photo2'];
    $photo2 = $image2['name'];
    $move2 = move_uploaded_file($image2['tmp_name'], $targetdir . $photo2);
    if (!$move2) {
        $_SESSION["error_message"] = "Impossible de telecharger une image! reesayez s'il vous plaît";
        header("location:/");
    }


    $image3 = $_FILES['photo3'];
    $photo3 = $image3['name'];
    $move3 = move_uploaded_file($image3['tmp_name'], $targetdir . $photo3);
    if (!$move3) {
        $_SESSION["error_message"] = "Impossible de telecharger une image! reesayez s'il vous plaît";
        header("location:/");
    }

    $image4 = $_FILES['photo4'];
    $photo4 = $image4['name'];
    $move4 = move_uploaded_file($image4['tmp_name'], $targetdir . $photo4);
    if (!$move4) {
        $_SESSION["error_message"] = "Impossible de telecharger une image! reesayez s'il vous plaît";
        header("location:/");
    }

    $array_photo = [
        "photo1" => $photo1,
        "photo2" => $photo2,
        "photo3" => $photo3,
        "photo4" => $photo4,
    ];

    $photo = update_photo($array_photo, $_GET['id']);

    if ($photo) {
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
