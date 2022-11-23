<?php get_header();?>
        <div class="PageContenuProjets">
            <div class="NosProjets">
                <div class="BoutonProjet">
                    <p class="titretProjetVieEtudiante">NOS PROJETS</p>
                    
                        <form method="post" class="BoutonsFilter">
                            <button class="BoutonContenuProjets" name="a" value="jeu" type="submit"><p>Jeu</p></button>
                            <button class="BoutonContenuProjets" name="a" value="web" type="submit"><p>Web</p></button>
                            <button class="BoutonContenuProjets" name="a" value="video" type="submit"><p>Video</p></button>
                            <button class="BoutonContenuProjets" name="a" value="3D" type="submit"><p>3D</p></button>
                            <button class="BoutonContenuProjets" name="a" value="imagerie" type="submit"><p>Imagerie</p></button>
                            <button class="BoutonContenuProjets" name="a" value="autre" type="submit"><p>Autre</p></button>
                        </form>
                     <!-- Fin boutonProjet -->
                    <div class="BoutonsSelectionProjet">
                        <?php 

                            
                        
                        $args = array('category_name' => (isset($_POST['a'])&& $_POST['a']!= '') ? $_POST['a'] : 'projets');
                        
                            $posts = get_posts($args);

                        if (have_posts()) :
                            
                            while (have_posts() ) :
                                the_post();
                                ?>
                                <article <?php post_class(); ?>>
                                    <?php

                                    
                                    
                                    if ( has_post_thumbnail() ) :
                                        the_post_thumbnail();
                                    endif;
                                    ?>

                                        <div class="selectionProjet" >
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
            <div class="fleches">          
                <a href="<?=$url?>/stages/"><img class="flecheDroite" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche droite"></a>
                <a href="<?=$url?>/vie-etudiante/"><img class="flecheGauche" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche"></a>
            </div>
        </div><!--Fin PageContenu -->
    </div><!--Fin content -->
</div> <!--Fin app -->
<?php include 'footer2.php';?>

</body>
</html>