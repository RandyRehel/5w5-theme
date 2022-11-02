 
 <?php
 
    $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'profs',
    'posts_per_page' => 20,
    );
    $arr_posts = new WP_Query( $args );
 ?>
 
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
            <div class="pageContenuProfs" style="min-height:80vh;">
            <?php 
                if ( $arr_posts->have_posts() ) :
  
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail();
                            endif;
                            ?>
                            <div class="polaroidDiv">
                                <div class="polaroidImg">
                                    <?php the_content();?>
                                    <h1 class="profTitre"><?php the_title(); ?></h1>
                                </div>
                            </div>
                            
                            
                        </article>
                        <?php
                    endwhile;
                endif;
            ?>
            </div><!--Fin PageContenu -->
        </div><!--Fin content -->
    </div> <!--Fin app -->

<?php include 'footer2.php';?>
</body>
</html>
