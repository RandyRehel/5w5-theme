 
 <?php
    $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'profs',
    'posts_per_page' => 20,
    );
    $arr_posts = new WP_Query( $args );
 ?>
    <?php get_header();?>
            <div class="pageContenuProfs" style="min-height:80vh;">
            <?php 
                if ( $arr_posts->have_posts() ) :
  
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail();
                            endif;
                            ?>
                            <div class="polaroidDiv">
                                <div class="polaroidImg">
                                    <?php the_content();?>
                                    <h1 class="profTitre"><?php the_title(); ?></h1>
                                </div>
                            </div>
                            
                            
                        </article>
                        <?php
                    endwhile;
                endif;
            ?>
            </div><!--Fin PageContenu -->
        </div><!--Fin content -->


<?php include 'footer2.php';?>
</body>
</html>
