<?php
session_start();

$erreur_email = null;
$erreur_mdp = null;

if (isset($_GET["erreur_email"])) {
    $erreur_email = $_GET["erreur_email"];
}
if (isset($_GET['erreur_mdp'])) {
    $erreur_mdp = $_GET["erreur_mdp"];
}

function afficherErreur($erreur) {
    if (isset($erreur)) {
        echo "<p style='color:red'>".$erreur."</p>";
    }
}
?>
<html>

<?php include_once "head.php" ?>

<body>
    <?php
include_once "header.php";
?>
    <div id="container">
        <!-- zone de connexion -->

        <form action="../controllers/login.php" method="POST">
            <h1>Connexion</h1>
            <label><b>Email</b></label>
            <input type="text" placeholder="Entrer l'adresse email" name="email" required>
            <?php afficherErreur($erreur_email); ?>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="mdp">
            <?php afficherErreur($erreur_mdp); ?>
            <input type="submit" id='submit' value='LOGIN'>
        </form>
    </div>
    <?php
include_once "footer.php";
?>
</body>

</html>