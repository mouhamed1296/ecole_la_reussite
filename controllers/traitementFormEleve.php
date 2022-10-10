<?php
    //inclusion fichier connexion
    $conn = require_once('../config/db.php');
   // Vérifier s'il ya soumission avec le formulaire inscription des éleves
   if (isset($_POST['ajout_eleve'])) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_POST['nom']; 
     $prenom = $_POST['prenom']; 
     $mail = $_POST['email'];
     $niveau = $_POST['niveau']; 
     $tuteur = $_POST['tuteur'];
     $numTuteur = (int) $_POST['num_tuteur'];
     $dateNaissance = $_POST['date_naiss']; 
     if (empty($nom)){
      header("location: ../eleve/ajout?erreur_vide_nom=Champ requis");
      exit;
     }
     if (empty($prenom)){
      header("location: ../eleve/ajout?erreur_vide_prenom=Champ requis");
      exit;
     }
     if (empty($mail)){
      header("location: ../eleve/ajout?erreur_vide_mail=Champ requis");
      exit;
     }

     $sql = "SELECT email FROM eleve WHERE email='$mail'";
     $res = $conn->query($sql);
     if ($res->rowCount() > 0){
      header("location: ../eleve/ajout?erreur_email=addresse email déja pris");
      exit;
     }
     
     // afficher le résultat 
     /*echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'Nom : ' . $nom . "<br/>",' Prenom : ' . $prenom . "<br/>" ,' Email : ' . $mail. "<br/>", ' Niveau :' .$niveau. "<br/>", ' Tuteur: ' .$tuteur. "<br/>", 'Numéro Tuteur :' .$numTuteur. "<br/>", ' Date de Naissance : ' .$dateNaissance;
     */

$sql =  "SELECT matricule from eleve";
        $mat;
        $res = $conn->query($sql);
        if ($res->rowCount() > 0) {
            $matricules = $res->fetchAll();
            $matricule = $matricules[count($matricules) - 1]['matricule'];
            $increment = (int) explode("/", $matricule)[1] + 1;
            $mat = "MEL_2022/$increment";
        }
     //insertion des donées dans la base
    $date_ins = date('y-m-d');
    $sql = "INSERT INTO eleve(matricule, nom, prenom, email, niveau, nom_tuteur, numero_tuteur, date_naiss, date_ins) VALUES ('$mat','$nom', '$prenom', '$mail', '$niveau','$tuteur','$numTuteur', '$dateNaissance', '$date_ins')";
    
    //execution de la requete
    $conn->exec($sql);

    if ($conn->lastInsertId()) {
      header("location: ../eleve/ajout?success=élève enregitré avec succés");
      exit;
    }
 
    }
?>