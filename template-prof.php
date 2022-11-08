<?php /* Template Name: SingleProf */ ?>
<?php while (have_posts() ) : the_post();?>

<?php get_header();?>
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
                        <a href="javascript:history.back()"><img class="flecheGaucheProf" src="<?=$img_dir?>2022/11/FlecheSuite.png" alt="la flèche gauche" ></a> 
                        <img class="flecheDroiteProf" src="<?=$img_dir?>2022/11/FlecheSuite.png" alt="la flèche droite" >
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