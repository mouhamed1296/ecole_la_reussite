<link rel="stylesheet" href="css/listeEleve.css">




<form class= "voir" action="" method="GET">
        <input type="search" name="recherche" placeholder="recherche..." name="recherche" required >
         <input type="submit" value="recherche">
</form> 


<table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>email</th>
            <th>niveau</th>
            <th>nom_tuteur</th>
            <th>numero_tuteur</th>
            <th>date_naiss</th>
            <th>date_ins</th>
    </tr>

       
            <?php 
            //récupération des élèves
            require_once "../repositories/EleveRepo.php";
            $eleveRepo=new EleveRepo();                 //creation d'une instance de EleveRepo
            $eleves=$eleveRepo->selectAll();            //appel de la méthode selectAll
            //lister les élèves
            foreach($eleves as $eleve):?>
         
     <tr>
        <td><?= $eleve['nom'] ?></td>
        <td><?= $eleve['prenom'] ?></td>
        <td><?= $eleve['email'] ?></td>
        <td><?= $eleve['niveau'] ?></td>
        <td><?= $eleve['nom_tuteur'] ?></td>
        <td><?= $eleve['numero_tuteur'] ?></td>
         <td><?= $eleve['date_naiss'] ?></td> 
         <td><?= $eleve['date_ins'] ?></td>
</tr>
<?php endforeach; ?>
</table>
