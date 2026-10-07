<?php
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
if (isset($_POST['update'])) {
    if (!empty($_POST['nom']) && !empty($_POST['descri']) && !empty($_POST['tarif']) && !empty($_POST['localisation'])) {
        // htmlspecialchars = Ialana ilay b alise html sns
        // TRIM = ialana @lay espace manomboka
        $nom = trim(htmlspecialchars($_POST['nom']));
        $tarif = trim(htmlspecialchars($_POST['tarif']));
        $descri = trim(htmlspecialchars($_POST['descri']));
        $localisation = trim(htmlspecialchars($_POST['localisation']));




        $array_users = [
            "nom" => $nom,
            "tarif" => $tarif,
            "descri" => $descri,
            "localisation" => $localisation,
        ];
        $users = update_dj($array_users, $_GET['id']);

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
}
