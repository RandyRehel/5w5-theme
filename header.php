<?php
   $img_dir = get_theme_root_uri()."/../uploads/";
   $url = get_site_url();
?>
<!DOCTYPE html>
<html class="no-js">
<head>

    <!-- Script pour inclure AlpineJS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head() ?>
</head>
<!-- if is_frontpage && is_homepage functions a verifier dans refUnderscores -->
<?php if(is_front_page()) :?>
    <body class="frontBody">
        <header class="enterHeader" x-data="{open: false}">
            <button x-on:click="open = ! open"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="40" height="40"></button>
            <div x-show="open">
                <div class="nav enterNav">
                <?php get_template_part( 'template-parts/components/nav');?>
                    <div class="navImgDroit" style="content:'';">
                    </div>
                    <div class="contactsHeader">
                        <div class="leftHeader">
                            <p>
                                POUR NOUS COMMUNIQUER
                            </p>
                            <ul>
                                <li><a><img class="icoHeader" src="<?=$img_dir?>IconeMail-1-1.png" alt="email"></a></li>
                                <li><a><img class="icoHeader" src="<?=$img_dir?>InstaLogo-1.png_1.png" alt="instagram"></a></li>
                                <li><a><img class="icoHeader" src="<?=$img_dir?>LogoFB.png" alt="facebook"></a></li>
                            </ul>
                        </div>
                        <div class="rightHeader">
                            <ul>
                                <li><img src="<?=$img_dir?>LocationLogo-1.png.png" alt="emplacement"></li>
                                <li><p class="texteEmplacement">COLLÈGE DE MAISONNEUVE<br>
                                        3800, Rue SHERBROOKE EST <br>
                                        MONTRÉAL (QUÉBEC) <br>
                                        H1X 2A2 | (514) 254-7131</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

<?php 
elseif(!is_front_page()):?>
    <body>

<div id="app">
    <div class="content">
    <div class="header">
       
        <div class="logoLeprogramme">
            <a href="<?=$url?>/frontpage">
                <img src="<?=$img_dir?>Logo.png" alt="LOGO DU TIM" height="110px" width="110px">           
            </a>
        </div>
        
            <div class="BoutonsHeader">
                <a href="<?=$url?>/le-programme"  class="BoutonNavHeaderB"><p>Le programme</p></a>
                <a href="<?=$url?>/vie-etudiante" class="BoutonNavHeaderY"><p>Vie étudiante</p></a>
                <a href="<?=$url?>/projets" class="BoutonNavHeaderO"><p>Projets</p></a>
                <a href="<?=$url?>/stages" class="BoutonNavHeaderV"><p>Stages</p></a>
                </div>
            
            
        </div><!--Fin head -->
<?php endif?>

