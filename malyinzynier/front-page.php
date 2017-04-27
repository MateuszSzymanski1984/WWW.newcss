<?php get_header(); ?>

<!--petla standardowa wordpress; jak ją ustawie to nie musze pisac post id strony (np.19) po przecinku w the_field; ale jak sie chce odwołać do innej strony w tej pętli np. do kontaktu to już musze pisać po przecinku numer post id strony kontakt-->

<?php $the_query = new WP_Query( array('page_id' => 5) ); 

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>

		<div class="tlo1">
			<div class="row">
				<div class="col-md-12 div_tlo"></div>

				<div class="row">
					<div class="col-xs-0 col-sm-5 col-md-6 lewy">
					</div><!--lewy-->

					<div class="col-xs-12 col-sm-7 col-md-6 prawy">
						<div class="row">
							<div class="col-xs-12 col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9 prawy_lewy">
								<div class="row">
									<div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-11 col-md-11 zaj floatL">
										<?php the_field('tytul_banera1') ?>
										<span class="lorem"><?php the_field('podtytul_banera1') ?></span>

										

										<a href="#"><div class="button">
											<span class="button_text"><?php the_field('text_przycisku_banera1') ?></span>

											

											<div class="arrow2">
												<img class=" arrow22 img-responsive" src="<?php bloginfo('template_url'); ?>/images/arrow2.png"/>
											</div><!--arrow2-->
										</div><!--button--></a>

									</div><!--zaj-->

									<div class="col-xs-1 col-sm-1 col-md-1 media floatR">
										<a href="#" class="socialmedia facebook">
											<img class="napis_f img-responsive" src="<?php bloginfo('template_url'); ?>/images/facebook.png"/>
										</a><!--facebook-->

										<a href="#" class="socialmedia newsletter">
											<img class="napis_n img-responsive" src="<?php bloginfo('template_url'); ?>/images/newsletter.png"/>
										</a><!--newsletter-->
									</div><!--media-->
								</div><!--row-->
							</div><!--prawy_lewy-->

						</div><!--row-->
					</div><!--prawy-->
				</div>
			</div><!--row-->
		</div><!--tlo1-->

		<div class="aktualnosci">
			<div class="center">
				<span class="aktualnosci_header">Czytaj bloga, podejmij wyzwanie!</span>

				<?php

				$the_query2 = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'menu_order' ) );

				if ( $the_query2->have_posts() ) {
					$licznik = 1;
					while ( $the_query2->have_posts() ) {
						$the_query2->the_post();?>

						<?php if($licznik==1){ ?>

						<div class="box col-xs-12 col-sm-5 col-md-4 col-lg-4">
							<?php the_post_thumbnail('full',array( 'class' => 'img-responsive obraz')); ?>

							<span class="text_pod_obrazkiem"><?php the_time('l, d F Y, H:i') ?></span>

							<span class="text2"><?php the_excerpt(); ?></span> <!--zajawka the_excerpt-->
							<!--permalink - link do pojedynczego, konkretnego wpisu wpisu-->

							<div class="button2">
								<a href="<?php the_permalink(); ?>"><span class="button2_text"><?php the_field('zobacz_wiecej', 5); ?></a>
							</div><!--button2-->
							</div><!--box--><?php }

							if($licznik==2){ ?>
							<div class="box hidden-xs col-sm-offset-2 col-sm-5 col-md-offset-0 col-md-4 col-lg-4">
								<?php the_post_thumbnail('full',array( 'class' => 'img-responsive obraz')); ?>

								<span class="text_pod_obrazkiem"><?php the_time('l, d F Y, H:i') ?></span>

								<span class="text2"><?php the_excerpt(); ?></span>

								<div class="button2">
									<a href="<?php the_permalink(); ?>"><span class="button2_text"><?php the_field('zobacz_wiecej', 5); ?></span></a>
								</div><!--button2-->
								</div><!--box--> <?php }

								if($licznik==3){ ?>
								<div class="box hidden-xs hidden-sm col-md-4 col-lg-4">
									<?php the_post_thumbnail('full',array( 'class' => 'img-responsive obraz')); ?>

									<span class="text_pod_obrazkiem"><?php the_time('l, d F Y, H:i') ?></span>

									<span class="text2"><?php the_excerpt(); ?></span>

									<div class="button2">
										<a href="<?php the_permalink(); ?>"><span class="button2_text"><?php the_field('zobacz_wiecej', 5); ?></span></a>
									</div><!--button2-->
								</div><!--box-->
								<?php } ?>

								<?php
								$licznik++;
							}
						} else {
						}
						wp_reset_postdata();
						?>

						<div class="aktualnosci_footer">
							<span class="wiecej">Zobacz więcej wpisów</span>
							<a href="<?php echo get_page_link(73); ?>
								"><img src="<?php bloginfo('template_url'); ?>/images/arrow-right.png"/></a>
							</div><!--aktualnosci_footer-->


						</div><!--center-->


					</div><!--aktualnosci-->


					<div class="col-md-12 div_tlo2"><div class="row">

						<span class="col-md-12 tlo2_text1"><?php the_field('tytul_banera2') ?></span>
						<span class="col-md-12 tlo2_text2"><?php the_field('podtytul_banera2') ?></span>
					</div>

				</div><!--row-->


				<div class="galery">
					<div class="center">
						<div class="row row1">
							<div class="col-md-12 main_galery">

								<?php

								$images = get_field('galeria');
								if( $images ):?>

								<?php foreach( $images as $image ): ?>
								<div class="main_galery_photo">
									<a class="fancybox-thumb fancybox" href="<?php echo $image['url']; ?>" rel="fancybox-thumb">

										<img class="lupa" src="<?php bloginfo('template_url'); ?>/images/lupa.png"/>
									</a>

									<img class="obrazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />




								</div>
								<?php
								endforeach;
								endif; ?>


							</div><!--main_galery-->

							<span class="zdjec"><?php the_field('text_slidera') ?></span>
						</div><!--row-->
					</div><!--center-->
				</div><!--galery-->



				<?php
			}
		} else {
		}
		wp_reset_postdata();
		?>
		<?php get_footer(); ?>