
 <?php get_header();?>
 <script src= "/js/carousel.js" defer></script>
        <div class="PageContenuVieEtudiante">
            <div class="NosProjets">
            <div class="BoutonProjet" >
                <img class="ImgNosProjet" src="" alt=""  >
                <p class="titretProjetVieEtudiante">LA VIE DES TIMMIENS</p>
                <p class="paragrapheLorum1VieEtudiante">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                      dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                      , sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                      
            </div>
            <div class="fleches">
            <a href="<?=$url?>/category/projets/"><img class="flecheDroite" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche droite"></a>
            <a href="<?=$url?>/le-programme/"><img class="flecheGauche" src="<?=$img_dir?>FlecheSuite.png" alt="la flèche gauche"></a>
            </div>
        </div>
        <div class="lesImagesEtudiantes">
            <div class="logoLeprogrammeEtudiante1">
                <a><img class="flecheCarouselVieEtudiante1" onclick="plusSlides(-1)" src="/wp-content/uploads/Fleche2.png" alt="" > </a>          
            </div>
            
            <div class="logoLeprogrammeEtudiante2">
            
                <div class="mySlides fade"><img class ="imgRotate" src="/wp-content/uploads/Martin.png" alt="" ></div>
                <div class="mySlides fade"><img class ="imgRotate" src="/wp-content/uploads/Johanne.png" alt="" ></div>
                <div class="mySlides fade"><img class ="imgRotate" src="/wp-content/uploads/Manon.png" alt="" ></div>
            
            </div>  
            <div class="logoLeprogrammeEtudiante3">
               <a><img class="flecheCarouselVieEtudiante2" onclick="plusSlides(1)" src="/wp-content/uploads/Fleche2.png" alt="" > </a>           
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

</body>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</html>