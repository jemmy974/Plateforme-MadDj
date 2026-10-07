<?php


function all_users()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM users");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function create_users($array)
{
    global $connexion;
    $query = $connexion->prepare("INSERT INTO users(nom,prenom,telephone,dateN,pdp,email,mdp,statut,localisation) VALUES(:nom,:prenom,:telephone,:dateN,:pdp,:email,:mdp,:statut,:localisation)");
    $exec = $query->execute($array);
    return $exec;
}

function find_users(int $id)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM users WHERE id = :id");
    $query->execute(array("id" => $id));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function update_users($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE users SET nom =:nom,prenom =:prenom,telephone=:telephone,dateN =:dateN,pdp =:pdp,email =:email,mdp=:mdp,statut=:statut,photo=:photo WHERE id ={$id}");
    $exec = $query->execute($array);
    return $exec;
}
function desactive_users($id)
{
    global $connexion;
    $deejay = $connexion->query("SELECT deejay.email FROM abonnement INNER JOIN deejay ON deejay.id_dj= abonnement.id_dj WHERE abonnement.id_abonnement = {$id}");
    $data = $deejay->fetch(PDO::FETCH_ASSOC);
    $query = $connexion->prepare("UPDATE users SET statut='desactive' WHERE email = '{$data["email"]}'");
    $exec = $query->execute();
    return $exec;
}
function active_users($id)
{
    global $connexion;
    $deejay = $connexion->query("SELECT * FROM abonnement INNER JOIN deejay ON deejay.id_dj= abonnement.id_dj WHERE abonnement.id_abonnement = {$id}");
    $data = $deejay->fetch(PDO::FETCH_ASSOC);

    $query = $connexion->prepare("UPDATE users SET statut='Deejay' WHERE email = '{$data["email"]}'");
    $exec = $query->execute();
    return $exec;
}

function delete_users($id)
{
    global $connexion;
    $query = $connexion->prepare("DELETE FROM users WHERE Id_clients = {$id}");
    $exec = $query->execute();
    return $exec;
}

function count_users()
{
    global $connexion;
    $query = $connexion->prepare("SELECT count(*) as count FROM users");
    $exec = $query->execute();
    $count = $query->fetch(PDO::FETCH_ASSOC);
    return $count;
}


function auth($email, $password)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM users WHERE email='{$email}'");
    $execute  = $query->execute();
    if ($query->rowCount() > 0) {
        $users = $query->fetch(PDO::FETCH_ASSOC);
        if ($users['statut'] === "Deejay" && password_verify($password, $users["mdp"])) {
            $query = $connexion->prepare("SELECT * FROM deejay WHERE email='{$users['email']}'");
            $execute = $query->execute();
            if ($query->rowCount() > 0) {
                $deejay =  $query->fetch(PDO::FETCH_ASSOC);
                $_SESSION["auth"] = true;
                $_SESSION["auth_users"] = $users;
                $_SESSION["auth_deejay"] = $deejay;

                return $execute;
            }
            return false;
        }
        if ($users['statut'] === "Organisateur" && password_verify($password, $users["mdp"])) {
            $_SESSION["auth"] = true;
            $_SESSION["auth_users"] = $users;
            return $execute;
        }
        if ($users['statut'] === "admin" && password_verify($password, $users["mdp"])) {
            $_SESSION["auth"] = true;
            $_SESSION["auth_users"] = $users;
            return $execute;
        } else {
            $_SESSION["error_message"] = "Mot de passe n'existe pas !";
            return false;
        }
    } else {
        $_SESSION["error_message"] = "Address email n'existe pas !";
        return false;
    }
}
