<?php get_header(); ?>

<!--petla standardowa wordpress; jak ją ustawie to nie musze pisac post id strony (np.19) po przecinku w the_field; ale jak sie chce odwołać do innej strony w tej pętli np. do kontaktu to już musze pisać po przecinku numer post id strony kontakt-->
<?php $the_query = new WP_Query( array('page_id' => 5) ); 

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>


		<div class="row">
			<div id="tlo1">

				<?php

				$the_query10 = new WP_Query( array('post_type' => 'slider', 'posts_per_page' => -1, 'orderby' => 'menu_order' ));

				if ( $the_query10->have_posts() ) { ?>
					<ul class="slider hidd-load">

						<?php while ( $the_query10->have_posts() ) {
							$the_query10->the_post();

							$thumb_id = get_post_thumbnail_id();
							$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
							$thumb_url = $thumb_url_array[0];?>
							<li class="slajd" style="background: url(<?php echo "$thumb_url"; ?>);">
								<!-- wywołanie obrazka wyróżniającego the_post_thumbnail -->
								<div class="col-md-6 lewy">
								</div><!--lewy-->

								<div class="col-xs-12 col-md-6 prawy">
									<div class="col-xs-10 col-sm-10 col-md-10 prawy_lewy floatL">
										<span class="text">
											<?php the_content(); ?>
											<a href="<?php the_field('link'); ?>">
												<div class="button"><?php the_field('tekst_przycisku_na_sliderze', 5); ?></div>
											</span>
										</a>

										<span class="text2">
											<?php the_field('nazwa_inwestycji'); ?>
										</span>

									</div><!--prawy_lewy-->

									<div class="col-xs-1 col-sm-offset-1 col-sm-1 col-md-2 prawy_prawy floatL">
									</div><!--prawy_prawy-->

									<div class="clear"></div>
								</div><!--prawy-->

								<div class="clear"></div>
							</li><!--slajd-->


							<?php
						} ?>
					</ul> 
					<?php } else {
					}
					wp_reset_postdata();
					?>


				</div><!--tlo1-->
			</div><!--row-->
			<!--zamknięcie petli standardowa wordpress-->
			<?php
		}
	} else {
	}
	wp_reset_postdata();
	?>

	<?php if (have_posts()) : while (have_posts()) : the_post();	?>	
		<div id="ofirmie">
			<div class="center">
				<div id="header"><?php the_field('naglowek'); ?></div>

				<div id="zawartosc"><?php the_content(); ?></div><!--zawartosc-->
			</div><!--center-->
		</div><!--ofirmie-->
	<?php endwhile; ?>
<?php else: ?>
	<p>Nie znaleziono<br>Sprobuj ponownie</p>
<?php endif; ?>

<?php $the_query = new WP_Query( array('page_id' => 5) ); 

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>
		<div id="tlo2">
			<img id="tlo22" src="<?php bloginfo('template_url'); ?>/images/tlo2.png"/>

			<div class="center_tlo2">
				<div class="tlo2_text"><?php the_field('nagłowek_banera_zamow', 5); ?></div>

				<div class="tlo2_text2"><?php the_field('tekst_banera_zamow', 5); ?></div>

				<a href="<?php the_field('link_przycisku_zamow'); ?>" class="button2">
					<?php the_field('tekst_przycisku_zamow'); ?>
				</a>
			</div><!--center_tlo2-->

		</div><!--tlo2-->

		<div id="kontakt">
			<div class="row">
				<div class="center">
					<div class="col-md-12 gora">
						<span id="header" style="margin-bottom: 30px;">KONTAKT</span>
						<div class="row">

							<div class="col-xs-12 xs-600-50p col-sm-6 col-md-4 jeden">

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



								<div class="col-xs-12 xs-600-50p col-sm-6 col-md-4 dwa">
									<?php echo do_shortcode("[contact-form-7 id='48' title='Formularz kontaktowy']"); ?>

								</div><!--dwa-->
								<div class="clearfix hidden-md hidden-lg"></div>

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
							</div><!--row-->
						</div><!--gora-->
					</div>	
				</div><!--center-->
			</div>


			<!--zamknięcie petli standardowa wordpress-->
			<?php
		}
	} else {
	}
	wp_reset_postdata();
	?>
	<?php get_footer(); ?>

