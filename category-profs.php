 
    <?php get_header();?>
        <div class="containerProfs" style="min-height:80vh;">
        <div class="pageContenuProfs">
            <?php 
                if (have_posts()) :
  
                    while (have_posts() ) :
                        the_post();
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
                endif;?>

                   
                </div>   <!--Fin PageContenu -->
                <div class="fleches">
                        <a href="<?=$url?>/cheminement"><img class="flecheDroite" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche droite"></a>
                        <a href="#" onclick="history.go(-1)"><img class="flecheGauche" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche"  height="20px"></a>
                    </div>
            </div>
        </div><!--Fin content -->
<?php include 'footer2.php';?>
</body>
</html>
