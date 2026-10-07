<?php
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
if (isset($_POST['update'])) {
    if (!empty($_POST['pdp'])) {
        // htmlspecialchars = Ialana ilay b alise html sns
        // TRIM = ialana @lay espace manomboka
        $pdp = trim(htmlspecialchars($_POST['pdp']));
        $array_users = [
            "pdp" => $pdp,
        ];
        $users = update_pdp($array_users, $_GET['id']);

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
