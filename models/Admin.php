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
    
    public static function seConnecter(){
       header("location: ../admin");
    }
}