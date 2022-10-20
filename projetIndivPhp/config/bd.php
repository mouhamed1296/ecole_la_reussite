<?php

try {
     $bd = gestionInscription;
     $monCompte = root;
     $mdp ="";
     $serverLocal= localhost;

    $conn = new PDO("mysql:host=$serverLocal;dbname=$bd", $monCompte, $mdp);


} catch (PDOException $e) {
    echo "Erreur de connexion! " . $e->getMessage() . "<br/>";
    die();
}