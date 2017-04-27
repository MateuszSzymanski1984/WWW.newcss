<div class="footer">
	<div class="center">
		<div class="row">
			<div class="col-sm-10 col-md-5 footer_left">
				<div class="row">
					<span class="centrala"><?php the_field('nazwa_nagl', 17) ?></span>

					<span class="col-xs-12 col-sm-5 adres">
						<?php the_field('adres_korespondencja', 17) ?>
					</span>

					<span class="col-xs-12 col-ms-7 biuro">
						<?php the_field('obsluga_klienta', 17) ?>
					</span>

					<div class="polska">
						<img class="polska11" src="<?php bloginfo('template_url'); ?>/images/polska.png"/>
					</div><!--polska-->
				</div><!--row-->
			</div><!--footer_left-->

			<div class="col-sm-12 col-md-6 footer_right">
				<div class="row">
					<span class="formularz"><?php the_field('nazwa_kontakt', 17) ?></span>

					<?php echo do_shortcode("[contact-form-7 id='45' title='Formularz kontaktowy']", 17); ?>
				</div><!--row-->

				<div class="row row5">
					<ul class="col-md-11 menu menu_footer">
						<?php wp_nav_menu( array('theme_location'=>'footer_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>

						<span class="col-md-12 copy">
							COPYWRIGHT 2015 - WSZELKIE PRAWA ZASTRZEŻONE | REALIZACJA: INOV.PL
						</span>			
					</ul>

					<div class="hidden-xs hidden-sm col-md-1 arrow-up">
						<a href="#"><img class="arrow-up11" src="<?php bloginfo('template_url'); ?>/images/arrow-up.png"/>
						</div><!--arrow-up-->

					</div><!--row-->
				</div><!--footer_right-->
			</div><!--row-->
		</div><!--center-->

		<div class="white"></div>
		<div class="gray"></div>
	</div><!--footer-->




	<?php wp_footer() ?>
</body>
</html>