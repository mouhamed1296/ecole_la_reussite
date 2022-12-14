<?php session_start(); 
include_once "../repositories/EmployeRepo.php"; 
if(!isset($_SESSION['email'])) {
    header("location: ../connexion");
    exit;
}
if (isset($_GET['edit_id'])) {
    $id = (int) $_GET['edit_id'];
$employeRepo = new EmployeRepo();
$employe = $employeRepo->selectOne($id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Employes</title>

    <link rel="stylesheet" href="css/dashboardAdmin.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="js/show_statut_ens.js"></script>
</head>

<body>
    <!--<header>-->
    <?php
            include "header.php";
        ?>
    <!--</header>-->
    <div id="form_ajout">
        <h1>Modification Employe</h1>
        <?php
            if (isset($_GET["success"])):
                $message = $_GET["success"];
         ?>
        <span style="padding: 1rem;background-color: lightgreen; color: darkgreen;margin: 1rem;">
            <?= $message ?>
        </span>
        <?php endif; ?>
        <form action="../controllers/traitementFormEmploye.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value=<?=$employe['nom']??null; ?>>
                <?php
                    if(isset($_GET["erreur_vide_nom"])):
                        $vide = $_GET["erreur_vide_nom"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $vide ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value=<?=$employe['prenom']??null; ?>>
                <?php
                    if(isset($_GET["erreur_vide_prenom"])):
                        $vide = $_GET["erreur_vide_prenom"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $vide ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value=<?=$employe['email']??null; ?>>
            </div>
            <?php
                    if(isset($_GET["erreur_email"])):
                        $email = $_GET["erreur_email"];
                ?>
            <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $email ?></span>
            <?php endif; ?>
            <?php
                    if(isset($_GET["erreur_vide_mail"])):
                        $vide = $_GET["erreur_vide_mail"];
                ?>
            <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $vide ?></span>
            <?php endif; ?>
            <div class="form-group">
                <label for="salaire">Salaire</label>
                <input type="text" class="form-control" id="salaire" name="salaire"
                    value=<?=$employe['salaire']??null; ?>>
                <?php
                    if(isset($_GET["erreur_vide_salaire"])):
                        $vide = $_GET["erreur_vide_salaire"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $vide ?></span>
                <?php endif; ?>
                <?php
                    if(isset($_GET["erreur_invalid_salaire"])):
                        $invalide = $_GET["erreur_invalid_salaire"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $invalide ?></span>
                <?php endif; ?>
            </div>
            <input type="hidden" name="id" value=<?= isset($_GET['edit_id']) ? $_GET['edit_id'] : ""?> /> <input
                type="submit" name="modifier_employe" class="register" value="Modifier">
        </form>
    </div>

    <!--<footer>-->
    <?php
            include "footer.php";
        ?>
    <!--</footerer>-->

    <script src="js/dashboardAdmin.js"></script>
</body>

</html>