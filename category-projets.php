<?php get_header();?>
        <div class="PageContenuProjets">
            <div class="NosProjets">
                <div class="BoutonProjet" >
                    <p class="titretProjetVieEtudiante">NOS PROJETS</p>
                    <div class="BoutonsFilter" >
                        <button class="BoutonContenuProjets" type="button" ><p>Jeu</p></button>
                        <button class="BoutonContenuProjets" type="button" ><p>Web</p></button>
                        <button class="BoutonContenuProjets" type="button" ><p>Video</p></button>
                        <button class="BoutonContenuProjets" type="button" ><p>3D</p></button>
                        <button class="BoutonContenuProjets" type="button" ><p>Imagerie</p></button>
                        <button class="BoutonContenuProjets" type="button" ><p>Autre</p></button>
                    </div> <!-- Fin boutonProjet -->
                    <div class="BoutonsSelectionProjet">
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

                                        <div class="selectionProjet">
                                            <div class="imagesProjets">
                                                <?php the_content();?>
                                            </div>
                                        </div>
                                    
                                </article>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
               </div>
            </div>          
            <a href="<?=$url?>/stages/"><img class="flecheDroite" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche droite"></a>
            <a href="<?=$url?>/vie-etudiante/"><img class="flecheGauche" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche"></a>
        </div><!--Fin PageContenu -->
    </div><!--Fin content -->
</div> <!--Fin app -->
<?php include 'footer2.php';?>

</body>
</html>