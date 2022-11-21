<?php /* Template Name: SingleProjet */ ?>


<?php get_header();?>
            <div class="PageContenu projetFlex">
                <div class="left">
                    <div class="projetsInfos">
                        <h4><?php the_field('titre');?></h4>
                        <p><?php the_field('nom');?></p>
                    </div>
                    <div class="projetsDesc">
                        <p><?php the_field('description');?></p>
                    </div>
                    
                    <div class="bottomLeft">
                        <div class="projetsLiens">
                            <a href="<?php the_field('lien')?>">Lien vers le projet!</a>
                        </div>

                        <div class="flechesDiv">
                        <a href="javascript:history.back()"><img class="flecheGaucheProf" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche" ></a> 
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="divImg">
                        <img class="imgProf imgProjet" src="<?php the_field('image');?>" alt="Image du projet">
                    </div>
                </div>
            </div><!--Fin PageContenu -->
        </div><!--Fin content -->
    </div> <!--Fin app -->
<?php include 'footer2.php';?>
</body>
</html>