<?php
/*
Template Name: Tekst
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();	?>	


	<div class="center">
		<div class="row">
			<div class="col-md-12 box_center">
				<span id="header"><?php the_title(); ?></span>
				<div id="zawartosc">
					<?php the_content(); ?>
				</div>
			</div><!--box_center-->
		</div><!--row-->
	</div>    <!-- container -->


<?php endwhile; ?>
<?php else: ?>
	<p>Nie znaleziono<br>Sprobuj ponownie</p>
<?php endif; ?>

<?php get_footer(); ?>
