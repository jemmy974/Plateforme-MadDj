<?php
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';

if (isset($_POST['submit'])) {
  if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['localisation']) && !empty($_POST['Date']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['mdp']) && !empty($_POST['Cmdp']) && !empty($_POST['Deejay'])) {
    // htmlspecialchars = Ialana ilay b alise html sns
    // TRIM = ialana @lay espace manomboka
    $nom = trim(htmlspecialchars($_POST['nom']));
    $prenom = trim(htmlspecialchars($_POST['prenom']));
    $localisation = trim(htmlspecialchars($_POST['localisation']));
    $telephone = trim(htmlspecialchars($_POST['telephone']));
    $Date = trim(htmlspecialchars($_POST['Date']));
    $email = trim(htmlspecialchars($_POST['email']));
    $mdp = trim(htmlspecialchars($_POST['mdp']));
    $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    $Cmdp = trim(htmlspecialchars($_POST['Cmdp']));
    $Deejay = trim(htmlspecialchars($_POST['Deejay']));


    $image = $_FILES['pdp'];
    $targetdir = "upload/pdp/";
    $pdp = $image['name'];
    $move = move_uploaded_file($image['tmp_name'], $targetdir . $pdp);
    if (!$move) {
      $_SESSION["error_message"] = "Impossible de telecharger une image! reesayez s'il vous plaît";
      header("location:/inscription");
    }
    // if(!preg_match(regex)) mijery hoe micoresspondre @ le regx v le izy ao

    // if(!preg_match("/^[a-zA-Z]{3,}[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$email_biblio)){
    //     $_SESSION["error_message"] = "Address mail invalid";
    //     header("location:/inscription");
    //     exit;
    // }
    if (!preg_match("/^(033|034|032|038|037|020)[0-9]{7}$/ ", $telephone)) {
      // |+26133|+26134|+26132|+26138|+26137
      $_SESSION["error_message"] = "Numero telephone invalid;";
      header("location:/inscription");
      exit;
    }

    if ($Deejay == "Deejay") {

      $array_deejay = array(
        "nom" => $nom,
        "prenom" => $prenom,
        "localisation" => $localisation,
        "telephone" => $telephone,
        "pdp" => $pdp,
        "email" => $email,
        "couverture" => '',
        "dateN" => $Date,
        "mdp" => $mdp,
        "descri" => '',
        "tarif" => 0,
        "faq1" => '',
        "faq2" => '',
        "photo1" => '',
        "photo2" => '',
        "photo3" => '',
        "photo4" => '',
      );
      $deejay = create_dj($array_deejay);

      if ($deejay) {
        $array_clients = [
          "nom" => $nom,
          "prenom" => $prenom,
          "localisation" => $localisation,
          "dateN" => $Date,
          "pdp" => $pdp,
          "email" => $email,
          "mdp" => $mdp,
          "statut" => $Deejay,
          "telephone" => $telephone,

        ];

        $clients = create_users($array_clients);

        if ($clients) {
          $_SESSION["success_message"] = "Creation de compte effectuer !";
          header('location:/login');
        } elseif ($deejay) {
          $_SESSION["success_message"] = "Creation de compte effectuer !";
          header('location:/profile');
        }
      } else {
        $_SESSION["error_message"] = "Une erreur est survenue !";
        header("location:/inscription");
      }
    } else {
      $array_clients = [
        "nom" => $nom,
        "prenom" => $prenom,
        "dateN" => $Date,
        "pdp" => $pdp,
        "email" => $email,
        "mdp" => $mdp,
        "statut" => $Deejay,
        "localisation" => $localisation,
        "telephone" => $telephone
      ];

      $clients = create_users($array_clients);

      if ($clients) {
        $_SESSION["success_message"] = "Creation de compte effectuer !";
        header('location:/login');
      }
    }
  } else {
    $_SESSION["error_message"] = "Veuillez remplir le champ !";
    header("location:/inscription");
  }
}
