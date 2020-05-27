
<?php /* Template Name: Homepage Template*/?>
<?php
get_header();
?>

<main>

<?php

// check if the repeater field has rows of data
$rows = get_field('section');
// echo "<pre>";print_r($rows);die;
// if( have_rows('section') ){
    if(!empty($rows)){
 	// loop through the rows of data
    //while ( have_rows('section') ) : the_row();
foreach($rows as $row){
    // print_r(get_field('section_type'));die;
        // display a sub field value
        // the_sub_field('section_type');
        // the_sub_field('section_type');

        $sub_value = $row['section_type'];
        // echo "<pre>";print_r($row['select_post']);

        if($sub_value == "Full Width Post") {
            // $imageURL = ger
            // code 
        /*
        $post = get_sub_field_object('select_post');
        echo "<pre>";
        print_r($row['select_post']);
        echo "</pre>";

        */

        
        
        
        $post = get_sub_field_object('select_post');

        $postURL =  get_permalink($row['select_post']->ID);
        $imageURL =  get_the_post_thumbnail_url($row['select_post']->ID);
        $postTitle =  $row['select_post']->post_title;
        $category = get_the_category($row['select_post']->ID);
        $categoryName = $category[0]->name;
        $user_nickname = get_the_author_meta('nickname',$row['select_post']->post_author);
        $post_date = $row['select_post']->post_date;
        $postDate = strtoupper(date("d F Y", strtotime($post_date)));
        // echo date_format($date,"Y/m/d H:i:s");
      


        

        

        

            // code 
?>
    <section class="full-post border-top-1">
      <div class="container">
        <h2 class="secHeading">
          <span>In Vogue</span>
        </h2>

        <div class="row">
          <div class="col-sm-12">
            <div class="post-img">
              <a href="<?php echo $postURL; ?>">
                <div class="img-wrap">
                  <img src="<?php echo $imageURL; ?>" alt="full-post-img">
                </div>

                <div class="img-text">
                    <div class="img-caption">
                        <!-- <h6>Fashion</h6> -->
                        <h6><?php echo $categoryName; ?></h6>
                        <!-- <h3>Alia Bhatt on why father Mahesh Bhatt celebrated when Shaandaar failed at the box office</h3> -->
                        <h3><?php echo $postTitle; ?></h3>
                        <div class="caption-detail">
                          <span class="author"> By  <?php echo $user_nickname; ?> </span>
                          <span class="time"><?php echo $postDate; ?></span>
                        </div>
                      </div>
                </div>

              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
        }

        
        elseif($sub_value == "Grid Post") {

        $post = get_sub_field_object('select_post');
        $postURL =  get_permalink($row['select_post']->ID);
        $imageURL =  get_the_post_thumbnail_url($row['select_post']->ID);
        $postTitle =  $row['select_post']->post_title;
        $category = get_the_category($row['select_post']->ID);
        $categoryName = $category[0]->name;
        $user_nickname = get_the_author_meta('nickname',$row['select_post']->post_author);
        // $post_date = $row['select_post']->post_date;
        // $postDate = strtoupper(date("d F Y", strtotime($post_date)));


            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
            'posts_per_page'   => 10,
             'paged'           => $paged,
            'offset'           => 0,
            'post__not_in'     => array($row['select_post']->ID,),
            'category'         => '',
            'category_name'    =>  $categoryName,
            'orderby'          => 'post_date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'post',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'post_status'      => 'publish',
            'suppress_filters' => true
        );
        // The Query
        $the_query =  get_posts( $args );
        // echo "<pre>";print_r($the_query[0]);


?>
    
    <section class="all-post text-style border-top-1">
      <div class="container">
        <h2 class="secHeading">
            <span><?php echo $categoryName; ?></span>
          </h2>

        <div class="row">
          <div class="col-lg-6">
            <div class="sticky-post">
              <a href="<?php echo $postURL; ?>">
                  <img src="<?php echo $imageURL; ?>" alt="">

                  <div class="post-content">
                  <div class="img-caption">
                    <h6><?php echo $categoryName; ?></h6>
                    <h3><?php echo $postTitle; ?></h3>
                    <span class="author ">
                      By  <?php echo $user_nickname; ?>
                    </span>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row postsList">
            <!-- <div class="posts"> -->
                <?php foreach($the_query as $result){?>
                    <?php
                        // print_r($result);
                        // echo $result->post_title;
                        $postTitle = $result->post_title;
                        $postAuther = $result->post_author;
                        $user_nickname = get_the_author_meta('nickname',$postAuther);
                        $postID = $result->ID;
                        $category = get_the_category($postID);
                        $categoryName = $category[0]->name;
                        $imageURL =  get_the_post_thumbnail_url($postID);
                        $postURL =  get_permalink($postID);
                    ?>
                    <div class="col-md-6">
                      <div class="singlePostItm singlePostItmMob">
                          <a href="<?php echo $postURL; ?>">
                            <div class="singlePostItmImg">
                              <img src="<?php echo $imageURL; ?>" alt="renPost1">
                            </div>
                            <div class="singlePostItmTxt">
                              <span class="postTag"><?php echo $categoryName; ?></span>
                              <h3><?php echo $postTitle; ?></h3>
                              <span class="postBy">BY <?php echo $user_nickname; ?></span>
                              <!-- <span class="postDate">16 OCTOBER 2019</span> -->
                            </div>
                          </a>
                        </div>
                    </div>
                <?php } ?>
                  

                   

                     
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
        }
        elseif($sub_value == "Post Carousel") {

$post = get_sub_field_object('select_category');
          // code
          // echo $sub_value;
          // select_category
          // $posts = get_sub_field_object('select_category');
          // print_r($posts);
           $catID = $row['select_category'];
          // code

          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
          'posts_per_page'   => 10,
           'paged'           => $paged,
          'offset'           => 0,
          'category'         => $catID, 
          'orderby'          => 'post_date',
          'order'            => 'DESC',
          'include'          => '',
          'exclude'          => '',
          'meta_key'         => '',
          'meta_value'       => '',
          'post_type'        => 'post',
          'post_mime_type'   => '',
          'post_parent'      => '',
          'post_status'      => 'publish',
          'suppress_filters' => true
      );
      // The Query
      $the_query =  get_posts( $args );
      // print_r($the_query);


?>

<section class="portfolioSliderSec border-top-1">
  <div class="container">
    <h2 class="secHeading">
      <span>Read Now</span>
    </h2>
    <div class="portfolioSlide">
    <?php foreach($the_query as $result){?>
    <?php
        // print_r($result);
        // echo $result->post_title;
        $postTitle = $result->post_title;
        $postAuther = $result->post_author;
        $user_nickname = get_the_author_meta('nickname',$postAuther);
        $postID = $result->ID;
        $category = get_the_category($postID);
        $categoryName = $category[0]->name;
        $imageURL =  get_the_post_thumbnail_url($postID);
        $postURL =  get_permalink($postID);
        $post_date = $result->post_date;
        $postDate = strtoupper(date("d F Y", strtotime($post_date)));
    ?>

    <div class="singlePostItm">
      <a href="<?php echo $postURL; ?>">
        <div class="singlePostItmImg">
          <img src="<?php echo $imageURL; ?>" alt="renPost1">
        </div>
        <div class="singlePostItmTxt">
          <h3><?php echo $postTitle; ?></h3>
        </div>
      </a>
    </div>

    <?php } ?>
    </div>
  </div>
</section>
<?php
        }
        elseif($sub_value == "Column Post") {

          $post = get_sub_field_object('select_category');
          // code
          // echo $sub_value;
          // select_category
          // $posts = get_sub_field_object('select_category');
          // print_r($posts);
           $catID = $row['select_category'];

          // code

          $readMoreURL = get_category_link( $catID );
          $catName = get_cat_name($catID);
        
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
          'posts_per_page'   => 5,
          'paged'           => $paged,
          'offset'           => 0,
          'category'         => $catID, 
          'orderby'          => 'post_date',
          'order'            => 'DESC',
          'include'          => '',
          'exclude'          => '',
          'meta_key'         => '',
          'meta_value'       => '',
          'post_type'        => 'post',
          'post_mime_type'   => '',
          'post_parent'      => '',
          'post_status'      => 'publish',
          'suppress_filters' => true
      );
      // The Query
      $the_query =  get_posts( $args );
      $totalPostCount = count($the_query);
      $readMore = false;
      if($totalPostCount > 4) {
        array_pop($the_query);
        $readMore = true;
       }
      
      $postCount = 0;
