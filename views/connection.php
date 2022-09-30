<?php
session_start();
?>
<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="css/connection.css" media="screen" type="text/css" />
</head>

<body>
    <div id="container">
        <!-- zone de connexion -->

        <form action="controllers/login.php" method="POST">
            <h1>Connexion</h1>

            <label><b>Email</b></label>
            <input type="text" placeholder="Entrer l'adresse email" name="email" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

            <input type="submit" id='submit' value='LOGIN'>
            <?php
                if(isset($_SESSION['erreur'])){
                    $err = $_SESSION['erreur'];
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </form>
    </div>
</body>

</html>