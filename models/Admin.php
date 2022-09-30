<?php
require "Employe.php";
//use Employe;
class Admin extends Employe {
    /**
     * Class constructor.
     */
    public function __construct($idEmp, $nom, $prenom, $email, $mdp, $salaire, $statut)
    {
        parent::__construct($idEmp, $nom, $prenom, $email, $mdp, $salaire, $statut);
    }
    
    public static function seConnecter($email, $password){
        /* $conn = require_once('../config/db.php');
        $sql = "SELECT mdp FROM employe WHERE email='$email'";
        $res = $conn->query($sql);
        if ($res->rowCount() > 0){
            $mdp = $res->fetchColumn();
            if (password_verify($password, $mdp)){
                return true;
            }
        }
        return false; */
    }
}