<form>
    <label><b>recherche</b></label>
<input type="search" placeholder="recherche..." name="recherche">
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
              $employes=$employeRepo->selectAll();            //appel de la méthode selectAll
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