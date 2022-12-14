<?php
if(isset($_POST["deconnecter"])) {
    session_destroy();
    header("location: connexion");
}
?>
<header class="header">
    <div style="display: flex;justify-content: center;align-items:center;">
        <img src="images/logo.png" alt="logo" id="logo">
        <?= (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) ? ''.$_SESSION['prenom'].' '.$_SESSION['nom'] : null; ?>
    </div>
    <ul class="acceuil">
        <?php if (isset($_SESSION["email"])) : ?>
        <li>
            <a href="/projet_gestion_ecole/admin">
                <i class="fa-solid fa-gauge"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/projet_gestion_ecole/eleve/liste">
                <i class="fa-solid fa-list"></i>
                <span class="menu-text"> Liste Eleve</span>
            </a>
        </li>
        <li>
            <form action="" method="post">
                <a href="/projet_gestion_ecole/connexion">
                    <button type="submit" name="deconnecter" style="padding: .5rem;">
                        <i class="fa-solid fa-user"></i>
                        <span class="menu-text" style="font-size: 1rem;">Se deconnecter</span>
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