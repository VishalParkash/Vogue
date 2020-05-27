<?php
/*Template Name: Filter Ajax*/

$path = preg_replace('/wp-content.*$/','',__DIR__);
$path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path.'wp-load.php');
// Array with names
/*
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
*/

global $post;
// print_r($post);die;

$returnData = "";

$q = $_REQUEST["q"];
$terms = explode(',', $_REQUEST["q"]);
// print_r($terms);die;
// echo "<pre>";print_r($terms);die;
$taxonomies = array();
foreach ($terms as $value) {
    // $taxonomies[] = get_term_by($value);
    // $taxonomies[] = get_term( $value );
    /*
    if (in_array($value, $taxonomies)) { 
        echo "found <br/>"; 
    } 
    else { 
        // $taxonomies[] = get_term($value);

        echo "not found <br/>"; 
    } 

    */
    $term = get_term( $value );
    // echo $term->taxonomy;
    // echo "<br>";
    // array_push($taxonomies, $term->taxonomy);

    if (in_array($term->taxonomy, $taxonomies)) { 
        // echo "found <br/>"; 
    } 
    else { 
        // $taxonomies[] = get_term($value);
        array_push($taxonomies, $term->taxonomy);
        // echo "not found <br/>"; 
    }

}

// echo "<pre>";print_r($taxonomies);

// echo "<pre>";print_r($taxonomies->name);
// die;



// echo "<pre>";print_r($taxonomies);
// die();

// echo "<pre>";print_r($terms);

// Set the arguments for the query


$posts = array();

foreach ($taxonomies as $taxonomie){ 
    // echo $taxonomie;
    $posts = array( 
      'numberposts'     => -1, // -1 is for all
      'post_type'       => 'portfolios', // or 'post', 'page'
      'orderby'         => 'title', // or 'date', 'rand'
      'order'       => 'ASC', // or 'DESC'
      'tax_query' => array(
        array(
            // 'taxonomy' => $taxonomies,
            'taxonomy' => $taxonomie,
            'terms' => $terms,
            'field' => 'term_id',
        )
        ),
    );

    $myposts[] = get_posts($posts);
}
/*
$args = array( 
  'numberposts'     => -1, // -1 is for all
  'post_type'       => 'portfolios', // or 'post', 'page'
  'orderby'         => 'title', // or 'date', 'rand'
  'order'       => 'ASC', // or 'DESC'
  'tax_query' => array(
    array(
        // 'taxonomy' => $taxonomies,
        'taxonomy' => 'brands',
        'terms' => $terms,
        'field' => 'id',
    )
    ),
);
*/
// Get the posts

 // echo "<pre>";print_r($myposts);die;
// $returnData = print_r($myposts);
/*
if($myposts):
  // Loop the posts
  foreach ($myposts as $mypost):

    $returnData = get_the_title($mypost->ID);

  endforeach; wp_reset_postdata(); 
endif;

*/


// get the q parameter from URL



// $returnDat
$hint = "";

if($myposts) {
    $htmData = "";
    $htmData =  '<div class="portfolioSlide">';
    foreach ($myposts as $post){
        foreach ($post as $value) {
            // echo "<pre>";print_r($value);
            // echo "title is :".$value->post_title."<br/>";
            $htmData .= '<div class="singlePostItm">';
            $htmData .= '<a href="'.get_permalink( $value->ID ).'">';
            $htmData .= '<div class="singlePostItmImg">'.get_the_post_thumbnail( $value->ID, 'large' ).'</div>';
            $htmData .= '<div class="singlePostItmTxt">';
            $htmData .= '<h4>'.$value->post_title.'</h4>';
            $htmData .= '</div>';
            $htmData .= '</a>';
            $htmData .= '</div>';
        }

    }
    $htmData .= '</div>';
    $hint = $htmData;
}

if($q == "") {
   
        echo '<div class="portfolioSlide">';

          $args = array( 'post_type' => 'portfolios', 'posts_per_page' => -1 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <!-- itm -->
            <div class="singlePostItm">
              <a href="<?php echo get_permalink( $post->ID ); ?>">
                <div class="singlePostItmImg">
                  <?php
                    if ( has_post_thumbnail( $post->ID ) ) {
                      echo get_the_post_thumbnail( $post->ID, 'large' );
                    }
                  ?>
                  <!-- <img src="./images/port-slider-7.jpg" alt="port-slider-7" /> -->
                 
                </div>
                <div class="singlePostItmTxt">
                  <h4><?php echo the_title(); ?></h4>
                </div>
              </a>
            </div>
            <!-- end itm -->
             <?php
             endwhile;
    echo '</div>';         
           

}

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>