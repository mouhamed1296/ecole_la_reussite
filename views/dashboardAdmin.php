<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/dashboardAdmin.css">
        <link rel="stylesheet" href="css/index.css">
</head>

<div  id="topMenu">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-sharp fa-solid fa-bars"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="views/formEployes.php">Ajputer Employés</a></li>
            <li><a class="dropdown-item" href="#"><br></a></li>
            <li><a class="dropdown-item" href="#">Lister employés</a></li>
          </ul>
        </li>
    </div>
</nav>

    <!--<header>-->
    <?php
            include "header.php";
        ?>
    <!--</header>-->

</div>
<body>

        
    
    <mian>
        <div id="prestationDasboard">
            <h3>Tableeu de bord Administrateur</h3>

        </div>
        
        <div id="tab">
            <div class="nbrTotal"></div><div class="para">Élève</div>
            <div class="nbrTotal"></div><div class="para">Employés</div>
            <div class="nbrTotal"></div><div class="para">Administrateur</div>
 
        </div>

        <!-- <div id="dasboard">
            <div class="compteur">  </div>  <div class="para">Employés</div>
            <div class="compteur">  </div>   <div class="para">Administrateur</div>     
            <div class="compteur">  </div>  <div class="para">Élève</div>
        </div>

        <div id="tab" >
             <table border="1" cellspacing="0" cellpadding="0" id="tableau">
                <tr>
                    <th class="spaceTab">Fonction</th>
                    <th class="spaceTab">Nom complet</th>
                    <th class="spaceTab">présence</th>
                </tr>
                <tr>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"></td>
                </tr>
                <tr>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"></td>
                </tr>
                <tr>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"> </td>
                    <td class="spaceTab"></td>
                </tr>
                <tr>
                    <td class="spaceTab"></td>
                    <td></td>
                    <td class="spaceTab"></td>
                </tr>
                <tr>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"></td>
                </tr>
                <tr>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"></td>
                    <td class="spaceTab"></td>
                </tr>
            </table> 

        </div>
 -->
    </main>

     <!-- <footer>-->
    
        <?php
            include "footer.php";
        ?>
    

    <!--</footer>-->



   
<script src="js/dashboardAdmin.js"></script>
</body>

</html>