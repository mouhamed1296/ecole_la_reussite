
<form class= "search" action="" method="GET">
        <input type="search" name="recherche" placeholder="recherche..." name="recherche" required >
         <input type="submit" value="recherche">
</form> 

<table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>email</th>
            <th>statut</th>
            <th>salaire</th>
            
    </tr>
       
            <?php 
              //récupération des employés
              require_once "../repositories/EmployeRepo.php";
              $employeRepo=new EmployeRepo();                 //creation d'une instance de EmployeRepo
              $employes=$employeRepo->selectAll();  //appel de la méthode selectAll
              if (isset($_GET["recherche"])){
                 $employes = $employeRepo->recherche($_GET["recherche"]);
              }       
            foreach($employes as $employe):?>
         
     <tr>
        <td><?= $employe['nom']?></td>
        <td><?= $employe['prenom']?></td>
        <td><?= $employe['email']?></td>
        <td><?= $employe['statut']?></td>
        <td><?= $employe['salaire']?></td>
</tr>
<?php endforeach; ?>
</table>
