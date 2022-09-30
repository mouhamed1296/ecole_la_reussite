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
        <form action="traitement.php" method=post>
            <table border=0>
                <tr bgcolor=#cccccc>
                    <th width=150>Identifiant</th>
                    <th width=150>Description</th>

                </tr>
                <tr>
                    <th bgcolor=#cccccc>Nom</th>
                    <td align="center"><input type="text" name="nom"
                    size="50" maxlength="3" ></td>
                </tr>
                <tr>
                    <th bgcolor=#cccccc>Prénom</th>
                    <td align="center"><input type="text" name="prenom" 
                    size="50" maxlength="3"></td>
                </tr>
                <tr>
                    <th bgcolor=#cccccc>Email</th>
                    <td align="center"><input type="text" name="mail" 
                    size="50" maxlength="3"></td>
                </tr>
                <tr>
                    <th bgcolor=#cccccc>Niveau</th>
                    <td align="center"><input type="text" name="niveau" 
                    size="50" maxlength="3"></td>
                </tr> 
                <tr>
                    <th bgcolor=#cccccc>Nom du Tuteur</th>
                    <td align="center"><input type="text" name="tuteur" 
                    size="50" maxlength="3"></td>
                </tr>  
                <tr>
                    <th bgcolor=#cccccc>Numéro Tuteur</th>
                    <td align="center"><input type="text" name="num_tuteur" 
                    size="50" maxlength="3"></td>
                </tr>     
                <tr>
                    <th bgcolor=#cccccc>Date de naissance</th>
                    <td align="center"><input type="text" name="dateNaissance" 
                    size="50" maxlength="3"></td>
                </tr> 
                <tr>
                    <td colspan="2" align="center">
                    <input type="submit" value="Enregistrer">
                    </td>
                </tr>
            </table>
        </form>
    </div>  
    
    
    <script src="js/dashboardAdmin.js"></script>
</body>
</html>