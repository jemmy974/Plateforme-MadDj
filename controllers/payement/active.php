<?php
require BASE_MODEL_DIR . 'users.php';
require BASE_MODEL_DIR . 'payement.php';

$id = $_GET['id'];
$array_payement = [
    "statut" => "Payé",
];
$active = update_payement($array_payement, $id);

if ($active) {
    active_users($id);
    $_SESSION["success_message"] = "Activation du compte reussi !";
    header('location:/abonnement');
} else {
    $_SESSION["error_message"] = "Activation du compte non reussi !";
    header('location:/abonnement');
}