?>
<section class="recommends border-top-0">
  <div class="container">
    <h2 class="secHeading">
      <!-- <span>Read Now</span> -->
      <span><?php echo $catName; ?></span>
    </h2>
    <div class="row">
    <?php 
 
    foreach($the_query as $result){?>
    <?php
      $postCount++;
        // print_r($result);
        // echo $result->post_title;
        $postTitle = $result->post_title;
        $postAuther = $result->post_author;
        $user_nickname = get_the_author_meta('nickname',$postAuther);
        $postID = $result->ID;
        $category = get_the_category($postID);
        $categoryName = $category[0]->name;
        $imageURL =  get_the_post_thumbnail_url($postID);
        $postURL =  get_permalink($postID);
        $post_date = $result->post_date;
        $postDate = strtoupper(date("d F Y", strtotime($post_date)));
        // echo $postCount;
    ?>
    <div class="col-md-6 col-lg-3">
      <div class="singlePostItm <?php if($postCount !== 1) {echo "singlePostItmMob";} ?>">
        <a href="<?php echo $postURL; ?>">
          <div class="singlePostItmImg">
            <img src="<?php echo $imageURL; ?>" alt="renPost1">
          </div>
          <div class="singlePostItmTxt">
            <h3><?php echo $postTitle; ?></h3>
          </div>
        </a>
      </div>
      <?php if($readMore  && $postCount === 4) { ?>
      <!-- load-more -->
      <div class="load-more">
        <a href="<?php echo $readMoreURL; ?>" class="GTWalsheimProBold">
          <span>
            More Read Now
          </span>
          <div class="circle-arrow">
            <svg data-test-id="Icon" class="icon Wrapper-dyuznp jLaXJl" width="14px" height="24" fill="currentColor" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><title>Chevron</title><path d="M12.5 3L14 4.4 7 11 0 4.4 1.5 3 7 8.2 12.5 3z"></path></svg>
          </div>
        </a>
      </div>
      <!-- end load-more -->
    <?php }
        ?>
    </div>
    <?php
  
    
    ?>
    <?php } ?>
    </div>
  </div>
</section>
<?php
        }
    }

}

else {
    // no rows found
}


?>

</main>

<?php
get_footer();
?>
