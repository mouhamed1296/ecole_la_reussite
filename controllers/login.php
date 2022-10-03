<?php
//inclusion du modèle Admin
require "../models/Admin.php";
//Démarrage de la session
session_start();

//inclusion du script de connexion à la base de donnée
$conn = require_once('../config/db.php');

//tableau pour les erreurs
$error = [];

//récupération des données saisies
$email = $_POST["email"];
$mdp = $_POST["mdp"];

//vérification de la saisie
if(isset($email) && isset($mdp)){
    //vérifier si les champs ne sont pas vide
    if (!empty($email) && !empty($mdp)) {
        //vérifier si l'email saisie est valide
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error["email"] = "Veuillez saisir un email correct";
        } else {
            //récupération de l'utilisateur au niveau de la base de donnée
            $sql = "SELECT * FROM employe WHERE email='$email'";
            $res = $conn->query($sql);
            if ($res->rowCount() > 0){
                //récupération des donnés sous forme de tableau
                $user = $res->fetchAll()[0];

                //données récupéré de la base
                $password = $user['mdp'];
                $statut = $user['statut'];

                //vérification du statut de l'utilisateur
                if ($statut === "admin"){
                    //vérification du mot de passe
                    if (password_verify($mdp, $password)){
                        $_SESSION["nom"] = $user["nom"];
                        $_SESSION["prenom"] = $user["prenom"];
                        $_SESSION["email"] = $user["email"];
                        //mot de passe vérifié
                       echo 'Bienvenue '.$_SESSION["prenom"].' '.$_SESSION["nom"];
                    } else {
                        //mot de passe incorrect
                        $_SESSION["erreur"] = "mot de passe incorrect";
                        header("location: ../connexion");
                    }
                }
            }
        }
    } else {
        $error["email"] = "Ce champ est requis";
        $error["mdp"] = "Ce champ est requis";
        include_once("views/connection.php");
    }
}