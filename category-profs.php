 
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
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>
                            <div class="entry-content">
                                <?php the_content();?>
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
<?php endwhile; ?>
</body>
</html>
