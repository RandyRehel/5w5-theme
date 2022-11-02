<?php /* Template Name: SingleProf */ ?>

    
<!DOCTYPE html>
<html class="no-js">
<head>
    
    <!-- Script pour inclure AlpineJS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>
<body>
<?php while (have_posts() ) : the_post();?>


    <div id="app">
        <div class="content">
            <div class="header">
            <div class="logoLeprogramme">
                <a href="http://projetweb2022.loc/frontpage">
                    <img src="http://projetweb2022.loc/wp-content/uploads/2022/11/Logo.png" alt="LOGO DU TIM" height="110px" width="110px">           
                </a>
            </div>
            
                <div class="BoutonsHeader">
                    <a href="http://projetweb2022.loc/le-programme"  class="BoutonNavHeaderB"><p>Le programme</p></a>
                    <a href="http://projetweb2022.loc/vie-etudiante" class="BoutonNavHeaderY"><p>Vie étudiante</p></a>
                    <a href="http://projetweb2022.loc/projets" class="BoutonNavHeaderO"><p>Projets</p></a>
                    <a href="http://projetweb2022.loc/stages" class="BoutonNavHeaderV"><p>Stages</p></a>
                    </div>
                
                
            </div><!--Fin head -->
            <div class="PageContenu">
                <div class="divImg">
                    <img class="imgProf" src="<?php the_field('photo');?>" alt="Image du prof">
                </div>
                <div class="infosProf">
                    <h4><?php the_field('nom');?></h4>
                    <p><?php the_field('description');?></p>
                    <div class="competences">
                        COMPETENCES 
                    </div>
                    <div class="flechesDiv">
                        <a href="javascript:history.back()"><img class="flecheGaucheProf" src="http://projetweb2022.loc/wp-content/uploads/2022/11/FlecheSuite.png" alt="la flèche gauche" ></a> 
                        <img class="flecheDroiteProf" src="http://projetweb2022.loc/wp-content/uploads/2022/11/FlecheSuite.png" alt="la flèche droite" >
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
<?php endwhile; ?>
</body>
</html>