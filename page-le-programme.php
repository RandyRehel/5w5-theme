<?php get_header();?>
        <div class="PageContenu">
            <div class="nosProjets">
                <div class="fil-arianne">
                    <?php include('fil-arianne.php')?>
                </div>
                <p class="titretProjet">LE TIM... C'EST QUOI?</p>
                <p class="paragrapheLorum1">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                      dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                      , sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                      <p class="paragrapheLorum1">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                         dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                         , sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <div class="fleches">
                <a href="<?=$url?>/les-branches"><img class="flecheDroite" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche droite"></a>
                <a href="#" onclick="history.go(-1)"><img class="flecheGauche" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche"  height="20px"></a>
            </div>
            
        </div>
        <div class="lesImagesProgramme">
            <img class="ImagesProgramme" src="/wp-content/uploads/20221121_182130.jpg" alt="ImagesProgramme">
        </div>
        
        </div><!--Fin PageContenu -->
    </div><!--Fin content -->
</div> <!--Fin app -->
<?php include 'footer2.php';?>

</body>
</html>