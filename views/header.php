<?php 
if(isset($_POST["deconnecter"])) {
    session_destroy();
    header("location: connexion");
}
?>
<header class="header">
    <img src="images/logo.png" alt="logo" id="logo">
    <ul class="acceuil">
        <?php if (isset($_SESSION["email"])) : ?>
        <li>
            <form action="" method="post">
                <a href="/projet_gestion_ecole/connexion">
                    <button type="submit" name="deconnecter">
                        <i class="fa-solid fa-user"></i>
                        <span class="menu-text">Se deconnecter</span>
                    </button>
                </a>
            </form>
        </li>
        <?php else: ?>
        <li>
            <a href="/projet_gestion_ecole/acceuil">
                <i class="fa-solid fa-house"></i>
                <span class="menu-text">Acceuil</span>
            </a>
        </li>

        <li>
            <a href="/projet_gestion_ecole/connexion">
                <i class="fa-solid fa-user"></i>
                <span class="menu-text">Se connecter</span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</header>