<?php get_header(); ?>

<?php $licz=1; ?>

<!-- szblon wszystkich wisów na stronie -->
<?php if (have_posts()) : while (have_posts()) : the_post();	?>

	<?php if($licz % 2 == 0){ ?>
	<div class="box aktualnosci_respons
	hidden-xs col-sm-offset-2 col-sm-5 col-md-offset-0 col-md-4 col-lg-4">
	<?php the_post_thumbnail('full',array( 'class' => 'img-responsive obraz')); ?>

	<span class="text_pod_obrazkiem"><?php the_time('l, d F Y, H:i') ?></span>

	<span class="text2"><?php the_excerpt(); ?></span>

	<div class="button2">
		<a href="<?php the_permalink(); ?>"><span class="button2_text"><?php the_field('zobacz_wiecej', 5); ?></span></a>
	</div><!--button2-->
</div><!--box-->
<?php }
else{ ?>
<div class="box aktualnosci_respons col-xs-12 col-sm-5 col-md-4 col-lg-4">
	<?php the_post_thumbnail('full',array( 'class' => 'img-responsive obraz')); ?>

	<span class="text_pod_obrazkiem"><?php the_time('l, d F Y, H:i') ?></span>

	<span class="text2"><?php the_excerpt(); ?></span> <!--zajawka the_excerpt-->
	<!--permalink - link do pojedynczego, konkretnego wpisu wpisu-->

	<div class="button2">
		<a href="<?php the_permalink(); ?>"><span class="button2_text"><?php the_field('zobacz_wiecej', 5); ?></a>
	</div><!--button2-->
</div><!--box-->

<?php } ?>

<?php if($licz % 3 == 0) {
	echo "<div class='clearfix hidden-xs hidden-sm'></div>";
}

if($licz % 2 == 0){
	echo "<div class='clearfix hidden-xs hidden-md hidden-lg'></div>";
}

?>

<?php $licz++; ?>
<?php endwhile; ?>
<div class='clearfix'></div>

<div id="pagination">
	<?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') )
	) );
	?>
</div>

<?php else: ?>
	<p>Nie znaleziono<br>Sprobuj ponownie</p>
<?php endif; ?>


<?php get_footer(); ?>
