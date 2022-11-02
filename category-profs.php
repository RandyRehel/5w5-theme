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
            <div class="PageContenu" style="width: 100vw; height: 80vh;">
            
            </div><!--Fin PageContenu -->
        </div><!--Fin content -->
    </div> <!--Fin app -->
<?php include 'footer2.php';?>
<?php endwhile; ?>
</body>
</html>