<?php

class EmployeRepo {
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
        $employes = [];
        $sql = "SELECT * FROM employe";
        $reponse = $this->conn->query($sql);
        if ($reponse->rowCount() > 0) {
            $employes = $reponse->fetchAll();
        }
        return $employes;

    }
    public function recherche(string $recherche)
    {
     $employes = [];
     $sql = "SELECT * FROM employe where nom like '%$recherche%' or prenom like  '%$recherche%'  or email like '%$recherche%' or statut like '%$recherche%' ORDER BY id_emp DESC" ;
        $reponse = $this->conn->query($sql);
        if ($reponse->rowCount() > 0) {
            $employes = $reponse->fetchAll();
        }
        return $employes;
    }
}