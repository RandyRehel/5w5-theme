
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
             padding: 7em 0; 
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
    <div class="contentProjets">
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
        <div class="PageContenuProjets">
            <div class="NosProjets">
            <div class="BoutonProjet" >
                <img class="ImgNosProjet" src="" alt=""  >
                <p class="titretProjetVieEtudiante">NOS PROJETS</p>
                <div class="BoutonsHeader" >
                <button class="BoutonContenuProjets" type="button" ><p>Jeu</p></button>
                <button class="BoutonContenuProjets" type="button" ><p>Web</p></button>
                <button class="BoutonContenuProjets" type="button" ><p>Video</p></button>
                <button class="BoutonContenuProjets" type="button" ><p>3D</p></button>
                <button class="BoutonContenuProjets" type="button" ><p>Imagerie</p></button>
                <button class="BoutonContenuProjets" type="button" ><p>Autre</p></button>
                </div> <!-- Fin boutonProjet -->

                <div class="BoutonsSelectionProjet" >
                    <div class="selectionProjet1">
                        <a><button class="selectionProjetBouton1" type="button" ><p>Image</p></button></a>
                    </div>
                    <div class="selectionProjet2">
                    <a><button class="selectionProjetBouton2" type="button" ><p>Image</p></button></a>
                    </div>
                    <div class="selectionProjet3">
                    <a><button class="selectionProjetBouton3" type="button" ><p>Image</p></button></a>
                    </div>
                    <div class="selectionProjet4">
                    <a><button class="selectionProjetBouton4" type="button" ><p>Image</p></button></a>
                    </div>
                </div> <!-- Fin BoutonsSelectionProjet -->

                </div><!-- Fin boutonProjet -->

                

                

            
        </div>          
            <!-- </div>
            <img class="flecheDroite" src="http://projetweb2022.loc/wp-content/uploads/2022/11/FlecheSuite.png" alt="la flèche droite"  >
            <img class="flecheGauche" src="http://projetweb2022.loc/wp-content/uploads/2022/11/FlecheSuite.png" alt="la flèche gauche"  height="20px">
        </div> -->
        <div class="">
            
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