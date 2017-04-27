<?php get_header(); ?>


<div class="box">
	<div class="center2">
		<span class="box_text"><?php the_field('tytul1') ?></span>
		<span class="box_text2">

			<?php the_field('opis_tytul1') ?>
		</span>


		<div class="foto111">
			<img class="foto11" src="<?php bloginfo('template_url'); ?>/images/foto11.png" />


			<div class="foto11_text">
				<div class="row">
					<div class="col-xs-5 foto_left">konferencja edukacyjna</div>
					<div class="col-xs-2 play"><a href="#"><img class="img-responsive" src="<?php bloginfo ('template_url'); ?>/images/play.png" /></a></div>
					<div class="col-xs-5 foto_right"></div>
				</div><!--row-->
			</div><!--foto11-->
		</div><!--foto111-->

		<img class="arrow_down" src="<?php bloginfo('template_url'); ?>/images/arrow_down.png" />

		<span class="arrow_down_text"><?php the_field('tytul2') ?></spam>
			<span class="arrow_down_text arrow_down_text2"><?php the_field('opis_tytul2') ?></span>

		</div><!--center2-->


		<div class="center2">
			<?php

			$the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 2 ) );

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();?>

					<div class="box2">

						<div class="box2_up">
							<div class="row">
								<div class="col-xs-12 col-md-6 one"><img class="photo1" src="<?php bloginfo('template_url'); ?>/images/photo1.png"/> </div>
								<div class="col-xs-12 col-md-6 two">

									<div class="info">
										<span class="date">
											<?php the_field('plakat_data', 5) ?>
										</span>

										<span class="info_header">
											<?php the_field('plakat_tytul', 5) ?>
										</span>

										<span class="info_opis">
											<?php the_excerpt(); ?> <!--tak wywołuje sie zajawke! Włącza się ją we wpisach w opcjach ekranu, na dole wpisu pojawi się zajawka i tam wpisujemy tą krótką wersje a w głównym kontencie całość-->
										</span>

										<span class="zobacz"><a href="">ZOBACZ WIĘCEJ</a></span>

									</div><!--info-->

								</div><!--two-->
							</div><!--row-->
						</div><!--box2_up-->


						<div class="box2_up">
							<div class="row">

								<div class="col-xs-12 col-md-6 two">

									<div class="info">
										<span class="date">
											<?php the_field('plakat_data', 5) ?>
										</span>

										<span class="info_header">
											<?php the_field('plakat_tytul', 5) ?>
										</span>

										<span class="info_opis">
											<?php the_excerpt(); ?>
										</span>

										<span class="zobacz"><a href="#">ZOBACZ WIĘCEJ</a></span>

									</div><!--info-->

								</div><!--two-->

								<div class="col-xs-12 col-md-6 one"><img class="photo1" src="<?php bloginfo('template_url'); ?>/images/photo2.png"/> </div>

							</div><!--two-->

						</div><!--row-->
					</div><!--box2_up-->
				</div><!--box2-->


				<div class="partners">
					<div class="center2">
						<img class="parnter_galery" src="<?php bloginfo('template_url'); ?>/images/partnerzy.png" />
					</div><!--center2-->
				</div><!--partners-->

				<span class="box_text nasz">NASZ ZESPÓŁ <span class="text_special iventowy">IVENTOWY</span></span>



			</div><!--center2-->
		</div><!--box-->

		<?php
	}
} else {
}
wp_reset_postdata();
?>

<div class="zespol">
	<div class="row">


<!--WYWOŁANIE REPEATERA-->
<!--Na początku musi być pętla, która odwołuje się do nazwy całego repeatera a po przecinku do id strony na której jest repeater np.5(strona główna)-->
		<?php
		if( have_rows('zespol_eventowy', 5) ):
			while ( have_rows('zespol_eventowy', 5) ) : the_row();?>

		<div class="col-sm-6 col-md-3 zespoleventowy">
			<?php if(get_sub_field('obraz')){ ?>
			<img src="<?php the_sub_field('obraz'); ?>" />
			<?php } ?>

			<span class="zespol_text"><?php the_sub_field('imie'); ?><br/><span class="function"><?php the_sub_field('funkcja'); ?></span></span>
		</div>

		<!--<div class="col-sm-6 col-md-3 zespoleventowy">
			<img class="zespol1" src="<?php bloginfo('template_url'); ?>/images/zespol1.png" />
			<span class="zespol_text">BRIAN TANE<br/><span class="function">Director</span></span>
		</div>

		<div class="col-sm-6 col-md-3 zespoleventowy">
			<img class="zespol1" src="<?php bloginfo('template_url'); ?>/images/zespol1.png" />
			<span class="zespol_text">BRIAN TANE<br/><span class="function">Director</span></span>
		</div>

		<div class="col-sm-6 col-md-3 zespoleventowy">
			<img class="zespol1" src="<?php bloginfo('template_url'); ?>/images/zespol1.png" />
			<span class="zespol_text">BRIAN TANE<br/><span class="function">Director</span></span>
		</div>

		<div class="col-sm-6 col-md-3 zespoleventowy">
			<img class="zespol1" src="<?php bloginfo('template_url'); ?>/images/zespol1.png" />
			<span class="zespol_text">BRIAN TANE<br/><span class="function">Director</span></span>
		</div>

		<div class="col-sm-6 col-md-3 zespoleventowy">
			<img class="zespol1" src="<?php bloginfo('template_url'); ?>/images/zespol1.png" />
			<span class="zespol_text">BRIAN TANE<br/><span class="function">Director</span></span>
		</div>

		<div class="col-sm-6 col-md-3 zespoleventowy">
			<img class="zespol1" src="<?php bloginfo('template_url'); ?>/images/zespol1.png" />
			<span class="zespol_text">BRIAN TANE<br/><span class="function">Director</span></span>
		</div>

		<div class="col-sm-6 col-md-3 zespoleventowy">
			<img class="zespol1" src="<?php bloginfo('template_url'); ?>/images/zespol1.png" />
			<span class="zespol_text">BRIAN TANE<br/><span class="function">Director</span></span>
		</div>-->

		<?php
		endwhile;
		else :
			endif;
		?>



</div><!--row-->

<div class="box_white"><img class="logo2" src="<?php bloginfo('template_url'); ?>/images/logo2.png" /></div>
</div><!--zespol-->


<?php get_footer(); ?>