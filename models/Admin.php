<?php
namespace Models;

class Admin extends Employe {
    /**
     * Class constructor.
     */
    public function __construct($idEmp, $nom, $prenom, $email, $mdp, $salaire, $statut)
    {
        parent::__construct($idEmp, $nom, $prenom, $email, $mdp, $salaire, $statut);
    }
    
    public static function seConnecter($email, $password){
        $conn = require_once('config/db.php');
        $sql = "SELECT id, email FROM employe WHERE email='$email' AND mdp='$password' AND statut = 'admin'";
        $res = $conn->query($sql);
        if ($res->rowCount() > 0){
            $user = $res->fetchAll();
            echo "connecté";
            exit;
        }
    }
}