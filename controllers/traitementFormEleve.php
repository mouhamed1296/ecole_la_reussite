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
     
     // afficher le résultat 
     /*echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'Nom : ' . $nom . "<br/>",' Prenom : ' . $prenom . "<br/>" ,' Email : ' . $mail. "<br/>", ' Niveau :' .$niveau. "<br/>", ' Tuteur: ' .$tuteur. "<br/>", 'Numéro Tuteur :' .$numTuteur. "<br/>", ' Date de Naissance : ' .$dateNaissance;
     */


     //insertion des donées dans la base
    $date_ins = date('d-m-y h:i:s');
    $sql = "INSERT INTO eleve(nom, prenom, email, niveau, nom_tuteur, numero_tuteur, date_naiss, date_ins) VALUES ('$nom', '$prenom', '$mail', '$niveau','$tuteur','$numTuteur', '$dateNaissance', '$date_ins')";
    
    //execution de la requete
    $conn->exec($sql);

    if ($conn->lastInsertId()) {
      header("location: ../eleve/ajout?success='élève enregitré avec succés'");
    }
 
    }

    // Vérifier s'il ya soumission avec le formulaire enregistrement des employés
    if (isset($_POST['submit1'])) {
    #Récuprétaion des information du formulaire
    $nom1 = $_POST['nom1'];
    $prenom1 = $_POST['prenom1'];
    $mail1 = $_POST['mail1'];
    $mdp = $_POST['mdp'];
    $salaire  = $_POST['salaire'];
    $statut = $_POST['statut'];

    # affichage des données recupérer
    echo ($nom1. "<br>" .$prenom1);

    }
?>