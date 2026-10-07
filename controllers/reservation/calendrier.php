<?php
require BASE_MODEL_DIR . 'evenement.php';
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
// require BASE_MODEL_DIR . 'payement.php';


if (isset($_POST['submit'])) {
    if (!empty($_POST['nomE']) && !empty($_POST['dateE']) && !empty($_POST['heureE']) && !empty($_POST['descri']) && !empty($_POST['localisation'])) {
        // htmlspecialchars = Ialana ilay balise html sns
        // TRIM = ialana @lay espace manomboka
        $nomE = trim(htmlspecialchars($_POST['nomE']));
        $heureE = trim(htmlspecialchars($_POST['heureE']));
        $dateE = trim(htmlspecialchars($_POST['dateE']));
        $descri = trim(htmlspecialchars($_POST['descri']));
        $localisation = trim(htmlspecialchars($_POST['localisation']));


        $array_calendrier = [
            "Nom_evenement" => $nomE,
            "heure_evenement" => $heureE,
            "Description_evenement" => $descri,
            "Date_evenement" => $dateE,
            "localisation_evenement" => $localisation,
            "id_dj" => $_GET['id']
        ];

        $calendrier = create_evenement($array_calendrier);

        if ($calendrier) {
            $_SESSION["success_message"] = "Votre calendrier est effectuée !";
            header('location:/');
        }
    } else {
        $_SESSION["error_message"] = "Veuillez remplir le champ !";
        header("location:/");
    }
}
