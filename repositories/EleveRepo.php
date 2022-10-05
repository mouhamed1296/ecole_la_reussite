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

}