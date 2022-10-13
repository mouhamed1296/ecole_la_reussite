<?php
require_once "Employe.php";
//use Employe;
class Secretaire extends Employe {
    /**
     * Class constructor.
     */
    public function __construct($idEmp, $nom, $prenom, $email, $mdp, $salaire, $statut)
    {
        parent::__construct($idEmp, $nom, $prenom, $email, $mdp, $salaire, $statut);
    }
    
    public static function seConnecter(){
       header("location: ../eleve/ajout");
    }
}