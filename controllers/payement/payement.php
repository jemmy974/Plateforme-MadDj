<?php
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
require BASE_MODEL_DIR . 'payement.php';

if (isset($_POST['submit'])) {
    if (!empty($_POST['nom']) && !empty($_POST['reference']) && !empty($_POST['mois']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['typeA'])) {
        // htmlspecialchars = Ialana ilay b alise html sns
        // TRIM = ialana @lay espace manomboka
        $nom = trim(htmlspecialchars($_POST['nom']));
        $mois = trim(htmlspecialchars($_POST['mois']));
        $telephone = trim(htmlspecialchars($_POST['telephone']));
        $email = trim(htmlspecialchars($_POST['email']));
        $reference = trim(htmlspecialchars($_POST['reference']));
        $type = trim(htmlspecialchars($_POST['typeA']));


        // $dateNow = date("Y-m-d");

        // if(!preg_match(regex)) mijery hoe micoresspondre @ le regx v le izy ao

        // if(!preg_match("/^[a-zA-Z]{3,}[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$email_biblio)){
        //     $_SESSION["error_message"] = "Address mail invalid";
        //     header("location:/inscription");
        //     exit;
        // }
        if (!preg_match("/^(033|034|032|038|037|020)[0-9]{7}$/ ", $telephone)) {
            // |+26133|+26134|+26132|+26138|+26137
            $_SESSION["error_message"] = "Numero telephone invalid;";
            header("location:/payement");
            exit;
        }

        $array_payement = [
            "nom" => $nom,
            "mois" => $mois,
            "reference" => $reference,
            "email" => $email,
            "typeA" => $type,
            // "dateP" => $dateNow,
            "telephone" => $telephone,
            "id_dj" => $_SESSION['auth_deejay']['id_dj']
        ];

        $payement = create_payement($array_payement);

        if ($payement) {
            $_SESSION["success_message"] = "Votre mise à jour d'abonnement effectuer !";
            header('location:/');
        }
    } else {
        $_SESSION["error_message"] = "Veuillez remplir le champ !";
        header("location:/payement");
    }
}
