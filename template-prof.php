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
                <div class="logo1">
                    <img src="" alt="LOGO DU TIM">           
                </div>
                
                    <div class="BoutonsHeader" >
                    <button class="BoutonNavHeaderB" type="button" >Le programme</button>
                    <button class="BoutonNavHeaderY" type="button" >Vie étudiante</button>
                    <button class="BoutonNavHeaderO" type="button" >Projets</button>
                    <button class="BoutonNavHeaderV" type="button" >Stages</button>
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
                        <img class="flecheGauche" src="http://projetweb2022.loc/wp-content/uploads/2022/11/FlecheSuite.png" alt="la flèche gauche" > 
                        <img class="flecheDroite" src="http://projetweb2022.loc/wp-content/uploads/2022/11/FlecheSuite.png" alt="la flèche droite" >
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