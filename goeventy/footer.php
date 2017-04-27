
<div class="center2">
	<div class="footer_up">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-4 footer_up_left">
				<span clas="footer_opis"><?php the_field('adres', 11) ?><br/><?php the_field('telefon', 11) ?></span>
				<span class="footer_email"><?php the_field('email', 11) ?></span>
			</div><!--footer_up_left-->

			<div class="col-xs-12 col-md-6 col-md-offset-1 col-md-3 footer_up_middle">
				<span clas="footer_opis"><?php the_field('dzial_promocji', 11) ?><br/><?php the_field('telefon', 11) ?></span>
				<span class="footer_email"><?php the_field('email', 11) ?></span>
			</div><!--footer_up_middle-->

			<div class="col-xs-12 col-md-6 col-md-offset-1 col-md-3 footer_up_right margin">
				<span clas="footer_opis"><?php the_field('eventy_dla_dzieci', 11) ?><br/><?php the_field('telefon', 11) ?></span>
				<span class="footer_email"><?php the_field('email', 11) ?></span>
			</div><!--footer_up_roght-->

		</div><!--row-->	
	</div><!--footer_up-->

	<div class="footer_middle"></div>

	<div class="footer_down">
		<div class="row">
		<ul class="col-sm-7 col-md-6 menu2 floatL">
			<?php wp_nav_menu( array('theme_location'=>'footer_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>			
		</ul>

		<span class="col-sm-5 col-md-offset-1 col-md-5 copy">COPYWRIGHT 2015, WSZELKIE PRAWA ZASTRZEŻONE</span>

	</div><!--row-->
	</div><!--footer_down-->
</div><!--center2-->



<?php wp_footer() ?>
</body>
</html>