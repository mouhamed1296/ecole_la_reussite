
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Employes</title>

    <link rel="stylesheet" href="css/dashboardAdmin.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!--<header>-->
    <?php
            include "header.php";
        ?>
    <!--</header>-->

<div id="formEmp">
        <form action="traitementFormEleve.php" method="POST">
            <table border=0>
                <tr class="colorChamp">
                    <th width=150 class="colorChamp">Identifiant</th>
                    <th width=150 class="colorChamp">Description</th>

                </tr>
                <tr>
                    <th class="colorChamp">Nom</th>
                    <td align="center"><input type="text" name="nom"
                    size="50"  class="espaceChamp"></td>
                </tr>

                  <!--   <p><?php echo "$nomerror" ?> </p> -->

                <tr>
                    <th class="colorChamp">Prénom</th>
                    <td align="center"><input type="text" name="prenom" 
                    size="50" class="espaceChamp"></td>
                </tr>

                <tr>
                    <th class="colorChamp">Email</th>
                    <td align="center"><input type="text" name="mail" 
                    size="50" class="espaceChamp"></td>
                </tr>
                <tr>
                    <th class="colorChamp">Mot de pass</th>
                    <td align="center"><input type="text" name="mdp" 
                    size="50" class="espaceChamp"></td>
                </tr> 
                <tr>
                    <th class="colorChamp">Salaire</th>
                    <td align="center"><input type="text" name="salaire" 
                    size="50" class="espaceChamp"></td>
                </tr>  
                <tr>
                    <th class="colorChamp">Statut</th>
                    <td align="center"><input type="text" name="statut" 
                    size="50" class="espaceChamp"></td>
                </tr>     
                <tr>
                    <td colspan="2" align="center">
                    <input type="submit" value="Enregistrer" class="btnSaveEleve" name="enregistrer">
                    </td>
                </tr>
            </table>
        </form>
    </div>  

    <!--<footer>-->
    <?php
            include "footer.php";
        ?>
    <!--</footerer>-
    
    <script src="js/dashboardAdmin.js"></script>
</body>
</html>