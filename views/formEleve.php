<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Élève</title>
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
        <form action="../controllers/traitementFormEleve.php" method="POST">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">

                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="niveau">Niveau</label>
                <select name="niveau" class="form-control" id="niveau">
                    <option value="">CI</option>
                    <option value="">CP</option>
                    <option value="">CE1</option>
                    <option value="">CE2</option>
                    <option value="">CM1</option>
                    <option value="">CM2</option>
                    <option value="">6eme</option>
                    <option value="">5eme</option>
                    <option value="">4eme</option>
                    <option value="">3eme</option>
                    <option value="">seconde</option>
                    <option value="">première</option>
                    <option value="">terminale</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tuteur">Tuteur</label>
                <input type="text" class="form-control" name="tuteur" id="tuteur">
            </div>
            <div class="form-group">
                <label for="num_tuteur">Numero tuteur</label>
                <input type="tel" class="form-control" id="num_tuteur" name="num_tuteur">
            </div>
            <button type="submit" class="register" value="ajout_eleve">Enregistrer</button>

        </form>
    </div>
    <!--<footer>-->
    <?php
            include "footer.php";
        ?>
    <!--</footerer>-->
</body>

</html>