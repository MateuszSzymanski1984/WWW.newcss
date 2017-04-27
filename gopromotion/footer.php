<?php wp_footer() ?>

<div class="footer">
	<div class="center80_3">
		<div class="row">
			<div class="col-xs-12 col-sm-5 col-md-3 footer_left">
				<span class="footer_text">agencja <span class="footer_yellow">go</span>promotion</span>

				<span class="adres">Stryszawa 742A, 34-205 Stryszawa<br/>Telefon: xxx xxx xxx, xxx xxx xxx</span>
				<span class="mail">email: biuro@goholding.pl</span>
			</div><!--footer_left-->


			<div class="col-xs-12 col-sm-7 col-md-offset-1 col-md-5 footer_middle">
				<ol class="menu_dolne">
					<?php wp_nav_menu( array('theme_location'=>'footer_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>			
				</ol>

			</div><!--footer_middle-->


			<div class="col-xs-12 col-md-offset-1 col-md-2 footer_right">
					<i class="fa fa-google-plus-square" aria-hidden="true"></i>
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
			</div><!--footer_right-->


		</div><!--row-->
	</div><!--center3_80-->
</div><!--footer-->



</body>
</html>