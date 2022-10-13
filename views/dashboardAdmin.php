<?php
    session_start();
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
                    <div class="nbrTotal"></div>
                    <span>Élève</span>
                </div>
            </a>
            <a href="employe/ajout" style="text-decoration: none; color:black">
                <div class="total">
                    <div class="nbrTotal"></div>
                    <span>Employés</span>
                </div>
            </a>
        </div>
        <div id="emplist">
            <?php
            include_once "listeEmploye.php";
            ?>
        </div>
        </main>

        <!-- <footer>-->

        <?php
            include "footer.php";
        ?>


        <!--</footer>-->




        <script src="js/dashboardAdmin.js"></script>
</body>

</html>