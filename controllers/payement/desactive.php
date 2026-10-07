<?php
require BASE_MODEL_DIR . 'users.php';
require BASE_MODEL_DIR . 'payement.php';

$id = $_GET['id'];
$array_payement = [
    "statut" => "Non Payé",
];
$desactive = update_payement($array_payement, $id);

if ($desactive) {
    desactive_users($id);
    $_SESSION["success_message"] = "Modification reussi !";
    header('location:/abonnement');
} else {
    $_SESSION["error_message"] = "Non reussi !";
    header('location:/abonnement');
}
