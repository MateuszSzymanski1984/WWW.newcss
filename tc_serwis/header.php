<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<meta name="robots" content="index,follow" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>
<body>

	<div class="header">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 tlo1">
					<div class="menu_pasek">
						<div class="center">
							<div class="row">

								<!-- Logotyp -->
								<a href="<?php bloginfo('url'); ?>"><img class="col-xs-3 col-md-2 kk img-responsive floatL" src="<?php the_field('logo', 5); ?>" alt="<?php bloginfo('name'); ?>"></a>	

								<!-- menu  -->
								<ul class="col-xs-5  col-sm-4 col-md-8 floatL menu sf-menu">
									<?php wp_nav_menu( array('theme_location'=>'main_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>			
								</ul>

								<a href="#"><div class="col-xs-3 col-md-2 login floatL">
									<span class="log"><?php the_field('przycisk_logowania', 5); ?></span>
								</div><!--login--></a>

								<div class="clearfix"></div>
							</div><!--row-->
						</div><!--center-->
					</div><!--menu_pasek-->

					<div class="header_box">
						<?php
						$the_query_oferta = new WP_Query( array('post_type' => 'oferta') ); ?>
						<div class="oferta_slider col-md-8">

							<?php if ( $the_query_oferta->have_posts() ) {
								while ( $the_query_oferta->have_posts() ) {
									$the_query_oferta->the_post();?>



									<div class="header_box_2 header_box_lewy">
										<span class="box_title"><?php the_title(); ?></span>

										<span class="box_opis">
											<?php the_excerpt(); ?>
										</span>

										<a class="reed_boox" href="">
											<div class="red_box"><?php the_field('odnosnik'); ?></div>
											<div class="red_arrow">></div>
										</a>

										<div class="clearfix"></div>
									</div>



									<?php
								}
							} else {
							}
							wp_reset_postdata();
							?>
						</div>
						<!--<div class="header_box_2 header_box_lewy floatL">
							<span class="box_title">Klimatyzacja i wentylacja</span>

							<span class="box_opis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a libero pellentesque, pretium dolor nec, venenatis ex. Ut vitae pellentesque mauris. In porta velit id nulla gravida scelerisque. In risus nibh, suscipit at varius a, feugiat nec arcu. 
							</span>

							<a class="reed_boox" href="">
								<div class="red_box">Więcej</div>
								<div class="red_arrow">></div>
							</a>

							<div class="clearfix"></div>

						</div><!--header-box-left-->

						<div class="header_box_2 header_box_prawy col-md-4">
							<span class="box_title">SKLEP</span>

							<span class="box_opis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a libero pellentesque.
							</span>

							<a class="reed_boox" href="#">
								<div class="red_box">Katalog</div>
								<div class="red_arrow">></div>
							</a>

							<div class="clearfix"></div>
						</div><!--header_box_right-->
					</div><!--header_box-->

					<a href="#"><div class="arrow arrow-l">&#60;</div></a>
					<a href="#"><div class="arrow arrow-r">&#62;</div></a>

					<div class="fast_contact">
						<div class="center">
							<div class="row">
								<span class="col-xs-3 col-sm-4 szkontakt"><?php the_field('kontakt_naglowek', 5); ?></span>

								<div class="col-xs-4 col-sm-4 img">
									<div class="tel floatL"><img src="<?php the_field('telefon_ikona', 5); ?>" alt="Telefon"></div>
									<span class="szkontakt_mala floatL"><?php the_field('kontakt_telefoniczny', 5); ?>
										<span class="szkontakt_duza"><?php the_field('numer_telefonu', 5); ?></span>
									</span>
									<div class="clearfix"></div>
								</div><!--img-->

								<div class="col-xs-4 col-sm-4 img">
									<div class="mail floatL"><img src="<?php the_field('mail_ikona', 5); ?>" alt="Mail"></div>
									<span class="szkontakt_mala floatL"><?php the_field('kontakt_mailowy', 5); ?>
										<span class="szkontakt_duza"><?php the_field('e-mail', 5); ?></span>
									</span>
									<div class="clearfix"></div>
								</div><!--img-->
							</div><!--row-->
						</div><!--center-->
					</div><!--fast_contact-->
				</div><!--tlo1-->

			</div><!--row-->
		</div><!--container-->
	</div><!--header-->

