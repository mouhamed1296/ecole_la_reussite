<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="css/dashboardAdmin.css">
        
</head>

<body>
    <!---->
    <header>
        <div id="Entete">
                <div class="nav_menu">  
                    <div><a href="#" > <p class="nav_item">Ajouter Employés</p> </a></div>
                    <div><a href="#" > <p class="nav_item">Lister Employés</p> </a></div>
                    <div><a href="#" > <p class="nav_item">Ajouter ÉLéves </p> </a></div>
                    <div><a href="#" > <p class="nav_item">lister ÉLéves  </p> </a></div>

                </div> 
                <div>  <button type="submit" id="btn_deconnect">Se Déconnecter</button></div>
        </div>

    </header>
    <!---->
    <mian>
        <div id="prestationDasboard">
            <h3>Tableeu de bord Administrateur</h3>

        </div>

        <div id="dasboard">
            <div class="vueEnsemble">  </div>  <div class="para">Employés</div>
            <div class="vueEnsemble"></div>    <div class="para">Administrateur</div>     
            <div class="vueEnsemble">  </div>  <div class="para">Élève</div>
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

    </main>
    <!---->
    <footer>

        <div id="piedPage">

        </div>
    
    </footer>
    <!---->


   
<script src="js/dashboardAdmin.js"></script>
</body>

</html>