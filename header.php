<?php
   

?>


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