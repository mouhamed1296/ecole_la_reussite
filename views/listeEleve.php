<?php session_start();
if(!isset($_SESSION['email'])) {
    header("location: ../connexion");
    exit;
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listeEleve.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="js/archive.js"></script>
    <title>Document</title>
</head>

<body>
    <!--<header>-->
    <?php
                         include "header.php";
                ?>
    <!--</header>-->

    <div style=" margin:10rem 0;">




        <form class="search" style=" display:flex;  align-items:center; justify-content:center; margin:rem 0; "
            action="" method="GET">
            <input type="search" id="search_elv_input" name="recherche" placeholder="recherche..." required>
            <input type="submit" value="recherche" id="search_elv_button">

        </form>

        <a href="/projet_gestion_ecole/views/listeEleveArchive.php"
            style="margin-left: 30rem;padding: 1rem;background-color: lightgrey;text-decoration: none;color: black;">Liste
            eleve
            archivé</a>

        <table>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Niveau</th>
                <th>Nom_tuteur</th>
                <th>Numero_tuteur</th>
                <th>Date_naiss</th>
                <th>Date_ins</th>
                <th>Actions</th>
            </tr>


            <?php
                //récupération des élèves
                require_once "../repositories/EleveRepo.php";
                $eleveRepo = new EleveRepo();
                if (isset($_GET['id'])) {
                        $id_elv = (int) $_GET['id'];
                        $eleveRepo->archiver($id_elv);
                }                      //creation d'une instance de EleveRepo
                $eleves = $eleveRepo->selectAll();     //appel de la méthode selectAll
                if (isset($_GET["recherche"])){
                        $eleves = $eleveRepo->recherche($_GET["recherche"]);
                        }   
                //lister les élèves
                if (count($eleves) !== 0):
                foreach ($eleves as $eleve) : 
            ?>

            <tr>
                <td><?= $eleve['matricule']?></td>
                <td><?= $eleve['nom'] ?></td>
                <td><?= $eleve['prenom'] ?></td>
                <td><?= $eleve['email'] ?></td>
                <td><?= $eleve['niveau'] ?></td>
                <td><?= $eleve['nom_tuteur'] ?></td>
                <td><?= $eleve['numero_tuteur'] ?></td>
                <td><?= $eleve['date_naiss'] ?></td>
                <td><?= $eleve['date_ins'] ?></td>
                <td><a href=<?="/projet_gestion_ecole/eleve/ajout?edit_id=".$eleve['id_eleve']?>>
                        <i class="fas fa-pen-to-square" style="color: royalblue;"></i>
                    </a>
                    <span id="myBtn" data-id=<?= $eleve['id_eleve'] ?> class="archive">
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
                                    <form action="/projet_gestion_ecole/eleve/liste" method="get">
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

        <!--<footer>-->
        <?php
                include "footer.php";
                ?>
        <!--</footerer>-->
    </div>
</body>

</html>