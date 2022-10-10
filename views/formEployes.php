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
        <h1>Enregistrement employe</h1>
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
                <input type="text" class="form-control" id="nom" name="nom">
                <?php
                    if(isset($_GET["erreur_vide_nom"])):
                        $vide = $_GET["erreur_vide_nom"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $vide ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
                <?php
                    if(isset($_GET["erreur_vide_prenom"])):
                        $vide = $_GET["erreur_vide_prenom"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $vide ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
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
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp">
                <?php
                    if(isset($_GET["erreur_vide_mdp"])):
                        $vide = $_GET["erreur_vide_mdp"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $vide ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="salaire">Salaire</label>
                <input type="number" class="form-control" id="salaire" name="salaire">
                <?php
                    if(isset($_GET["erreur_vide_salaire"])):
                        $vide = $_GET["erreur_vide_salaire"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $vide ?></span>
                <?php endif; ?>
            </div>
            <?php
            if (isset($_GET['edit_id'])):
            ?>
            <input type="hidden" name="id" value=<?=$_GET['edit_id']?> /> <input type="submit" name="modifier_employe"
                class="register" value="Modifier">
            <?php
            else:
            ?>
            <div class="form-group">
                <label for="statut">Statut</label>
                <select name="statut" class="form-control" id="statut">
                    <option value="enseignant">Enseignant</option>
                    <option value="secretaire">Secrétaire</option>
                    <option value="admin">Admin</option>
                    <option value="surveillant">Surveillant</option>
                    <option value="comptable">Comptable</option>
                </select>
            </div>
            <div class="form-group" id="ens">
                <label for="statut_ens">Niveau Enseigné</label>
                <select name="statut_ens" class="form-control" id="statut_ens">
                    <option value="primaire">Primaire</option>
                    <option value="secondaire">Secondaire</option>
                </select>
            </div>
            <input type="submit" name="ajout_employe" class="register" value="Enregistrer">
            <?php
            endif;
            ?>
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