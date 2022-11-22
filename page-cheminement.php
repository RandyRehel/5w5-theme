 
    <?php get_header();?>
        <div class="containerProfs" style="min-height:80vh;">
        <div class="contenuPageCheminement">
            <div class="titreCheminement">
                <h3>Grille de cheminement</h3>
            </div>
            <div class="sessionsConteneur">
                <button>fleche gauche</button>
                <div class="sessions">
                    <div class="sessionCercle">
                        <a href=""><h4>Session 1</h4></a>
                    </div>
                    <div class="sessionCercle">
                        <a href=""><h4>Session 2</h4></a>
                    </div>
                    <div class="sessionCercle">
                        <a href=""><h4>Session 3</h4></a>
                    </div>
                    <div class="sessionCercle">
                        <a href=""><h4>Session 4</h4></a>
                    </div>
                    <div class="sessionCercle">
                        <a href=""><h4>Session 5</h4></a>
                    </div>
                    <div class="sessionCercle">
                        <a href=""><h4>Session 6</h4></a>
                    </div>
                </div>
                <button>fleche droite</button>
            </div>
                   
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
