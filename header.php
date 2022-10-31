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
<section class="enterHeader" x-data="{open: false}">
   <div class="logo">
        <img src="" alt="le logo du tim">
    </div>
    <button x-on:click="open = ! open"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="40" height="40"></button>
    <div x-show="open">
        <div class="nav enterNav">
        <?php get_template_part( 'template-parts/components/nav');?>
            <div class="navImgDroit" style="content:'';">
            </div>
        </div>
        <div class="contactsHeader">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</section>