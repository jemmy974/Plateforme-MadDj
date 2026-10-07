<?php
require BASE_MODEL_DIR . 'reservation_dj.php';
require BASE_MODEL_DIR . 'deejay.php';
require BASE_MODEL_DIR . 'users.php';
// require BASE_MODEL_DIR . 'payement.php';


$id = $_GET['id'];
// var_dump($id);
// die;
$array_accept = [
    "statut" => "Accepté"
    // "Id_clients" => $_SESSION['auth_users']['Id_clients'],
    // "id_dj" => $_GET['id']
];

$accept = update_acceptes($id);

if ($accept) {
    $_SESSION["success_message"] = "La demande de réservatin est acceptée !";
    header('location:/');
} else {
    $_SESSION["error_message"] = "Veuillez remplir le champ !";
    header("location:/");
}
