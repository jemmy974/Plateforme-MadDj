<?php

function all_evenement()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM evenement");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function create_evenement($array)
{
    global $connexion;
    $query = $connexion->prepare("INSERT INTO evenement(Nom_evenement,Description_evenement,Date_evenement,heure_evenement,localisation_evenement,id_dj) VALUES(:Nom_evenement,:Description_evenement,:Date_evenement,:heure_evenement,:localisation_evenement,:id_dj)");
    $exec = $query->execute($array);
    return $exec;
}

function find_evenement(int $id)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM evenement WHERE id_evenement = :id_evenement");
    $query->execute(array("id_evenement" => $id));
    return $query->fetch(PDO::FETCH_ASSOC);
}
function find_dj_evenement(int $id)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM evenement WHERE id_dj = :id_evenement");
    $query->execute(array("id_evenement" => $id));
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function update($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE evenement SET nom_evenement=:nom_evenement,Description_evenement=:Description_evenement,heure_evenement=:heure_evenement,localisation_evenement=:localisation_evenement,Date_evenement=:Date_evenement,Image=:Image WHERE id ={$id}");
    $exec = $query->execute($array);
    return $exec;
}

function delete($id)
{
    global $connexion;
    $query = $connexion->prepare("DELETE FROM evenement WHERE id = {$id}");
    $exec = $query->execute();
    return $exec;
}
