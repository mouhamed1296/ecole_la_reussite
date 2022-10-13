<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header("location: connexion");
        //var_dump($_SESSION['statut']);
        exit;
    }
    if(isset($_SESSION['statut']) && $_SESSION['statut'] == "secretaire") {
        header("location: eleve/ajout");
        exit;
    }

    //$conn = require_once('../config/db.php');
    require_once "../repositories/EmployeRepo.php";
        $employeRepo = new EmployeRepo();          
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="js/archive.js"></script>

    <link rel="stylesheet" href="css/dashboardAdmin.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/listeEmploye.css">
</head>

<body>
    <form class="search" action="" method="POST">
        <input type="search" id="search_emp_input" name="recherche" placeholder="recherche..." required>
        <input id="search_emp_button" type="submit" value="recherche">
    </form>
    <div id="topMenu">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-sharp fa-solid fa-bars"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="views/formEployes.php">Ajouter Employés</a></li>
                        <li><a class="dropdown-item" href="#"><br></a></li>
                        <li><a class="dropdown-item" href="#">Lister employés</a></li>
                    </ul>
                </li>
            </div>
        </nav>

        <!--<header>-->
        <?php
        include "header.php";
    ?>
        <!--</header>-->

    </div>

    <body>

        <main>
            <div id="prestationDasboard">
                <h1>Tableau de bord Administrateur</h1>
            </div>

            <div id="tab">
                <a href="eleve/ajout" style="text-decoration: none; color:black;">
                    <div class="total">
                        <div class="nbrTotal">
                            <!-- Compter les élèves. -->
                            <p style="font-size: 2rem;">
                                <?php
                            echo $employeRepo->countEleveArchiver() ?? 0;
                            /* $resultat = $conn->query($comptEleve ) or die ("La requête SQL a échoué !"); */
                
                        ?>
                            </p>
                        </div>
                        <span>Élèves</span>
                    </div>
                </a>
                <a href="employe/ajout" style="text-decoration: none; color:black">
                    <div class="total">
                        <div class="nbrTotal">
                            <!-- Compter les employe. -->
                            <p style="font-size: 2rem;">
                                <?php
                            echo $employeRepo->countArchiver() ?? 0;
                            /* $resultat = $conn->query($comptEleve ) or die ("La requête SQL a échoué !"); */
                
                        ?>
                            </p>
                        </div>
                        <span>Employés</span>
                    </div>
                </a>
            </div>
            <div id="emplist">

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
        /*require_once "../repositories/EmployeRepo.php";
        $employeRepo = new EmployeRepo();*/                 //creation d'une instance de EmployeRepo
        if (isset($_GET['id'])) {
            $id_emp = (int) $_GET['id'];
            $employeRepo->desarchiver($id_emp);
        } 
        $employes=$employeRepo->selectAllArchive();  //appel de la méthode selectAll
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
                            <span id="myBtn" data-id=<?= $employe['id_emp'] ?> class="archive"
                                style="display: flex;padding: .5rem;background-color: lightgrey; margin-top: .5rem;">
                                désarchiver
                            </span>
                            <!-- The Modal -->
                            <div id="popup">
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <div style="display: flex;flex-direction: column;gap: 1rem;">
                                            <p style="font-size: 2rem;">Voulez vous vraiment désarchiver cet employe</p>
                                            <form action="/projet_gestion_ecole/views/listeEmployeArchive.php"
                                                method="get">
                                                <input type="hidden" class="supprimer" name="id">
                                                <input type="submit" value="Désarchiver">
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
            </div>
        </main>

        <!-- <footer>-->

        <?php
            include "footer.php";
        ?>


        <!--</footer>-->




        <script src="js/dashboardAdmin.js"></script>
    </body>