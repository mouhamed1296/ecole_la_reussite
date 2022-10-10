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
        $sql = "SELECT * FROM employe WHERE archive=0";
        $reponse = $this->conn->query($sql);
        if ($reponse->rowCount() > 0) {
            $employes = $reponse->fetchAll();
        }
        return $employes;

    }
    public function selectAllArchive()
    {
        $eleves = [];
        $sql = "SELECT * FROM employe WHERE archive=1";
        $reponse = $this->conn->query($sql);
        if ($reponse->rowCount() > 0) {
            $eleves = $reponse->fetchAll();
        }
        return $eleves;
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
    public function archiver(int $idEmploye)
   {
        $dateArchivage = date('y-m-d');
        $sql="UPDATE employe SET archive=1, date_archivage='$dateArchivage' WHERE id_emp=$idEmploye";
        $this->conn->exec($sql);
   }
}