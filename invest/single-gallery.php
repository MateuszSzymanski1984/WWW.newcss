<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();	?>	
	<div class="center">
		<div class="row">
			<div class="col-md-12 box_center">
				<span id="header"><?php the_title(); ?></span>
				<div id="zawartosc">
					<?php the_content(); ?> 
					<div class="galeria">
						<?php
						$licz = 1;
						$images = get_field('galeria');
						if( $images ):?>

						<?php foreach( $images as $image ): ?>
							<div class="col-xs-12 xs-480-50p col-sm-4">
								<a class="fancybox-thumb fancybox" href="<?php echo $image['url']; ?>" rel="fancybox-thumb">
									<img class="img-responsive" src="<?php echo $image['sizes']['zdjecie-galeriaa']; ?>" alt="<?php echo $image['alt']; ?>" />
								</a>
							</div>
							<?php if($licz % 3 == 0){ echo "<div class='clearfix hidden-xs visible-sm visible-md visible-lg'></div>"; } ?>
							<?php if($licz % 2 == 0){ echo "<div class='clearfix xs-480-visible hidden-xs hidden-sm hidden-lg hidden-md'></div>"; } ?>
							<?php echo "<div class='clearfix xs-480-hidden visible-xs hidden-sm hidden-lg hidden-md'></div>"; ?>
							<?php $licz++;
							endforeach;
							endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>	<!-- container -->
	<?php endwhile; ?>
<?php else: ?>
	<p>Nie znaleziono<br>Sprobuj ponownie</p>
<?php endif; ?>

<?php get_footer(); ?>
