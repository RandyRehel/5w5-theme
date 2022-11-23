 
    <?php get_header();?>
        <div class="containerProfs" style="min-height:80vh;">
            <div class="containerContenu">
            <h4 class="titreSessions">TITRE</h4>
            <div class="pageContenuSessions">
            <?php 
                if (have_posts()) :
  
                    while (have_posts() ) :
                        the_post();

                        $titre = get_the_title();
                        $titreFiltre = substr($titre,0,16);
                        ?>
                
                <div class="cours" x-data="{content:false, toggle() {this.content = ! this.content}}">
                    <h3><?=$titreFiltre?>...</h3>
                    <div class="containerCours" style="" x-on:click="toggle()">
                        <img src="<?php the_field('img');?>" alt="image du cours" x-show="!content">
                    </div>

                    <div class="contentCours" x-on:click="toggle()" x-show="content">
                        <div class="titreCours">
                            <h2><?=$titre?></h2>
                        </div>
                        <div class="texteCours">
                            <?php the_content();?>
                        </div>
                    </div>

                </div>
                <?php
                    endwhile;
                endif;?>
            </div>   <!--Fin PageContenu -->
            </div>
            <div class="fleches">
                <a href="#" onclick="history.go(-1)"><img class="flecheGauche" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche"  height="20px"></a>
            </div>
            </div>
        </div><!--Fin content -->
<?php include 'footer2.php';?>
</body>
</html>
