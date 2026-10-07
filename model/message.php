<?php

function all_message()
{
    global $connexion;
    $query = $connexion->query("SELECT * FROM message");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function create($array)
{
    global $connexion;
    $query = $connexion->prepare("INSERT INTO message(name, email, texto, id_dj, id_clients) VALUES(:name,:email,:texto,:id_dj,:id_clients)");
    $exec = $query->execute($array);
    return $exec;
}

function find_message(int $id)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM message WHERE id_message = :id_message");
    $query->execute(array("id_message" => $id));
    return $query->fetch(PDO::FETCH_ASSOC);
}
function find_dj_message(int $id)
{
    global $connexion;
    $query = $connexion->prepare("SELECT * FROM message WHERE id_dj = :id_message");
    $query->execute(array("id_message" => $id));
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function update($array, $id)
{
    global $connexion;
    $query = $connexion->prepare("UPDATE message SET id_message=:id_message,id_expediteur=:id_expediteur,texto=:texto WHERE id ={$id}");
    $exec = $query->execute($array);
    return $exec;
}

function delete($id)
{
    global $connexion;
    $query = $connexion->prepare("DELETE FROM message WHERE id = {$id}");
    $exec = $query->execute();
    return $exec;
}
