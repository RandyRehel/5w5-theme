 
    <?php get_header();?>
        <div class="containerProfs" style="min-height:80vh;">
        <div class="contenuPageCheminement">
        <div class="cotesCheminement" style="left: -50px;">
            <img src="<?=$img_dir?>BoutonNavOrange-2.png" alt="image cercle gauche">
        </div>    
        <div class="midCheminement">
            <div class="titreCheminement">
                    <h3>Grille de cheminement</h3>
                </div>
                <div class="sessionsConteneur" x-data="{active: 1}">
                    <button x-on:click="active = active > 1 ? active-1 : active = 6"></button>
                    <div class="sessions">
                        <div class="sessionCercle" :class="{'inactiveCercle': active != 1}">
                            <a href=""><h4>Session 1</h4></a>
                        </div>
                        <div class="sessionCercle inactiveCercle" :class="{'inactiveCercle': active != 2}">
                            <a href=""><h4>Session 2</h4></a>
                        </div>
                        <div class="sessionCercle inactiveCercle" :class="{'inactiveCercle': active != 3}">
                            <a href=""><h4>Session 3</h4></a>
                        </div>
                        <div class="sessionCercle inactiveCercle" :class="{'inactiveCercle': active != 4}">
                            <a href=""><h4>Session 4</h4></a>
                        </div>
                        <div class="sessionCercle inactiveCercle" :class="{'inactiveCercle': active != 5}">
                            <a href=""><h4>Session 5</h4></a>
                        </div>
                        <div class="sessionCercle inactiveCercle" :class="{'inactiveCercle': active != 6}">
                            <a href=""><h4>Session 6</h4></a>
                        </div>
                    </div>
                    <button x-on:click="active = active < 6 ? active+1 : active = 1"></button>
                </div>
        </div>
        <div class="cotesCheminement" style="right: -50px;">
            <img src="<?=$img_dir?>BoutonNavOrange-2.png" alt="image cercle droite">
        </div>
            
                   
                </div>   <!--Fin PageContenu -->
                <div class="fleches cheminementFleches">
                        <a href="<?=$url?>/cheminement"><img class="flecheDroite" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche droite"></a>
                        <a href="#" onclick="history.go(-1)"><img class="flecheGauche" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche"  height="20px"></a>
                    </div>
            </div>
        </div><!--Fin content -->
        <div class="footerCheminement">
        <?php include 'footer2.php';?>
        </div>
</body>
</html>
