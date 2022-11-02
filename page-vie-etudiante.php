
<!DOCTYPE html>
<html class="no-js">
<head>
    
    <!-- Script pour inclure AlpineJS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body {
            height: 90vh;
            min-height: 100vh;
        }

        #app{
            width: 100%;
            height: 100%;
            /* padding: 6em 0; */
            overflow: hidden;
            display: flex;
        }

        .head{
            text-align: center;
            margin-bottom: 3em;
        }

        .content{
            width: 100%;
        }

       .logo1{
        justify-content: center;
        width: 100%;
        display: flex;
        height:60px;
        width:100px;
        padding-top: 25px;
        
       }
        
    </style>
    <?php wp_head(); ?>
</head>
<body>
<div id="app">
    <div class="contentVieEtudiante">
        <div class="header">
            <div class="logoLeprogramme">
                <img src="http://projetweb2022.loc/wp-content/uploads/2022/11/Logo.png" alt="LOGO DU TIM" height="110px" width="110px">           
            </div>
            
                <div class="BoutonsHeader" >
                <button class="BoutonNavHeaderB" type="button" >Le programme</button>
                <button class="BoutonNavHeaderY" type="button" >Vie étudiante</button>
                <button class="BoutonNavHeaderO" type="button" >Projets</button>
                <button class="BoutonNavHeaderV" type="button" >Stages</button>
                </div>
            
            
        </div><!--Fin head -->
        <div class="PageContenuVieEtudiante">
            <div class="NosProjets">
            <div class="BoutonProjet" >
                <img class="ImgNosProjet" src="" alt=""  >
                <p class="titretProjetVieEtudiante">LA VIE DES TIMMIENS</p>
                <p class="paragrapheLorum1VieEtudiante">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                      dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                      , sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                      
            </div>
            <img class="flecheDroite" src="http://projetweb2022.loc/wp-content/uploads/2022/11/FlecheSuite.png" alt="la flèche droite"  >
            <img class="flecheGauche" src="http://projetweb2022.loc/wp-content/uploads/2022/11/FlecheSuite.png" alt="la flèche gauche"  height="20px">
        </div>
        <div class="lesImagesEtudiantes">
            <div class="logoLeprogrammeEtudiante1">
                <img src="" alt="" >           
            </div>
            <div class="logoLeprogrammeEtudiante2">
                <img src="" alt="" >           
            </div>  
            <div class="logoLeprogrammeEtudiante3">
                <img src="" alt="" >           
            </div>    
    </div>
        <div class ="BoutonNavOrange">
            <button class="BoutonNavOetB" type="button" ></button>
            <button class="BoutonNavOetB" type="button" ></button> 
            <button class="BoutonNavOetB" type="button" ></button> 
            <button class="BoutonNavOetB" type="button" ></button> 
        </div> 
        </div><!--Fin PageContenu -->
    </div><!--Fin content -->
</div> <!--Fin app -->
<?php include 'footer2.php';?>

</body>
</html>