<?php session_start();
include_once "../repositories/EleveRepo.php"; 
if(!isset($_SESSION['email'])) {
    header("location: ../connexion");
    exit;
}
if (isset($_GET['edit_id'])) {   
    $id = (int) $_GET['edit_id'];
$eleveRepo = new EleveRepo();
$eleve = $eleveRepo->selectOne($id);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Élève</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="css/dashboardAdmin.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <!--<header>-->
    <?php
        include "header.php";
    ?>
    <!--</header>-->
    <div id="form_ajout">
        <h1>Enregistrement eleve</h1>
        <?php
            if (isset($_GET["success"])):
                $message = $_GET["success"];
         ?>
        <span style="padding: 1rem;background-color: lightgreen; color: darkgreen;margin: 1rem;">
            <?= $message ?>
        </span>
        <?php endif; ?>
        <form action="../controllers/traitementFormEleve.php" method="POST">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value=<?=$eleve['nom'] ?? null; ?>>
                <?php
                    if(isset($_GET["erreur_vide_nom"])):
                        $nom = $_GET["erreur_vide_nom"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $nom ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom"
                    value=<?=$eleve['prenom'] ?? null ; ?>>
                <?php
                    if(isset($_GET["erreur_vide_prenom"])):
                        $prenom = $_GET["erreur_vide_prenom"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $prenom ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="date_naiss">Date naissance</label>
                <input type="date" class="form-control" id="date_naiss" name="date_naiss"
                    value=<?=$eleve['date_naiss'] ?? null; ?>>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value=<?=$eleve['email'] ?? null; ?>>
                <?php
                    if(isset($_GET["erreur_email"])):
                        $email = $_GET["erreur_email"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $email ?></span>
                <?php endif; ?>
                <?php
                    if(isset($_GET["erreur_invalid_email"])):
                        $emailInvalid = $_GET["erreur_invalid_email"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $emailInvalid ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="niveau">Niveau</label>
                <select name="niveau" class="form-control" id="niveau">
                    <option value=<?=$eleve['niveau'] ?? null; ?> selected><?=$eleve['niveau'] ?? null; ?></option>
                    <option value="ci">CI</option>
                    <option value="cp">CP</option>
                    <option value="ce1">CE1</option>
                    <option value="ce2">CE2</option>
                    <option value="cm1">CM1</option>
                    <option value="cm2">CM2</option>
                    <option value="6eme">6eme</option>
                    <option value="5eme">5eme</option>
                    <option value="4eme">4eme</option>
                    <option value="3eme">3eme</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tuteur">Tuteur</label>
                <input type="text" class="form-control" name="tuteur" id="tuteur"
                    value=<?=$eleve['nom_tuteur'] ?? null; ?>>
                <?php
                    if(isset($_GET["erreur_vide_tuteur"])):
                        $tuteur = $_GET["erreur_vide_tuteur"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $tuteur ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="num_tuteur">Numero tuteur</label>
                <input type="tel" class="form-control" id="num_tuteur" name="num_tuteur"
                    value=<?=$eleve['numero_tuteur'] ?? null; ?>>
                <?php
                    if(isset($_GET["erreur_vide_num_tuteur"])):
                        $num_tuteur = $_GET["erreur_vide_num_tuteur"];
                ?>
                <span style="padding: 1rem;background-color: #ffcccb; color: darkred;"><?= $num_tuteur ?></span>
                <?php endif; ?>
            </div>
            <?php
            if (isset($_GET['edit_id'])):?>

            <input type="hidden" name="id" value=<?=$_GET['edit_id']?> /> <input type="submit" name="modifier_eleve"
                class="register" value="Modifier">
            <?php
            else:
            ?>
            <input type="submit" name="ajout_eleve" class="register" value="Enregistrer">
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

</body>

</html>