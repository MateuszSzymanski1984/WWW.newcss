<?php get_header(); ?>


<!--petla standardowa wordpress; jak ją ustawie to nie musze pisac post id strony (np.19) po przecinku w the_field; ale jak sie chce odwołać do innej strony w tej pętli np. do kontaktu to już musze pisać po przecinku numer post id strony kontakt-->
<?php $the_query = new WP_Query( array('page_id' => 5) ); 

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>

		<div class="col-xs-12 tlo1">
			<div class="row">
				<div class="col-xs-1 col-sm-2 col-md-6 col-lg-7 lewy"></div>

				<div class="col-xs-10 col-sm-10 col-md-6 col-lg-5 prawy">
					<div class="box1">
						<div class="box1_text">
							<span class="tytul1"><?php the_field('tytul_slidera1') ?></span>
							<span class="tytul2"><?php the_field('tresc_slidera1') ?></span>
						</div><!--box1_text-->

						<div class="arrow11">
							<a href="#"><div class="arrow left"> < </div></a><!--arrow-left-->
							<a href="#"><div class="arrow right"> > </div></a><!--arrow-left-->
						</div><!--arrow-->
					</div><!--box1-->
				</div>
			</div><!--row-->
		</div><!--tlo1-->

		<div class="center">
			<div class="jeden">
				<div class="row">
					<span class="col-md-3 napis ofirmie"><?php the_field('text_o_firmie') ?></span>
					<span class="col-md-9 firma_opis"><?php the_field('opis_tekstu_o_firmie') ?> </span><!--firma_opis-->
				</div><!--row-->
			</div><!--jeden-->

			<div class="dwa">
				<div class="row">
					<div class="col-xs-12 col-md-6 galeria_lewy">
						<img class="img p1 img1 col-xs-12" src="<?php bloginfo('template_url'); ?>/images/photo1.png"/>
						<img class="img p2 img2 col-md-5 col-lg-4" src="<?php bloginfo('template_url'); ?>/images/photo2.png"/>

						<div class="col-xs-12 col-md-7 col-lg-8 black">
							<div class="black_black">
								<span class="tytul1 tytul11"><?php the_field('tytul_slidera1') ?></span>
								<span class="tytul2 tytul22"><?php the_field('galeria_zdjęć_text') ?></span>
							</div>
						</div>
					</div><!--galeria_lewy-->

					<div class="col-sm-12 col-md-6 galeria_prawy">
						<div class="galeria_prawy_p">
							<span class="col-lg-12 napis "><?php the_field('napis_galeria_zdjec') ?></span>

							<img class="img p3 col-lg-10" src="<?php the_field('galeria') ?>"	/>				
							<img class="img p4 col-lg-12" src="<?php the_field('galeria2') ?>"   />
						</div><!--galeria_prawy_p-->
					</div><!--galeria_prawy-->

				</div><!--row-->
			</div><!--dwa-->



			<div class="trzy">
				<div class="row">
					<div class="trzy_lewy">
						<span class="col-md-2 col-lg-3 napis napis_trzy_lewy"><?php the_field('napis_trzy_lewy') ?></span>

						<div class="img col-md-offset-1 col-md-4 col-lg-offset-1 col-lg-4 napis_trzy_srodek">
							<img class="photo5 p5" src="<?php bloginfo('template_url'); ?>/images/photo5.png"/>
							<span class="styl_opis"><?php the_field('opis_styl_elegancja') ?></span>
						</div><!--napis_trzy_srodek-->

						<span class="col-md-offset-1 col-md-4 col-lg-offset-1 col-lg-3 styl_opis"><?php the_field('opis_styl_elegancja2') ?></span>
					</div><!--trzy_lewy-->
				</div><!--row-->
			</div><!--trzy-->
		</div><!--center-->

		<div class="line"></div>

		<?php
	}
} else {
}
wp_reset_postdata();
?>
<?php get_footer(); ?>