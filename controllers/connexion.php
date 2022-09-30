<?php
use Models\Admin;

$error = [];
$email = $_POST["email"];
$mdp = $_POST["mdp"];

if(isset($email) && isset($mdp)){
    if (!empty($email) && !empty($mdp)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error["email"] = "Veuillez saisir un email correct";
        } else {
            Admin::seConnecter($email, $password);
        }
    } else {
        $error["email"] = "Ce champ est requis";
        $error["mdp"] = "Ce champ est requis";
        include_once("views/connection.php");
    }
}