<div class="center">
	<div class="row">
		<div class="col-xs-12 menu_miasta_dzielnice">
			<span class="uslugi"><?php the_field("text_dzielnice_warszawy", 19) ?></span>

			<ul class="col-xs-12 menu_dzielnice">
				<?php wp_nav_menu( array('theme_location'=>'menu_dzielnice', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
			</ul>
			<div class="clearfix"></div>
			<span class="uslugi"><?php the_field("text_miasta", 19) ?></span>

			<ul class="col-xs-12 menu_miasta">
				<?php wp_nav_menu( array('theme_location'=>'menu_miasta', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
			</ul>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 dol">
		<div class="center">	
			<div class="row">
				<div class="col-md-12 stopka_gora">
					<div class="row">
						<div class="hidden-xs hidden-sm col-md-2 col-lg-2 invest">
							<img class="invest_photo" src="<?php bloginfo('template_url'); ?>/images/invest.png"/>
						</div><!--invest-->

						<div class="col-xs-12 col-sm-7 col-lg-4 tel">
							<span class="col-xs-12 telef"><?php the_field('telefon_stopka', 19); ?>
								<span class="col-xs-12 telefBIG"><?php the_field('numer_telefonu_stopka', 19); ?></span>
							</span>
						</div><!--tel-->

						<div class="col-sm-offset-3 col-sm-3 col-md-2 col-md-offset-0 info hidden-sm hidden-xs">
							<span class="ul"><?php the_field('adres_stopka', 19) ;?></span>
						</div><!--info-->

						<div class="col-sm-3 col-md-2 info hidden-sm hidden-xs">
							<span class="ul">
								<?php the_field('nip_regon_krs', 19); ?>
							</span>
						</div><!--info-->
						<div class="col-xs-12 col-sm-5 info col-nip-krs hidden-md hidden-lg">
							<span class="ul"><?php the_field('adres_stopka', 19) ;?></span>
							<span class="ul">
								<?php the_field('nip_regon_krs', 19); ?>
							</span>
						</div>
					</div><!--row-->
				</div><!--stoka_gora-->

				<div class="col-md-12 stopka_dol">
					<div class="row">
						<div class="col-xs-12 col-md-11 menu2">
							<ul id="nav2">
								<?php wp_nav_menu( array('theme_location'=>'footer_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
							</ul>
						</div><!--menu-->

						<div class="col-xs-12 col-md-1 arrow">
							<a href="#" class="btn-up"><img src="<?php bloginfo('template_url'); ?>/images/arrow.png" /></a>
						</div><!--arrow-->

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 copy">
								<span class="copyw"><?php the_field('copyright', 19) ;?></span>
							</div><!--copy-->
						</div>
					</div><!--row-->
				</div><!--stoka_dol-->
			</div><!--row-->
		</div><!--center-->
	</div><!--dol-->
</div>

</div><!--row-->
</div><!--kontakt-->
</div><!--glowny-->
<?php wp_footer() ?>
</body>
</html>