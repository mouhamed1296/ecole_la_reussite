<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/listeEleve.css">
        <link rel="stylesheet" href="css/index.css">
        <title>Document</title>
</head>

<body>

                <!--<header>-->
                <?php
                         include "header.php";
                ?>
                <!--</header>-->
        
        <div style=" margin:10rem 0;">




                <form style=" display:flex;  align-items:center; justify-content:center; margin:rem 0; " action="" method="GET">
                        <input type="search" name="recherche" placeholder="recherche..." required>
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
                        $eleveRepo = new EleveRepo();                 //creation d'une instance de EleveRepo
                        $eleves = $eleveRepo->selectAll();            //appel de la méthode selectAll
                        if (isset($_GET["recherche"])){
                                $eleves = $eleveRepo->recherche($_GET["recherche"]);
                             }   
                        //lister les élèves
                        foreach ($eleves as $eleve) : ?>

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

                <!--<footer>-->
                <?php
                include "footer.php";
                ?>
                <!--</footerer>-->
        </div>
</body>

</html>