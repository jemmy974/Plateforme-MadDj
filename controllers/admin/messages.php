<?php

require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
require BASE_MODEL_DIR . 'message.php';


if (isset($_POST['envoyer'])) {
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['texto'])) {
        // htmlspecialchars = Ialana ilay balise html sns
        // TRIM = ialana @lay espace manomboka
        $nom = trim(htmlspecialchars($_POST['nom']));
        $message = trim(htmlspecialchars($_POST['texto']));
        $email = trim(htmlspecialchars($_POST['email']));
        // type A
        // if(!preg_match(regex)) mijery hoe micoresspondre @ le regx v le izy ao

        // if(!preg_match("/^[a-zA-Z]{3,}[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$email_biblio)){
        //     $_SESSION["error_message"] = "Address mail invalid";
        //     header("location:/inscription");
        //     exit;
        // }
        if (!preg_match("/^(033|034|032|038|037|020)[0-9]{7}$/ ", $telephone)) {
            // |+26133|+26134|+26132|+26138|+26137
            $_SESSION["error_message"] = "Numero telephone invalid;";
            header("location:/contact");
            exit;
        }

        $array_message = [
            "nom" => $nom,
            "email" => $email,
            "message" => $texto,
            "Id_clients" => $_SESSION['auth_users']['Id_clients'],
            "id_dj" => $_GET['id']
        ];

        $message = create_reservation($array_message);

        if ($message) {
            $_SESSION["success_message"] = "Votre réservation est placée !";
            header('location:/');
        }
    } else {
        $_SESSION["error_message"] = "Veuillez remplir le champ !";
        header("location:/");
    }
}
