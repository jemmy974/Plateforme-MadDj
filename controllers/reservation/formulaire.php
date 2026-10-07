<?php
require BASE_MODEL_DIR . 'reservation_dj.php';
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
// require BASE_MODEL_DIR . 'payement.php';


if (isset($_POST['reserver'])) {
    if (!empty($_POST['nom']) && !empty($_POST['dateE']) && !empty($_POST['heureE']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['descri']) && !empty($_POST['lieuE'])) {
        // htmlspecialchars = Ialana ilay balise html sns
        // TRIM = ialana @lay espace manomboka
        $nom = trim(htmlspecialchars($_POST['nom']));
        $heureE = trim(htmlspecialchars($_POST['heureE']));
        $telephone = trim(htmlspecialchars($_POST['telephone']));
        $email = trim(htmlspecialchars($_POST['email']));
        $dateE = trim(htmlspecialchars($_POST['dateE']));
        $descri = trim(htmlspecialchars($_POST['descri']));
        $lieuE = trim(htmlspecialchars($_POST['lieuE']));
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
            header("location:/");
            exit;
        }

        $array_formulaire = [
            "nom" => $nom,
            "heureEvenement" => $heureE,
            "descri" => $descri,
            "email" => $email,
            "DateEvenement" => $dateE,
            "telephone" => $telephone,
            "Lieu" => $lieuE,
            "Id_clients" => $_SESSION['auth_users']['Id_clients'],
            "id_dj" => $_GET['id']
        ];

        $formulaire = create_reservation($array_formulaire);

        if ($formulaire) {
            $_SESSION["success_message"] = "Votre réservation est placée !";
            header('location:/');
        }
    } else {
        $_SESSION["error_message"] = "Veuillez remplir le champ !";
        header("location:/");
    }
}
