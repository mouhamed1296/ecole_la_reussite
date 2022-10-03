
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Élève</title>

    <link rel="stylesheet" href="css/dashboardAdmin.css">
</head>
<body>
<div id="form">
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
                    <th class="colorChamp">Niveau</th>
                    <td align="center"><input type="text" name="niveau" 
                    size="50" class="espaceChamp"></td>
                </tr> 
                <tr>
                    <th class="colorChamp">Nom du Tuteur</th>
                    <td align="center"><input type="text" name="tuteur" 
                    size="50" maxlength="3" class="espaceChamp"></td>
                </tr>  
                <tr>
                    <th class="colorChamp">Numéro Tuteur</th>
                    <td align="center"><input type="text" name="num_tuteur" 
                    size="50" class="espaceChamp"></td>
                </tr>     
                <tr>
                    <th class="colorChamp">Date de naissance</th>
                    <td align="center"><input type="text" name="dateNaissance" 
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
    
    
    <script src="js/dashboardAdmin.js"></script>
</body>
</html>