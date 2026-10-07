<?php

function all_reservation()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM reservation_dj");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function all_reservation_dj($id_resa)
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM reservation_dj WHERE statut='en attente' AND id_dj  = $id_resa");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function all_reservations_dj($id_resa)
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM reservation_dj WHERE statut='accepte' AND id_dj  = $id_resa");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function create_reservation($array)
{
    global $connexion;
    $query = $connexion->prepare("INSERT INTO reservation_dj(DateEvenement, heureEvenement, nom, Lieu,telephone, email, descri, Id_clients, id_dj) VALUES(:DateEvenement, :heureEvenement,:nom, :Lieu, :telephone, :email, :descri, :Id_clients, :id_dj)");
    $exec = $query->execute($array);
    return $exec;
}

function find_reservation(int $id)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM reservation_dj WHERE id = :id");
    $query->execute(array("id" => $id));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function update_reservation($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE reservation_dj SET DateEvenement=:dateE,heureEvenement=:heureE,Lieu=:lieuE, nom=:nom,telephone=:telephone,email=:email,descri=:descri WHERE id ={$id}");
    $exec = $query->execute($array);
    return $exec;
}

function update_acceptes($id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE reservation_dj SET statut='Accepté' WHERE id_reservation ={$id}");
    $exec = $query->execute();
    return $exec;
}

function delete_reservation($id)
{
    global $connexion;
    $query = $connexion->prepare("DELETE FROM reservation_dj WHERE id_reservation = {$id}");
    $exec = $query->execute();
    return $exec;
}

// function count_reservation()
// {
//     global $connexion;
//     $query = $connexion->prepare("SELECT count(*) as count FROM reservation_dj GROUP BY id_dj");
//     $exec = $query->execute();
//     $count = $query->fetch(PDO::FETCH_ASSOC);
//     return $count;
// }

function count_reservation($id_dj)
{
    global $connexion;

    $query = $connexion->prepare("SELECT COUNT(*) as count FROM reservation_dj WHERE id_dj = :id_dj");
    $query->bindParam(':id_dj', $id_dj, PDO::PARAM_INT);
    $query->execute();
    $count = $query->fetch(PDO::FETCH_ASSOC);

    if ($count && isset($count['count'])) {
        return $count['count'];
    }

    return 0;
}
