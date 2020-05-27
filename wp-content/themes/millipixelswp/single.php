<?php
get_header(); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main>
<section class="singlePost">
        <div class="singlePostTop">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="singlePostTopLeft">
                    <?php
                        $get_description = get_post(get_post_thumbnail_id())->post_excerpt;
                        the_post_thumbnail('full');
                        if(!empty($get_description)){//If description is not empty show the div
                        echo '<span class="postImgTag">' . $get_description . '</span>';
                        }
                    ?>
                  <div class="singlePostImgOver"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="singlePostTopRight">
                  <h1>
                    <span> 
                        <?php 
                            foreach((get_the_category()) as $category){
                                echo $category->name."<br>";
                                // echo category_description($category);
                                }
                        ?>
                    </span>
                    <?php the_title(); ?>
                  </h1>
                  <div class="postText">
                    <div class="postBy">
                        BY <a href="javascript:void(0);"><?php the_author(); ?></a>
                    </div>
                    <span class="postDate"><?php echo get_the_date(); ?></span>
                  </div>
                  <div class="postTagLine">
                  <q>
                    <?php echo the_field('small_description'); ?>
                    </q>    
                  </div>
                  <div class="postShare">
                                    
                    <a href="javascript:void(0);">
                      <svg
                        data-test-id="Icon"
                        class="Wrapper-dyuznp cLUlpE"
                        width="24"
                        height="46px"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <title>Facebook</title>
                        <path
                          d="M13.49 21v-8.21h2.95l.44-3.2h-3.39V7.545c0-.926.276-1.557 1.697-1.557L17 5.988V3.126A25.971 25.971 0 0 0 14.359 3c-2.614 0-4.403 1.491-4.403 4.23v2.36H7v3.2h2.956V21h3.535z"
                        ></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);">
                      <svg
                        data-test-id="Icon"
                        class="Wrapper-dyuznp cLUlpE"
                        width="24"
                        height="46px"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <title>Twitter</title>
                        <path
                          d="M20.23 6.607c-.378.163-.77.292-1.173.386a3.56 3.56 0 0 0 .965-1.5c.054-.165-.129-.307-.28-.219a6.854 6.854 0 0 1-1.792.723.481.481 0 0 1-.426-.103A3.716 3.716 0 0 0 15.1 5c-.387 0-.777.059-1.161.175-1.188.36-2.105 1.318-2.393 2.499a3.733 3.733 0 0 0-.087 1.318.126.126 0 0 1-.033.1.137.137 0 0 1-.114.045A9.679 9.679 0 0 1 4.706 5.69a.194.194 0 0 0-.314.024 3.513 3.513 0 0 0-.497 1.8c0 .97.4 1.885 1.093 2.552a3.332 3.332 0 0 1-.836-.317c-.127-.068-.283.02-.285.162-.018 1.442.846 2.724 2.14 3.302a3.36 3.36 0 0 1-.695-.057c-.143-.026-.263.106-.218.241.42 1.282 1.55 2.226 2.901 2.44a6.878 6.878 0 0 1-3.788 1.124h-.424a.28.28 0 0 0-.274.207.281.281 0 0 0 .139.313 10.243 10.243 0 0 0 5.055 1.331c1.553 0 3.007-.3 4.32-.895a9.524 9.524 0 0 0 3.16-2.313 10.097 10.097 0 0 0 1.935-3.166 9.796 9.796 0 0 0 .658-3.465v-.055c0-.183.085-.356.233-.474a7.14 7.14 0 0 0 1.458-1.562c.106-.156-.062-.351-.237-.275"
                        ></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);">
                      <svg
                        data-test-id="Icon"
                        class="Wrapper-dyuznp cLUlpE"
                        width="24"
                        height="46px"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <title>Pinterest</title>
                        <path
                          d="M5 9.457c0-.78.136-1.514.406-2.2.27-.688.643-1.29 1.12-1.803a7.637 7.637 0 0 1 3.646-2.173A8.573 8.573 0 0 1 12.358 3c1.138 0 2.2.24 3.18.72a6.006 6.006 0 0 1 2.392 2.094c.614.917.92 1.951.92 3.105 0 .692-.068 1.37-.205 2.033a8.227 8.227 0 0 1-.649 1.914 6.667 6.667 0 0 1-1.082 1.617 4.724 4.724 0 0 1-1.568 1.115 4.955 4.955 0 0 1-2.044.417c-.49 0-.977-.116-1.46-.346-.483-.231-.83-.547-1.038-.951-.072.28-.173.687-.303 1.218-.13.53-.215.872-.254 1.026-.04.155-.114.412-.222.768a5.154 5.154 0 0 1-.28.768c-.08.154-.196.38-.346.676-.15.296-.318.575-.498.838-.18.262-.404.575-.67.935L8.08 21l-.098-.108c-.109-1.132-.162-1.812-.162-2.034 0-.663.077-1.409.233-2.234a46.97 46.97 0 0 1 .72-3.11c.325-1.247.513-1.98.562-2.196-.231-.469-.345-1.079-.345-1.828 0-.599.187-1.161.562-1.688.375-.527.85-.79 1.427-.79.441 0 .783.147 1.027.439.246.292.367.661.367 1.11 0 .475-.158 1.164-.476 2.066-.317.902-.475 1.576-.475 2.022 0 .454.161.832.487 1.13.325.3.718.448 1.179.448.396 0 .764-.09 1.103-.27.34-.18.623-.426.849-.735a6.165 6.165 0 0 0 1.018-2.224c.097-.423.168-.823.216-1.201a8.59 8.59 0 0 0 .07-1.077c0-1.247-.395-2.219-1.185-2.915-.79-.696-1.818-1.043-3.087-1.043-1.442 0-2.647.466-3.613 1.401-.966.933-1.449 2.118-1.449 3.555 0 .317.046.624.136.92.09.296.187.53.292.703.105.173.202.338.292.493.09.154.136.264.136.33 0 .202-.053.465-.162.79-.108.325-.242.487-.4.487-.015 0-.075-.011-.184-.033a2.216 2.216 0 0 1-.979-.606 3.148 3.148 0 0 1-.659-1.023 6.695 6.695 0 0 1-.35-1.169A4.967 4.967 0 0 1 5 9.457z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="singlePostContent">
        <div class="container">
          <div class="devider"></div>
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <?php the_content(); ?>
              <a href="javascript:void(0);" class="btn-red">Update Me</a>
            </div>
          </div>
        </div>
      </section>

      <section class="paginationSingle">
        <div class="container">
          <div class="paginationSingleInner">
            
            <?php
              $post_id = $post->ID; // current post ID
              $cat = get_the_category(); 
              $current_cat_id = $cat[0]->cat_ID; // current category ID 
              
              $args = array( 
                  'category' => $current_cat_id,
                  'orderby'  => 'post_date',
                  'order'    => 'DESC'
              );
              $posts = get_posts( $args );
              // get IDs of posts retrieved from get_posts
              $ids = array();
              foreach ( $posts as $thepost ) {
                  $ids[] = $thepost->ID;
              }
              // get and echo previous and next post in the same category
              $thisindex = array_search( $post_id, $ids );
              $previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : 0;
              $nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : 0;
              
              if ( $previd ) {
                  ?><a rel="prev" href="<?php echo get_permalink($previd) ?>">Previous</a><?php
              }
              if ($previd || $nextid) {
                ?>
                <span class="postCounter">
                  <?php
                  // post count
                    $postNo = 0;
                    $postCount = 0;
                    $totalPosts = count($posts);
                    $currentPostId = get_the_ID();
                    foreach ($posts as $post) {
                      $postCount++;
                      if($currentPostId == $post->ID) {
                        // echo $post->ID;
                        $postNo = $postCount;
                        echo $postNo."/<b>".$totalPosts."</b>";
                      }
                      else {
                        $postNo = 0;
                      }
                    }
                    // end post count
                  ?>
                </span>
                <?php
              }
              if ( $nextid ) {
                  ?><a rel="next" href="<?php echo get_permalink($nextid) ?>">Next</a><?php
              }

            ?>

            <?php //previous_post_link(); ?>    <?php //next_post_link(); ?>
          </div>
        </div>
      </section>
</main>




<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
