<?php 
     $imgPath = 'uploads/';
?>


<?php while (have_posts() ) : the_post(); 
     $navLinks = get_field('sections');
     ?>

    <ul>
        <?php foreach($navLinks as $links):?>
        
        <li> 
            <a href="<?=$links['link']?>"><p><?=$links['txt']?></p></a>
            <img src="" alt="image de cercles menus" width="20" height="20">
        </li>
        <?php endforeach ?>
    </ul>
<?php endwhile; ?>