<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Élève</title>
</head>
<body>
<div>
        <form action="traitement.php" method=post>
            <table border=0>
                <tr bgcolor=#cccccc>
                    <th width=150>Identifiant</th>
                    <th width=150>Description</th>
                    <th width=150>Action</th>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td align="center"><input type="text" name="nom"
                    size="50" maxlength="3"></td><td><button type="submit">Modifier</button> <button type="submit">Archiver</button></td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td align="center"><input type="text" name="prenom" 
                    size="50" maxlength="3"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td align="center"><input type="text" name="mail" 
                    size="50" maxlength="3"></td>
                </tr>
                <tr>
                    <th>Niveau</th>
                    <td align="center"><input type="text" name="niveau" 
                    size="50" maxlength="3"></td>
                </tr> 
                <tr>
                    <th>Nom du Tuteur</th>
                    <td align="center"><input type="text" name="tuteur" 
                    size="50" maxlength="3"></td>
                </tr>  
                <tr>
                    <th>Numéro Tuteur</th>
                    <td align="center"><input type="text" name="num_tuteur" 
                    size="50" maxlength="3"></td>
                </tr>     
                <tr>
                    <th>Date de naissance</th>
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

</body>
</html>