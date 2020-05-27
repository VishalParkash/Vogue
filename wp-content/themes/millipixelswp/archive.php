<?php
get_header(); 
?>
		<main>
		<div class="container">
			<h1 class="pageHeding"><?php single_cat_title(); ?></h1>
		</div>
		<?php if ( have_posts() ) : ?>
			<div class="container">
				<!-- <h1 class="pageHeding">
					<?php 
						foreach((get_the_category()) as $category){
							// echo $category->name;
						}
					?>
				</h1> -->
				<?php //the_archive_title( '<h1 class="pageHeding">', '</h1>' ); ?>
			</div>
			<section>
				<div class="container">
					<?php if ( is_category() ) {  ?>


						<?php

							$curentCategory = get_queried_object();
							
							$categories=get_categories(
								array( 'parent' => $curentCategory->term_id )
							);
							// $curentCategory = get_queried_object();
							// $curentCategory->term_id;
							
							// $children = get_categories( array( 
							// 	'child_of'      => $curentCategory->term_id,
							// 	// 'taxonomy'      => $taxonomy,
							// 	// 'hide_empty'    => false,
							// 	// 'fields'        => 'ids',
							// ) );
							// // return ( $children );
							if(!empty($categories) ||  $curentCategory->parent !== 0 ) {
								$category_link = "javascript:void(0);";
								$activeClassOne = "active";
			
							 if($curentCategory->parent !== 0) {
								$categories=get_categories(
									array( 'parent' => $curentCategory->parent)
								);
								$category_link = get_category_link($curentCategory->parent);
								$activeClassOne = "";
							 }
					?>
					<!-- tabLink -->
					 
					<div class="tabLink">
						<ul>
							<li class="<?php echo $activeClassOne; ?>"><a href=<?php echo  $category_link; ?>>All topics</a></li>
							<?php
								$curentCategory = get_queried_object();
								$curentCategory->term_id;
								//$currentCat = single_cat_title();
								foreach((get_the_category()) as $category){
									$categoryParent = $category->parent;
								}
								$args = array('child_of' => $categoryParent);
								 
								foreach($categories as $category) {
									if($curentCategory->term_id == $category->term_id) {
										$activeClass = "active";
									}
									else {
										$activeClass = "";
									}
							?>
							<li class="<?php echo $activeClass; ?>"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
							<?php
								}
							?>
						</ul>
					</div>
					<!-- end tabLink -->
					<!-- tabLinkMob -->
					<div class="tabLinkMobile">
						<label class="tabLinkMobileClick">
						<span>
							<?php
								if($activeClassOne == "active") {
									echo "All topics";
								}
								else {
									single_cat_title();
								}
							?>
						</span>
						<img class="tabLinkMobileArrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.svg" alt="down-arrow">
						</label>
						<div class="tabLinkMobileOver">
							<ul>
								<li class="<?php echo $activeClassOne; ?>"><a href=<?php echo  $category_link; ?>>All topics</a></li>
								<?php
									$curentCategory = get_queried_object();
									$curentCategory->term_id;
									//$currentCat = single_cat_title();
									foreach((get_the_category()) as $category){
										$categoryParent = $category->parent;
									}
									$args = array('child_of' => $categoryParent);
									
									foreach($categories as $category) {
										if($curentCategory->term_id == $category->term_id) {
											$activeClass = "active";
										}
										else {
											$activeClass = "";
										}
								?>
								<li class="<?php echo $activeClass; ?>"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
								<?php
									}
								?>
							</ul>
						</div>
					</div>
					<!-- end tabLinkMob -->
					<?php } } ?>
					<div class="row">
					<?php
					// Start the Loop.
					$countPost = 0;
					while ( have_posts() ) :
						the_post();
						//the_content();
						$countPost++;
					?>

						<div class="col-lg-3 col-md-6">
							<div class="singlePostItm <?php if($countPost !== 1) {echo "singlePostItmMob";} ?>">
								<a href="<?php the_permalink(); ?>">
									<div class="singlePostItmImg">
										<?php 
											$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
											the_post_thumbnail('full');
										?>
									</div>
									<div class="singlePostItmTxt">
									<span class="postTag">
									<?php 
										foreach((get_the_category()) as $category){
											echo $category->name;
										}
									?>
									</span>
									<h3><?php the_title(); ?></h3>
									<span class="postBy">BY <?php the_author(); ?></span>
									<span class="postDate"><?php echo get_the_date(); ?></span>
									</div>
								</a>
							</div>
						</div>

					<?php
								

					endwhile;

				
					// If no content, include the "No posts found" template.
					else :
					echo  " No Post Found" ;

					endif;
					?>
						

					</div>
				</div>
			</section>
			<?php
				global $wp_query;
				$big = 999999999; // need an unlikely integer
				echo '<div class="paginate-links">';
				  echo paginate_links( array(
				  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				  'format' => '?paged=%#%',
				  'prev_text' => __('<< Previous'),
				  'next_text' => __('Next >>'),
				  'current' => max( 1, get_query_var('paged') ),
				  'total' => $wp_query->max_num_pages
				  ) );
				echo '</div>';
			?>
		</main>
<?php get_footer(); ?>
