<?php get_header(); ?>

<!-- szblon pojedynczego wpisu -->

<?php if (have_posts()) : while (have_posts()) : the_post();	?>	

	<div class="container">
		<div class="row">
			<div class="box col-xs-12">
				<h2><?php the_title(); ?><h2>

					<span class="text_pod_obrazkiem"><?php the_time('l, d F Y, H:i') ?></span>

					<span class="text2"><?php the_content(); ?></span> 

					<?php

					$images = get_field('galeria');
					if( $images ):

					$licz=1; ?>
					<?php foreach( $images as $image ): ?>
					<div class="col-xs-12 xs-480-50p col-sm-4">
						<a class="fancybox-thumb fancybox" href="<?php echo $image['url']; ?>" rel="fancybox-thumb">

							<img class="lupa" src="<?php bloginfo('template_url'); ?>/images/lupa.png"/>
						</a>

						<img class="obrazy img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					</div>
					<?php if($licz % 3 == 0){ echo "<div class='clearfix hidden-xs visible-sm visible-md visible-lg'></div>"; } ?>
					
					<?php echo "<div class='clearfix xs-480-hidden visible-xs hidden-sm hidden-lg hidden-md'></div>"; ?>
					<?php $licz++;

					endforeach;
					endif; ?>

				</div><!--box-->
			</div><!--row-->
		</div><!--container-->


	<?php endwhile; ?>
<?php else: ?>
	<p>Nie znaleziono<br>Sprobuj ponownie</p>
<?php endif; ?>

<?php get_footer(); ?>
