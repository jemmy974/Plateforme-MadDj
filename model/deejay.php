<?php
function all_dj()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM deejay");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function all_dj_abonnement()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM deejay INNER JOIN abonnement ON deejay.id_dj = abonnement.Id_dj WHERE abonnement.statut = 'payé' ");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function all_limit()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM deejay INNER JOIN abonnement ON deejay.id_dj = abonnement.Id_dj WHERE abonnement.statut = 'payé' LIMIT 4");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function create_dj($array)
{
    global $connexion;
    $query = $connexion->prepare("INSERT INTO deejay(nom, prenom, email, pdp, telephone, tarif, mdp, dateN, descri,localisation, couverture,photo1,photo2,photo3,photo4,faq1,faq2 ) VALUES(:nom, :prenom, :email, :pdp, :telephone, :tarif, :mdp, :dateN, :descri,:localisation,:couverture,:photo1,:photo2,:photo3,:photo4,:faq1,:faq2)");

    $exec = $query->execute($array);
    return $exec;
}

function find_dj(int $id)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM deejay WHERE id_dj = :id_dj");
    $query->execute(array("id_dj" => $id));
    return $query->fetch(PDO::FETCH_ASSOC);
}

function update_dj($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE deejay SET nom=:nom,tarif=:tarif, descri=:descri, localisation=:localisation WHERE id_dj ={$id}");
    $exec = $query->execute($array);
    return $exec;
}
function update_faq($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE deejay SET faq1=:faq1,faq2=:faq2 WHERE id_dj ={$id}");
    $exec = $query->execute($array);
    return $exec;
}
function update_photo($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE deejay SET photo1=:photo1, photo2=:photo2, photo3=:photo3, photo4=:photo4 WHERE id_dj ={$id}");
    $exec = $query->execute($array);
    return $exec;
}
function update_pdp($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE deejay SET pdp=:pdp WHERE id_dj ={$id}");
    $exec = $query->execute($array);
    return $exec;
}
function update_couverture($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE deejay SET couverture=:couverture WHERE id_dj ={$id}");
    $exec = $query->execute($array);
    return $exec;
}

function delete_dj($id)
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

function count_deejay()
{
    global $connexion;
    $query = $connexion->prepare("SELECT count(*) as count FROM deejay");
    $exec = $query->execute();
    $count = $query->fetch(PDO::FETCH_ASSOC);
    return $count;
}
