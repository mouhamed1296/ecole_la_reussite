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

}