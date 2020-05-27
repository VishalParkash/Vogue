<?php get_header(); ?>
<div class="container-custom">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php
        while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
    <?php
    // TO SHOW THE POST CONTENTS
    ?>                        
</div>        

<?php get_footer(); ?>



