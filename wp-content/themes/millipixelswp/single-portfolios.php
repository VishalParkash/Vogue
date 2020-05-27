<?php
get_header(); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main>
        <section class="singlePost">
            <div class="singlePostTop">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-3">
                            <div class="singlePostTopLeft">
                                <?php
                                    $get_description = get_post(get_post_thumbnail_id())->post_excerpt;
                                    the_post_thumbnail('medium');
                                    if(!empty($get_description)){//If description is not empty show the div
                                    echo '<span class="postImgTag">' . $get_description . '</span>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top_title">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <div>
                                <?php  the_content();  ?>
                            </div>    
                        </div>     
                    </div>
                </div>
            </div>    
        </section>
    </main>
<?php endwhile; ?>
<?php endif; ?>
 <?php /* The loop */ ?>
        
                
          

<?php get_footer(); ?>
