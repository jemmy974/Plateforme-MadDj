<?php

define("HOST", "localhost");
define("DBNAME", "projet");
define("USERNAME", "root");
define("PASSWORD", "");

$dns = "mysql:host=" . HOST . ";dbname=" . DBNAME . ";";

try {

$connexion = new PDO($dns, USERNAME, PASSWORD);
} catch (\PDOException $th) {
echo "Erreur de connexion au serveur";
}
