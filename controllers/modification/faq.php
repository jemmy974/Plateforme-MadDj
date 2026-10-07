<?php
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
if (isset($_POST['update'])) {
    if (!empty($_POST['faq1']) && !empty($_POST['faq2'])) {
        // htmlspecialchars = Ialana ilay b alise html sns
        // TRIM = ialana @lay espace manomboka
        $faq1 = trim(htmlspecialchars($_POST['faq1']));
        $faq2 = trim(htmlspecialchars($_POST['faq2']));




        $array_faq = [
            "faq1" => $faq1,
            "faq2" => $faq2,

        ];
        $faq = update_faq($array_faq, $_GET['id']);

        if ($faq) {
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
