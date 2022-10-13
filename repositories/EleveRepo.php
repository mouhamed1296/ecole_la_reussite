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
        $sql = "SELECT * FROM eleve WHERE archive=0";
        $reponse = $this->conn->query($sql);
        if ($reponse->rowCount() > 0) {
            $eleves = $reponse->fetchAll();
        }
        return $eleves;
    }

    public function selectAllArchive()
    {
        $eleves = [];
        $sql = "SELECT * FROM eleve WHERE archive=1";
        $reponse = $this->conn->query($sql);
        if ($reponse->rowCount() > 0) {
            $eleves = $reponse->fetchAll();
        }
        return $eleves;
    }
    
    public function recherche(string $recherche)
    {
    $eleves = [];
    $sql = "SELECT * FROM eleve where archive=0 and (nom like '%$recherche%' or prenom like  '%$recherche%'  or niveau like '%$recherche%') ORDER BY id_eleve DESC" ;
       $reponse = $this->conn->query($sql);
       if ($reponse->rowCount() > 0) {
           $eleves = $reponse->fetchAll();
       }
       return $eleves;
   }

   public function archiver(int $idEleve)
   {
        $dateArchivage = date('y-m-d');
        $sql="UPDATE eleve SET archive=1, date_archivage='$dateArchivage' WHERE id_eleve=$idEleve";
        $this->conn->exec($sql);
   }
   public function modifier($nom, $prenom, $email, $tuteur, $numeroTuteur, $dateNaissance)
   {
   
$req =$this->conn->prepare('UPDATE eleve SET prenom = :prenom, nom = :nom , niveau = :niveau, tuteur= :tuteur  , numero_tuteur = :numero_tuteur WHERE id_eleve = :idEleve');

$req->execute(array(

       'nom' => $nom,
       'prenom' => $prenom,
       'niveau' => $email,
       'tuteur' => $tuteur,
       'numero_tuteur' => $numeroTuteur,
       'date_naissance' => $dateNaissance,
       )
    
    );

}
  

   public function selectOne($idElv){
    $eleve = null;
    $res = $this->conn->query("SELECT * FROM eleve WHERE id_eleve=$idElv");
    //$res = $req->execute(['id_eleve' => $id]);
    if ($res->rowCount() > 0) {
        $eleve = $res->fetchAll()[0];
    }
    return $eleve;
   }
   public function count(){
    $compteEleve ="SELECT COUNT(*) FROM eleve";
    $res = $this->conn->query($compteEleve);
    return $res->fetchColumn();
   }
}