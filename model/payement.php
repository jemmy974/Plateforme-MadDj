<?php
function all_payement()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM abonnement");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
// function all_limit()
// {
//     global $connexion;
//     $query = $connexion->query("SELECT * FROM abonnement LIMIT 4");
//     return $query->fetchAll(PDO::FETCH_ASSOC);
// }
function create_payement($array)
{
    global $connexion;
    $query = $connexion->prepare("INSERT INTO abonnement(nom, email, telephone, reference, typeA, mois, id_dj) VALUES(:nom, :email, :telephone, :reference,:typeA, :mois, :id_dj)");

    $exec = $query->execute($array);
    return $exec;
}

function find_payement(int $id)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM abonnement WHERE id_abonnement = :id_abonnement");
    $query->execute(array("id_abonnement" => $id));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function update_payement($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE abonnement SET statut=:statut WHERE id_abonnement ={$id}");
    $exec = $query->execute($array);
    return $exec;
}

function delete_payement($id)
{
    global $connexion;
    $query = $connexion->prepare("DELETE FROM deejay WHERE id = {$id}");
    $exec = $query->execute();
    return $exec;
}
// function count_deejay(){
//     global $connexion;
//     $query = $connexion->prepare("SELECT count(*) as count FROM deejay");
//     $exec = $query->execute();
//     $count = $query-> fetch(PDO::FETCH_ASSOC);
//     return $count;
// }

function count_payement()
{
    global $connexion;
    $query = $connexion->prepare("SELECT count(*) as count FROM abonnement");
    $exec = $query->execute();
    $count = $query->fetch(PDO::FETCH_ASSOC);
    return $count;
}
function join_payement()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM abonnement INNER JOIN deejay ON deejay.id_dj= abonnement.id_dj ORDER BY abonnement.id_abonnement desc");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
