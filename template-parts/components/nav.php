<?php 
     $imgPath = 'uploads/';
?>


<?php while (have_posts() ) : the_post(); 
     $navLinks = get_field('sections');
     ?>

    <ul>
        <?php foreach($navLinks as $links):?>
        
        <li class="frontNavItems"> 
            <a href="<?=$links['link']?>"><p><?=$links['txt']?></p></a>
            <img src="http://projetweb2022.loc/wp-content/uploads/2022/11/BoutonNav_hover-1.png" alt="image de cercles menus">
        </li>
        <?php endforeach ?>
    </ul>
<?php endwhile; ?>