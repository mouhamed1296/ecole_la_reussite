<?php
//inclusion du modèle Admin
require "../models/Admin.php";
//Démarrage de la session
session_start();

//inclusion du script de connexion à la base de donnée
$conn = require_once('../config/db.php');

//tableau pour les erreurs
$erreur = [];

//récupération des données saisies
$email = $_POST["email"];
$mdp = $_POST["mdp"];

//vérification de la saisie
if(isset($email) && isset($mdp)){
    //vérifier si les champs ne sont pas vide
    if (empty($mdp)) {
        $erreur["mdpVide"] = "Ce champ est requis";
        header("location: ../connexion?erreur_mdp=".$erreur['mdpVide']);
        exit;
    }
    if (empty($email)){
        $erreur["emailVide"] = "Ce champ est requis";
        header("location: ../connexion?erreur_email=".$erreur['mdpVide']);
        exit;
    }
    //vérifier si l'email saisie est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erreur["invalidEmail"] = "Veuillez saisir un email correct";
        header("location: ../connexion?erreur_email=".$erreur["invalidEmail"]);
        exit;
    }
    //récupération de l'utilisateur au niveau de la base de donnée
    $sql = "SELECT * FROM employe WHERE email='$email'";
    $res = $conn->query($sql);
    if ($res->rowCount() > 0){
        //récupération des donnés sous forme de tableau
        $user = $res->fetchAll()[0];

        //données récupéré de la base
        $password = $user['mdp'];
        $statut = $user['statut'];

        //vérification mot de passe
        if (!password_verify($mdp, $password)){
            //mot de passe incorrect
            $erreur["invalidMdp"] = "mot de passe incorrect";
            header("location: ../connexion?erreur_mdp=".$erreur["invalidMdp"]);
            exit;
        }

        //vérification du statut de l'utilisateur
        if ($statut === "admin"){
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["prenom"] = $user["prenom"];
            $_SESSION["email"] = $user["email"];
            Admin::seConnecter();
        }
    }
    
}