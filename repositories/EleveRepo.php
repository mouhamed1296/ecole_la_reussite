<?php

class EleveRepo {
    private $conn;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->conn = require_once("../config/db.php");
    }

    public function selectAll()
    {
        $eleves = [];
        $sql = "SELECT * FROM eleve";
        $reponse = $this->conn->query($sql);
        if ($reponse->rowCount() > 0) {
            $eleves = $reponse->fetchAll();
        }
        return $eleves;
    }
    public function recherche(string $recherche)
    {
    $eleves = [];
    $sql = "SELECT * FROM eleve where nom like %$recherche% or prenom like  %$recherche%  or niveau like %$recherche% ORDER BY id_eleve DESC" ;
       $reponse = $this->conn->query($sql);
       if ($reponse->rowCount() > 0) {
           $eleves = $reponse->fetchAll();
       }
       return $eleves;
   }
}