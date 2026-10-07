<?php

require BASE_MODEL_DIR . "users.php";

if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
        $email = trim(htmlspecialchars($_POST['email']));
        $mdp = trim(htmlspecialchars($_POST['mdp']));
        $auth = auth($email, $mdp);
        if ($auth && $_SESSION["auth_users"]["statut"] == "Deejay") {
            header("location:/profile?id={$_SESSION['auth_deejay']['id_dj']}");
        } elseif ($auth && $_SESSION["auth_users"]["statut"] == "Organisateur") {
            header("location:/");
        } elseif ($auth && $_SESSION["auth_users"]["statut"] == "admin") {
            header("location:/Dash");
        } else {
            header("location:/login");
        }
    }
} else {
    echo "daika";
}
