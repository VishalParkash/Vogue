<?php /* Template Name: Portfolio-Dev */ ?>
<?php get_header(); ?>

<div class="portfolio-logo">
    <img src="<?php echo get_stylesheet_directory_uri().'/images/portfolio-logo.png' ?>" alt="portfolio-logo" />
  </div>
<!-- filter design -->
<section class="portfolio border-top-1">
        <div class="container">
          <h2 class="secHeading">
            <span>Vogue Portfolio</span>
          </h2>
          <h3 class="secHeadingItalic">
            Discover designers and couturiers, stylists, event planners and<br />
            exclusive boutiques, all searchable by category and location !
          </h3>
     
          <div class="filters">
          <form id="filters">
      		<div class="row">
              <div class="col-md-10 offset-md-1">
             <input type="text" class="inputFilde search" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <div class="row">
                  <div class="col-md-4">
                    <div class="inputFilde dropDoenBtn">
                      <span>BRAND</span>
                      <div class="dropDoenBtnOver">
                        <button class="closeBtn">
                          <img src="<?php echo get_stylesheet_directory_uri().'/images/close-red.png'?>" alt="close" />
                        </button>
                        <div class="row">
                          <div class="col-12">
                          <?php
                                if( $terms = get_terms( array( 'taxonomy' => 'brands' ) ) ) : 
                                    foreach ( $terms as $term ) :
                                        ?>
                                        <label class="customCheck">
                                            <input type="checkbox" name="filters" value="<?php echo $term->term_id; ?>" />
                                            <span class="customRadioCheck"></span>
                                            <span><?php echo $term->name; ?></span>
                                        </label>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                          </div>
                        
                        </div>
                        <button class="doneBtn">Done</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="inputFilde dropDoenBtn">
                      <span>CITY</span>
                      <div class="dropDoenBtnOver">
                        <button class="closeBtn">
                          <img src="<?php echo get_stylesheet_directory_uri().'/images/close-red.png'?>" alt="close" />
                        </button>
                        <div class="row">
                          <div class="col-12">
                          <?php
                                    if( $terms = get_terms( array( 'taxonomy' => 'cities' ) ) ) : 
                                        foreach ( $terms as $term ) :
                                            ?>
                                            <label class="customCheck">
                                                <input type="checkbox" name="filters" value="<?php echo $term->term_id; ?>" />
                                                <span class="customRadioCheck"></span>
                                                <span><?php echo $term->name; ?></span>
                                            </label>
                                            <?php
                                        endforeach;
                                    endif;
                                ?>   
                          </div>
                          
                        </div>
                        <button class="doneBtn">Done</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="inputFilde dropDoenBtn">
                      <span>SERVICES</span>
                      <div class="dropDoenBtnOver">
                        <button class="closeBtn">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-red.png" alt="close" />
                        </button>
                        <div class="row">
                          <div class="col-12">
                          <?php
                                    if( $terms = get_terms( array( 'taxonomy' => 'services' ) ) ) : 
                                        foreach ( $terms as $term ) :
                                            ?>
                                            <label class="customCheck">
                                                <input type="checkbox" name="filters" value="<?php echo $term->term_id; ?>" />
                                                <span class="customRadioCheck"></span>
                                                <span><?php echo $term->name; ?></span>
                                            </label>
                                            <?php
                                        endforeach;
                                    endif;
                                ?> 
                          </div>
                          
                        </div>
                        <button class="doneBtn">Done</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>   
          


          </div>
        </div>
      </section>


 <!-- slider -->
 <section class="portfolioSliderSec">
        <div class="container">
          <div id="portfolioSlide">
            <!-- slider data -->
          </div>
        </div>
      </section>
      <!-- end slider -->

	  <!-- slider -->
    
      <!-- end slider -->
	
<?php get_footer(); ?>