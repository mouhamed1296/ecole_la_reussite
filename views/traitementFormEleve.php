
<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_POST['nom']; 
     $prenom = $_POST['prenom']; 
     $mail = $_POST['mail'];
     $niveau = $_POST['niveau']; 
     $tuteur = $_POST['tuteur'];
     $numTuteur = $_POST['num_tuteur'];
     $dateNaissance = $_POST['dateNaissance']; 
     
     // afficher le résultat 
     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'Nom : ' . $nom . "<br/>",' Prenom : ' . $prenom . "<br/>" ,' Email : ' . $mail. "<br/>", ' Niveau :' .$niveau. "<br/>", ' Tuteur: ' .$tuteur. "<br/>", 'Numéro Tuereu :' .$numTuteur. "<br/>", ' Date de Naissance : ' .$dateNaissance; 
     exit;


     //insertion des donées dans base

    $sql = "INSERT INTO eleve (nom, prenom, email, niveau, nom_tuteur, numero_tuteur, date_naiss) VALUES ('$nom', '$prenom', '$mail', '$niveau','$tuteur','$numNuteur', '$dateNaissance')";
    
    //execution de la requete
    $conn->exec($sql);
 
    }
?>