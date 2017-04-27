<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header(); ?>
<div class="center">
	<div class="row">
		<div class="col-md-12 gora">
			<span id="header"><?php the_title(); ?></span>
			<div id="zawartosc">
				<div class="col-sm-6 col-md-4 jeden">

					<?php $the_query2 = new WP_Query( array('page_id' => 19) );

					if ( $the_query2->have_posts() ) {
						while ( $the_query2->have_posts() ) {
							$the_query2->the_post();?>


							<div class="jeden_kontakt">
								<?php the_content(); ?>
							</div><!--jeden_kontakt-->


							<?php
							if( have_rows('dzialy') ):
								while ( have_rows('dzialy') ) : the_row();?>

							<div class="jeden_kontakt">
								<span class="text_jeden_d"><?php the_sub_field('naglowek_dzialu'); ?></span>
								<div class="phone">
									<?php if(get_sub_field('obrazek_dzial')){ ?>
										<img src="<?php the_sub_field('obrazek_dzial'); ?>" />
										<?php } ?>

										<span class="opis_phone"><?php the_sub_field('dane_dzial'); ?></span>
									</div><!--phone-->
								</div><!--jeden_kontakt-->


								<?php
								endwhile;
								else :
									endif;
								?>


								<?php
							}
						} else {
						}
						wp_reset_postdata();
						?>
					</div>



					<div class="col-sm-6 col-md-4 dwa">
						<?php echo do_shortcode("[contact-form-7 id='48' title='Formularz kontaktowy']"); ?>

					</div><!--dwa-->

					<div class="col-sm-12 col-md-4 trzy">
						<span class="dojazd"><?php the_field('tekst_nad_mapa', 19); ?></span>

						<div class="mapa">
							<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
							<script type="text/javascript">
								function initMap() {
									var myLatLng = {lat: 52.2198123, lng: 20.9170952};

									var map = new google.maps.Map(document.getElementById('GoogleMap'), {
										zoom: 17,
										center: myLatLng
									});

									var marker = new google.maps.Marker({
										position: myLatLng,
										map: map,
										title: 'Hello World!'
									});
								}
								window.onload = initMap;
							</script>
							<div id="GoogleMap"></div>
						</div><!--mapa-->

						<span class="adres"><?php the_field('adres_pod_mapa', 19); ?></span>
					</div><!--trzy-->
				</div>
			</div><!--row-->
		</div><!--gora-->
	</div><!--center-->


	<?php get_footer(); ?>
