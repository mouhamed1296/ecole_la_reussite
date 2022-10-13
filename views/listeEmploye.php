<form class="search" action="" method="POST">
    <input type="search" id="search_emp_input" name="recherche" placeholder="recherche..." required>
    <input id="search_emp_button" type="submit" value="recherche">
</form>

<a href="/projet_gestion_ecole/views/listeEmployeArchive.php"
    style="margin-left: 30rem;padding: 1rem;background-color: lightgrey;text-decoration: none;color: black;">Liste
    eleve
    archivé</a>

<table>
    <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Statut</th>
        <th>Salaire</th>
        <th>Actions</th>
    </tr>

    <?php 
              //récupération des employés
        /* require_once "../repositories/EmployeRepo.php";
        $employeRepo = new EmployeRepo();               */  //creation d'une instance de EmployeRepo
        if (isset($_GET['id'])) {
            $id_emp = (int) $_GET['id'];
            $employeRepo->archiver($id_emp);
        } 
        $employes=$employeRepo->selectAll();  //appel de la méthode selectAll
        if (isset($_POST["recherche"])){
                $employes = $employeRepo->recherche($_POST["recherche"]);
        }
        if (count($employes) !== 0):    
        foreach($employes as $employe):
?>

    <tr>
        <td><?= $employe['matricule']?></td>
        <td><?= $employe['nom']?></td>
        <td><?= $employe['prenom']?></td>
        <td><?= $employe['email']?></td>
        <td><?= $employe['statut']?></td>
        <td><?= $employe['salaire']?></td>
        <td>
            <a href=<?="/projet_gestion_ecole/employe/edit?edit_id=".$employe['id_emp']?>>
                <i class="fas fa-pen-to-square" style="color: royalblue;"></i>
            </a>
            <span id="myBtn" data-id=<?= $employe['id_emp'] ?> class="archive">
                <i style="margin-left: .5rem;color:red;" class="fas fa-trash"></i>
            </span>
            <!-- The Modal -->
            <div id="popup">
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div style="display: flex;flex-direction: column;gap: 1rem;">
                            <p style="font-size: 2rem;">Voulez vous vraiment supprimer cet eleve</p>
                            <form action="/projet_gestion_ecole/admin" method="get">
                                <input type="hidden" class="supprimer" name="id">
                                <input type="submit" value="Supprimer">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
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