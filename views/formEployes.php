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

</head>

<body>
    <!--<header>-->
    <?php
            include "header.php";
        ?>
    <!--</header>-->
    <div id="form_ajout">
        <h1>Enregistrement employe</h1>
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
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp">
            </div>
            <div class="form-group">
                <label for="salaire">Salaire</label>
                <input type="text" class="form-control" id="salaire" name="salaire">
            </div>
            <div class="form-group">
                <label for="statut">Statut</label>
                <select name="statut" class="form-control" id="statut">
                    <option value="">Enseignant</option>
                    <option value="">Secrétaire</option>
                    <option value="">Admin</option>
                    <option value="">Surveillant</option>
                </select>
            </div>
            <button type="submit" class="register" value="ajout_employe">Enregistrer</button>
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