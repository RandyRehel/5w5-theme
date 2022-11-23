<?php /* Template Name: SingleProf */ ?>
<?php get_header();?>
            <div class="PageContenu contenuProfs">
                <div class="divImg">
                    <img class="imgProf" src="<?php the_field('photo');?>" alt="Image du prof">
                </div>
                <div class="infosProf">
                    <h4><?php the_field('nom');?></h4>
                    <p><?php the_field('description');?></p>
                    <div class="competences">
                        COMPETENCES 
                    </div>
                    <div class="fleches">
                        <a href="javascript:history.back()"><img class="flecheGauche" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche" ></a> 
                    
                    </div>
                </div>
            </div><!--Fin PageContenu -->
        </div><!--Fin content -->
    </div> <!--Fin app -->
    
    <?php include 'footer2.php';?>
</body>
</html>