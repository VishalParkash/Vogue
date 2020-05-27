<?php
/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function tutsplus_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'tutsplus' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'tutsplus' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'tutsplus' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'tutsplus' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
         
}   
 
    // Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
    add_action( 'widgets_init', 'tutsplus_widgets_init' );

    // for add logo option in website
    function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
    // This theme uses post thumbnails
    add_action( 'after_setup_theme', 'ja_theme_setup' );
    function ja_theme_setup() {
        add_theme_support( 'post-thumbnails');
    }

// For add taxonomy in admin
	// ADD CUSTOM POST TYPE: SHOWS
  add_action( 'init', 'create_my_post_types' );
  function create_my_post_types() {
      register_post_type( 'portfolios',
      
      array(
      'labels' => array(
          'name' => 'Portfolio',
          'singular_name' => 'Portfolio',
          'add_new' => 'Add Item',
          'all_items' => 'All Items',
          'add_new_item' => 'Add Item',
          'edit_item' => 'Edit Item',
          'new_item' => 'New Item',
          'view_item' => 'View Item',
          'search_item' => 'Search Portfolio',
          'not_found' => 'No items found',
          'not_found_in_trash' => 'No items found in trash',
          'parent_item_colon' => 'Parent Item'
  
      ),
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 5,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'portfolios', 'with_front' => false ),
      'taxonomies' => array( '', 'post_tag'),
      'can_export' => true,
      'supports' => array(
          'title',
          'editor',
          'excerpt' ,
          'thumbnail',
          'revisions')
      )
      );
  }


  //hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

$labels = array(
'name' => _x( 'Brands', 'taxonomy general name' ),
'singular_name' => _x( 'Brand', 'taxonomy singular name' ),
'search_items' =>  __( 'Search Brands' ),
'all_items' => __( 'All Brands' ),
'parent_item' => __( 'Parent Brand' ),
'parent_item_colon' => __( 'Parent Brand:' ),
'edit_item' => __( 'Edit Brand' ), 
'update_item' => __( 'Update Brand' ),
'add_new_item' => __( 'Add New Brand' ),
'new_item_name' => __( 'New Brand Name' ),
'menu_name' => __( 'Brands' ),
);    

// Now register the taxonomy

register_taxonomy('brands',array('portfolios'), array(
'hierarchical' => true,
'labels' => $labels,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'brand' ),
));

//For City
$labelsCity = array(
  'name' => _x( 'Cities', 'taxonomy general name' ),
  'singular_name' => _x( 'Brand', 'taxonomy singular name' ),
  'search_items' =>  __( 'Search Cities' ),
  'all_items' => __( 'All Cities' ),
  'parent_item' => __( 'Parent City' ),
  'parent_item_colon' => __( 'Parent City:' ),
  'edit_item' => __( 'Edit City' ), 
  'update_item' => __( 'Update City' ),
  'add_new_item' => __( 'Add New City' ),
  'new_item_name' => __( 'New City Name' ),
  'menu_name' => __( 'Cities' ),
  );    
  
  // Now register the taxonomy
  register_taxonomy('cities',array('portfolios'), array(
  'hierarchical' => true,
  'labels' => $labelsCity,
  'show_ui' => true,
  'show_admin_column' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'city' ),
  ));


  //For Services
$labelsCity = array(
  'name' => _x( 'Services', 'taxonomy general name' ),
  'singular_name' => _x( 'Brand', 'taxonomy singular name' ),
  'search_items' =>  __( 'Search Services' ),
  'all_items' => __( 'All Services' ),
  'parent_item' => __( 'Parent Service' ),
  'parent_item_colon' => __( 'Parent Service:' ),
  'edit_item' => __( 'Edit Service' ), 
  'update_item' => __( 'Update Service' ),
  'add_new_item' => __( 'Add New Service' ),
  'new_item_name' => __( 'New Service Name' ),
  'menu_name' => __( 'Services' ),
  );    
  
  // Now register the taxonomy
  register_taxonomy('services',array('portfolios'), array(
  'hierarchical' => true,
  'labels' => $labelsCity,
  'show_ui' => true,
  'show_admin_column' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'service' ),
  ));

}
add_action( 'init', 'my_ajax_filter_search_callback' );

function my_script_enqueuer() {
   wp_register_script( "my_voter_script", WP_PLUGIN_URL.'/my_plugin/my_voter_script.js', array('jquery') );
   wp_localize_script( 'my_voter_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'my_voter_script' );

}


function my_ajax_filter_search_callback() {

  wp_register_script( "my_voter_script", WP_PLUGIN_URL.'/my_plugin/my_voter_script.js', array('jquery') );
  wp_localize_script( 'my_voter_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'my_voter_script' ); 
  
  header("Content-Type: application/json"); 

  $meta_query = array('relation' => 'AND');

  if(isset($_GET['year'])) {
      $year = sanitize_text_field( $_GET['year'] );
      $meta_query[] = array(
          'key' => 'year',
          'value' => $year,
          'compare' => '='
      );
  }

  if(isset($_GET['rating'])) {
      $rating = sanitize_text_field( $_GET['rating'] );
      $meta_query[] = array(
          'key' => 'rating',
          'value' => $rating,
          'compare' => '>='
      );
  }

  if(isset($_GET['language'])) {
      $language = sanitize_text_field( $_GET['language'] );
      $meta_query[] = array(
          'key' => 'language',
          'value' => $language,
          'compare' => '='
      );
  }

  $tax_query = array();

  if(isset($_GET['genre'])) {
      $genre = sanitize_text_field( $_GET['genre'] );
      $tax_query[] = array(
          'taxonomy' => 'category',
          'field' => 'slug',
          'terms' => $genre
      );
  }

  $args = array(
      'post_type' => 'portfolios',
      'posts_per_page' => -1,
      'meta_query' => $meta_query,
      'tax_query' => $tax_query
  );

  if(isset($_GET['search'])) {
      $search = sanitize_text_field( $_GET['search'] );
      $search_query = new WP_Query( array(
          'post_type' => 'portfolios',
          'posts_per_page' => -1,
          'meta_query' => $meta_query,
          'tax_query' => $tax_query,
          's' => $search
      ) );
  } else {
      $search_query = new WP_Query( $args );
  }

  if ( $search_query->have_posts() ) {

      $result = array();

      while ( $search_query->have_posts() ) {
          $search_query->the_post();

          $cats = strip_tags( get_the_category_list(", ") );
          $result[] = array(
              "id" => get_the_ID(),
              "title" => get_the_title(),
              "content" => get_the_content(),
              "permalink" => get_permalink(),
              "year" => get_field('year'),
              "rating" => get_field('rating'),
              "director" => get_field('director'),
              "language" => get_field('language'),
              "genre" => $cats,
              "poster" => wp_get_attachment_url(get_post_thumbnail_id($post->ID),'full')
          );
      }
      wp_reset_query();

     // echo json_encode($result);

  } else {
      // no posts found
  }

}



?>
