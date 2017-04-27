<?php get_header(); ?>

<?php $the_query = new WP_Query( array('page_id' => 5) ); 

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>

		<div class="front_first">
			<div class="realizacje_header">
				<div class="napis_zaufali">
					<?php the_field('wspolpraca_naglowek'); ?>
				</div>
				<div class="realizacje_border">
				</div>
			</div>
			<div class="uslugi">
				<div class="row">

					<div class="col-xs-6 col-md-3 ikonka">
						<a href="#">
							<img src="<?php the_field('kontakt_grafika'); ?>">
							<span class="ikonka_opis"><?php the_field('kontakt_tekst');?></span>
						</a>
					</div><!--ikonka-->

					<div class="col-xs-6 col-md-3 ikonka">
						<a href="#">
							<img src="<?php the_field('zasieg_grafika'); ?>">
							<span class="ikonka_opis"><?php the_field('zasieg_tekst');?></span>
						</a>
					</div><!--ikonka-->

					<div class="col-xs-6 col-md-3 ikonka dol">
						<a href="#">
							<img src="<?php the_field('obsluga_grafika'); ?>">
							<span class="ikonka_opis"><?php the_field('obsluga_tekst'); ?></span>
						</a>
					</div><!--ikonka-->

					<div class="col-xs-6 col-md-3 ikonka dol">
						<a href="#">
							<img src="<?php the_field('fachowosc_grafika'); ?>">
							<span class="ikonka_opis"><?php the_field('fachowosc_tekst'); ?></span>
						</a>
					</div><!--ikonka-->
				</div><!--row-->
			</div><!--uslugi-->

			<span class="podmenu">
				<?php the_field('oferta_tekst'); ?>
				<a href="">
					<span class="zobacz"><?php the_field('oferta_przycisk'); ?>   <i class="fa fa-caret-right" aria-hidden="true"></i>
					</span>
				</a>
			</span>

		</div><!--front_first-->


		<div style="background: url(<?php the_field('banner_tlo');?>), no-repeat; background-size: cover; width:100%; height: 471px; position: relative; text-align: center;">
			<div class="tlo2_center">
				<span class="nie_zwlekaj"><?php the_field('banner_naglowek')?></span>

				<a class="reed_boox2" href="#">
					<div class="red_box2"><?php the_field('banner_przycisk')?></div>
					<div class="red_arrow2">></div>
					<div class="clearfix"></div>
				</a>
			</div><!--tlo2_center-->
		</div><!--tlo2-->

		<div class="center aktualnosci">
			<div class="row">
				
				<?php
				$licznik = 1;
				if( have_rows('oferta') ):
					while ( have_rows('oferta') ) : the_row();?>
				<?php if($licznik % 2 == 1) {
					
					if ($licznik == 1) {
						echo '<div class="col-xs-12 col-sm-6 box_oferta lu3">';
					}
					else {
						echo '<div class="col-xs-12 col-sm-6 box_oferta lu">';
					}
				}
				else if($licznik == 2 ) {
					echo '<div class="col-xs-12 col-sm-6 box_oferta lu4">';
				}
				else if($licznik == 1) {
					echo '<div class="col-xs-12 col-sm-6 box_oferta lu3">';
				}
				else {
					echo '<div class="col-xs-12 col-sm-6 box_oferta lu2">';
				}
				$licznik++;
				?>
				
				<span class="box_oferta_text"><?php the_sub_field('opis_oferty'); ?></span>

				<a href="">
					<span class="zobacz zobacz_oferte"><?php the_sub_field('przycisk_oferta'); ?>   <i class="fa fa-caret-right" aria-hidden="true"></i>
					</span>
				</a>

			</div>
			<?php
			endwhile;
			else :
				endif;
			?>

		</div><!--row-->
	</div><!--aktualnosci-->


	<div class="bgblue">
		<div class="front_first second">
			<div class="realizacje_header">
				<div class="napis_realizacje">
					<?php the_field('naglowek_realizacje'); ?>
				</div>
				<div class="realizacje_border">
				</div>
			</div>
		</div><!--front_first-->
		<?php $the_query_oferta = new WP_Query( array('post_type' => 'realizacja', 'posts_per_page' => 4,  'category_name' => 'realizacje-strona-glowna' ) ); ?>
		<div class="row realizacje">
			<?php if ( $the_query_oferta->have_posts() ) {
				while ( $the_query_oferta->have_posts() ) {
					$the_query_oferta->the_post();?>
					<div class="col-sm-6 col-lg-3 second_box" style="background: url(<?php the_field('grafika_realizacji') ?>) no-repeat; background-size: cover">
						<div class="bg_opacity">
							<span class="lorem floatL"><?php the_field('krotki_opis'); ?></span>
							<a href="#"><div class="red_arrow3 floatL">></div></a>
							<div class="clearfix"></div>
						</div>
					</div>
					<!--row-->
					<?php
				}
			} else {
			}

			wp_reset_postdata();
			?>
		</div>
		<span class="bgblue_text">
			<?php the_field('realizacje_tekst'); ?>
			<a href=""><span class="zobacz"><?php the_field('realizacje_przycisk'); ?>   <i class="fa fa-caret-right" aria-hidden="true"></i>
			</span></a>
		</span>
	</div><!--bgblue-->

	<div class="partners">
		<div class="front_first second">
			<div class="realizacje_header">
				<div class="napis_zaufali">
					ZAUFALI NAM
				</div>
				<div class="realizacje_border">
				</div>
			</div>
			<div class="partnerzy_slick">
				<?php
				if( have_rows('partnerzy') ):
					while ( have_rows('partnerzy') ) : the_row();?>
				<div><img src="<?php the_sub_field('grafika_partnerzy'); ?>"></div>
				<?php
				endwhile;
				else :
					endif;
				?>
			</div>
		</div><!--front_first-->

	</div><!--partners-->

	<?php
}
} else {
}
wp_reset_postdata();
?>
<?php get_footer(); ?>