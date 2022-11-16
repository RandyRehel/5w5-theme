<?php 
     $img_dir = get_theme_root_uri()."/../uploads/";
?>


<?php while (have_posts() ) : the_post(); 
     $navLinks = get_field('sections');
     ?>

    <ul>
        <?php foreach($navLinks as $links):?>

        <a href="<?=$links['link']?>">
            <li class="frontNavItems"> 
                <p><?=$links['txt']?></p>
                <img src="<?=$img_dir?>BoutonNav_hover-1.png" alt="image de cercles menus">
            </li>
        </a>
        <?php endforeach; ?>
    </ul>
<?php endwhile; ?>