
<div class="footer">
	<div class="belt_up">

		<ul class="sf-menu menu2">
			<?php wp_nav_menu( array('theme_location'=>'footer_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>	
		</ul>
	</div><!--belt_up-->
	<?php $the_query = new WP_Query( array('page_id' => 5) ); 

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();?>
			<div class="belt_down">
				<div class="media">
					<div class="social">
						<?php
						if( have_rows('social_media') ):
							while ( have_rows('social_media') ) : the_row();?>
						<a href="<? the_sub_field('url'); ?>"><img src="<? the_sub_field('ikona'); ?>"></a>
						<?php
						endwhile;
						else :
							endif;
						?>
					</div><!--social-->

					<span class="design">
						<?php the_field('stopka_copyrights', 5); ?>
					</span>

				</div><!--media-->
			</div><!--belt_down-->
		</div><!--footer-->

		<?php
	}
} else {
}
wp_reset_postdata();
?>
<?php wp_footer() ?>
</body>
</html>