<form class="search" action="" method="POST">
    <input type="search" id="search_emp_input" name="recherche" placeholder="recherche..." required>
    <input id="search_emp_button" type="submit" value="recherche">
</form>

<table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Statut</th>
        <th>Salaire</th>
        <th>Actions</th>
    </tr>

    <?php 
              //récupération des employés
        require_once "../repositories/EmployeRepo.php";
        $employeRepo = new EmployeRepo();                 //creation d'une instance de EmployeRepo
        $employes=$employeRepo->selectAll();  //appel de la méthode selectAll
        if (isset($_POST["recherche"])){
                $employes = $employeRepo->recherche($_POST["recherche"]);
        }
        if (count($employes) !== 0):    
        foreach($employes as $employe):
?>

    <tr>
        <td><?= $employe['nom']?></td>
        <td><?= $employe['prenom']?></td>
        <td><?= $employe['email']?></td>
        <td><?= $employe['statut']?></td>
        <td><?= $employe['salaire']?></td>
        <td><i class="fas fa-pen-to-square" style="color: royalblue;"></i>
            <i style="margin-left: .5rem;color:red;" class="fas fa-trash"></i>
        </td>
    </tr>
    <?php
     endforeach;
else:
?>
    <tr style="padding: 1rem;">
        <td colspan="6" align="center">Aucun résultats pour votre recherche</td>
    </tr>;
    <?php
endif;
?>
</table>