<?php get_header(); ?>

<?php $the_query = new WP_Query( array('page_id' => 5) ); 

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>

		

		<div class="box">
			<div class="center80_3">
				<span class="yellow_text"><?php the_field('naglowek_1') ?></span>

				<span class="opis_2"><?php the_field('opis_naglowek_1') ?></span>


				<span class="word_black title"><?php the_field('naglowek_2') ?></span>
			</div><!--center80-->

			<div class="center90">
				<div class="row">

					<?php

					$the_query2 = new WP_Query( array('post_type' => 'oferta', 'posts_per_page' => 3, 'orderby' => 'menu_order' ) );

					if ( $the_query2->have_posts() ) {

						while ( $the_query2->have_posts() ) {
							$the_query2->the_post();?>


							<div class="col-xs-12 col-md-4 boxik">
								<div class="boxik90">
									<?php the_post_thumbnail('full',array( 'class' => 'img-responsive img')); ?>

									<span class="boxik_tytul"><?php the_field('naglowek_wpisu'); ?></span>

									<span class="boxik_opis"><?php the_excerpt(); ?></span><!--zajawka the_excerpt-->


									<!--permalink - link do pojedynczego, konkretnego wpisu wpisu-->

									<div class="boxik_button"><a href="<?php the_permalink(); ?>">PEŁNA OFERTA</a></div>
								</div><!--boxik90-->

							</div><!--boxik-->
				

							

							<?php
						}
					} else {
					}
					wp_reset_postdata();
					?>
				</div><!--row-->
			</div><!--center90-->
		</div><!--box-->


		<div class="yellow_background">
			<div class="center80_3">
				<span class="yellow_header">MÓWIĄ O NAS</span>

				<div class="row">
					<span class="col-sm-7 opis_left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis felis est, sed auctor sem tincidunt et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>

					<div class="hidden-xs col-sm-offset-1 col-sm-4 col-md-offset-2 col-md-3 logo_right">
						<img class="img_logo" src="<?php bloginfo('template_url'); ?>/images/bmw-l.png" />
						<img class="img_logo" src="<?php bloginfo('template_url'); ?>/images/bmw-r.png" />
					</div><!--logo_right-->
				</div><!--row-->

				<div class="yellow_osoba">
					<span class="osoba">ANNA NOWAK</span>
					<span class="stanowisko">PREZES ZARZĄDU BMW AUTO POLAND</span>

					<div class="kropki"></div>
					<div class="kropki"></div>
					<div class="kropki"></div>
					<div class="kropki"></div>
				</div><!--yellow_osoba-->

			</div><!--center80_3-->
		</div><!--yellow_background-->

		<div class="white_background">
			<div class="center80_3">

				<span class="yellow_text2">FAKTY <span class="gray_text">MÓWIĄ SAME ZA SIEBIE</span></span>

				<div class="fakty_boxy">
					<div class="row">

						<div class="col-xs-6 col-md-3 boxbox">
							<span class="number">300</span>
							<span class="number_opis">zadowolonych klientów</span>
						</div><!--boxbox-->

						<div class="col-xs-6 col-md-3 boxbox">
							<span class="number">1024</span>
							<span class="number_opis">zrealizowanych projektów</span>
						</div><!--boxbox-->

						<div class="col-xs-6 col-md-3 boxbox">
							<span class="number">50 000</span>
							<span class="number_opis">przeszkolonych osób</span>
						</div><!--boxbox-->

						<div class="col-xs-6 col-md-3 boxbox boxbox_ostatni">
							<span class="number number_zolty">27</span>
							<span class="number_opis bold">specjalistów</span>
						</div><!--boxbox-->

					</div><!--row-->
				</div><!--fakty_boxy-->

			</div><!--center80_3-->
		</div><!--white_background-->

		<div class="footer">
			<div class="tlo2"></div><!--tlo2-->

			<div class="center80_4">
				<span class="nasi">nasi klienci</span>
				<span class="nasi_opis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>

			</div><!--center80-->
		</div><!--footer-->

		<?php
	}
} else {
}
wp_reset_postdata();
?>

<?php get_footer(); ?>