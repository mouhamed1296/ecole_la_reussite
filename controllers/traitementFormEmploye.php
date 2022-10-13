<?php
    //inclusion fichier connexion
    $conn = require_once('../config/db.php');
   // Vérifier s'il ya soumission avec le formulaire inscription des éleves
   if (isset($_POST['ajout_employe']) || isset($_POST['modifier_employe'])) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_POST['nom']; 
     $prenom = $_POST['prenom']; 
     $mail = $_POST['email'];
     $mdp = $_POST['mdp']; 
     $hashed_mdp = password_hash($mdp, PASSWORD_DEFAULT);
     $salaire = (float) $_POST['salaire'];
     if (empty($nom)){
      header("location: ../employe/ajout?erreur_vide_nom=Champ requis");
      exit;
     }
     if (empty($prenom)){
      header("location: ../employe/ajout?erreur_vide_prenom=Champ requis");
      exit;
     }
     if (empty($mail)){
      header("location: ../employe/ajout?erreur_vide_mail=Champ requis");
      exit;
     }
     if (isset($_POST['ajout_employe'])){
     if (empty($mdp)){
      header("location: ../employe/ajout?erreur_vide_mdp=Champ requis");
      exit;
     }}
     if (empty($salaire)){
      header("location: ../employe/ajout?erreur_vide_salaire=Champ requis");
      exit;
     }
     if (isset($_POST['ajout_employe'])) {
      $statut = $_POST['statut'];
     if (isset($_POST["statut_ens"])) {
        $statut_ens = $_POST["statut_ens"];
     }
     $sql = "SELECT email FROM employe WHERE email='$mail'";
     $res = $conn->query($sql);
     if ($res->rowCount() > 0){
      header("location: ../employe/ajout?erreur_email=addresse email déja pris");
      exit;
     }
     
     // afficher le résultat 
     /*echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'Nom : ' . $nom . "<br/>",' Prenom : ' . $prenom . "<br/>" ,' Email : ' . $mail. "<br/>", ' Niveau :' .$niveau. "<br/>", ' Tuteur: ' .$tuteur. "<br/>", 'Numéro Tuteur :' .$numTuteur. "<br/>", ' Date de Naissance : ' .$dateNaissance;
     */

    $sql =  "SELECT matricule from employe";
    $mat;
    $res = $conn->query($sql);
    if ($res->rowCount() > 0) {
        $matricules = $res->fetchAll();
        $matricule = $matricules[count($matricules) - 1]['matricule'];
        $increment = (int) explode("/", $matricule)[1] + 1;
        $mat = "MEP_2022/$increment";
    }
     //insertion des donées dans la base
    $date_ins = date('y-m-d');
    $sql = "INSERT INTO employe(matricule,nom, prenom, email, mdp, salaire, statut, date_ins) VALUES ('$mat', '$nom', '$prenom', '$mail', '$hashed_mdp','$salaire','$statut', '$date_ins')";
    
    //execution de la requete
    $conn->exec($sql);

    if ($conn->lastInsertId()) {
        $lastId = $conn->lastInsertId();
        if ($statut === "enseignant") {
            $sql = "INSERT INTO enseignant(id_emp, statut) VALUES ($lastId, '$statut_ens')";
            $conn->exec($sql);
        }
      header("location: ../employe/ajout?success=employe enregitré avec succés");
      exit;
    }
     } else {
      $edit_id = (int) $_POST['id'];
        $sql = "UPDATE employe SET nom='$nom', prenom='$prenom', email='$mail', salaire='$salaire' WHERE id_emp=$edit_id";
        $conn->exec($sql);
        header("location: ../employe/ajout?success=employe modifié avec succés");
      exit;
     }
    }
?>