<?php
   

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
<body class="frontBody">
<header class="enterHeader" x-data="{open: false}">
    <button x-on:click="open = ! open"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="40" height="40"></button>
    <div x-show="open">
        <div class="nav enterNav">
        <?php get_template_part( 'template-parts/components/nav');?>
            <div class="navImgDroit" style="content:'';">
            </div>
        </div>
        <div class="contactsHeader">
            <div class="communicationsHead">
                <div class="comTexte">
                    <p>
                        TOTALLY NORMAL NOT LONG TITLE
                    </p>
                </div>
            
                <div class="icones">
                    <ul>
                        <li class="ico"><img src="" alt="mail"></li>
                        <li class="ico"><img src="" alt="ig"></li>
                        <li class="ico"><img src="" alt="fb"></li>
                    </ul>
                </div>
            </div>

            <div class="emplacementsHead">
                <img src="" alt="">
                <p>
                    THIS TEXT IS VERY LONG THIS TEXT IS VERY LONG THIS TEXT IS VERY LONG THIS TEXT IS VERY LONG <br>
                    THIS TEXT IS VERY LONG THIS TEXT IS VERY LONG THIS TEXT IS VERY LONG <br>
                    THIS TEXT IS VERY LONG THIS TEXT IS VERY LONG 
                </p>
            </div>
        </div>
    </div>
</header>