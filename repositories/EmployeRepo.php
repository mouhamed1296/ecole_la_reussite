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
        $employes = [];
        $sql = "SELECT * FROM employe WHERE archive=1";
        $reponse = $this->conn->query($sql);
        if ($reponse->rowCount() > 0) {
            $eleves = $reponse->fetchAll();
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
    public function archiver(int $idEmploye)
   {
        $dateArchivage = date('y-m-d');
        $sql="UPDATE employe SET archive=1, date_archivage='$dateArchivage' WHERE id_emp=$idEmploye";
        $this->conn->exec($sql);
   }
   //on récupere l'informationde l'élève
   public function selectOne($id_emp){
    $employe = null;
    $res = $this->conn->query("SELECT * FROM employe WHERE id_emp=$id_emp");
    //$res = $req->execute(['id_eleve' => $id]);
    if ($res->rowCount() > 0) {
        $employe = $res->fetchAll()[0];
    }
    return $employe;
   }
}