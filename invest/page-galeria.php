<?php
/*
Template Name: Galeria
*/
?>


<?php get_header(); ?>
<?php

$the_query = new WP_Query( array('page_id' => 17) ); 

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>

		<div class="center">
			<div class="row">
				<div class="col-md-12 box_center">
					<span id="header"><?php the_title(); ?></span>
					<div id="zawartosc">
						<?php the_content(); ?> 

						<div class="galeria">
							<?php

							$the_query_gal = new WP_Query( array('post_type' => 'gallery', 'posts_per_page' => -1, 'orderby' => 'menu_order' ));


							if ( $the_query_gal->have_posts() ) {
								$licz = 1;
								while ( $the_query_gal->have_posts() ) {
									$the_query_gal->the_post(); ?>
									<div class="col-xs-12 xs-480-50p col-sm-4">
										<a class="album" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail("zdjecie-galeriaa", array('class' => 'img-responsive')); ?>
											<div class="nazwa-galerii"><?php the_title(); ?></div>
										</a>
									</div>
									<?php if($licz % 3 == 0){ echo "<div class='clearfix hidden-xs visible-sm visible-md visible-lg'></div>"; } ?>
									<?php if($licz % 2 == 0){ echo "<div class='clearfix xs-480-visible hidden-xs hidden-sm hidden-lg hidden-md'></div>"; } ?>
									<?php echo "<div class='clearfix xs-480-hidden visible-xs hidden-sm hidden-lg hidden-md'></div>"; ?>
									<?php $licz++;
								}

							} else {

							}

							wp_reset_postdata();
							?>
						</div>
					</div>
					<?php
				}
			} else {
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>	<!-- container -->
<?php get_footer(); ?>
