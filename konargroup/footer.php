
<?php $the_query = new WP_Query( array('page_id' => 11) ); 

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>



		<div class="footer">
			<div class="center">
				<div class="row">
					<div class="col-sm-6 col-md-3 col-lg-offset-1 col-lg-2 footer_lewy">
						<span class="footer_naglowek"><?php the_field('kontakt-tytul') ?></span>
						<span class="footer_text f1"><?php the_field('kontakt-tresc') ?></span>

					</div><!--footer_lewy-->

					<div class="col-sm-6 col-md-offset-1 col-md-3 footer_srodek">
						<span class="footer_naglowek"><?php the_field ('lorem-tytul') ?></span>
						<span class="footer_text">
							<?php the_field ('lorem-tresc') ?>
							
							<span>
							</div><!--footer_srodek-->

							<div class="col-xs-12 col-md-offset-1 col-md-4 footer_prawy">
								<span class="footer_naglowek">NEWSLETTER</span>


								<!--START Scripts : this is the script part you can add to the header of your theme-->
								<script type="text/javascript" src="http://projektyinov.pl/konargroup/wp-includes/js/jquery/jquery.js?ver=2.7.2"></script>
								<script type="text/javascript" src="http://projektyinov.pl/konargroup/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-pl.js?ver=2.7.2"></script>
								<script type="text/javascript" src="http://projektyinov.pl/konargroup/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7.2"></script>
								<script type="text/javascript" src="http://projektyinov.pl/konargroup/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.2"></script>
								<script type="text/javascript">
								/* <![CDATA[ */
								var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://projektyinov.pl/konargroup/wp-admin/admin-ajax.php","loadingTrans":"Ładuję..."};
								/* ]]> */
							</script><script type="text/javascript" src="http://projektyinov.pl/konargroup/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.2"></script>
							<!--END Scripts-->

							<div class="widget_wysija_cont html_wysija"><div id="msg-form-wysija-html57a0646fde1d1-1" class="wysija-msg ajax"></div>

							<form class="formularz" id="form-wysija-html57a0646fde1d1-1" method="post" action="#wysija" class="widget_wysija html_wysija">
								<p class="wysija-paragraph">


									<input type="text" placeholder="ADRES EMAIL" name="wysija[user][email]" class="email wysija-input validate[required,custom[email]]" title="Email" value="" />



									<span class="abs-req">
										<input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
									</span>

								</p>
								<input class="wyslij wysija-submit wysija-submit-field" type="submit" value="Zapisz się!" />

								<input type="hidden" name="form_id" value="1" />
								<input type="hidden" name="action" value="save" />
								<input type="hidden" name="controller" value="subscribers" />
								<input type="hidden" value="1" name="wysija-page" />


								<input type="hidden" name="wysija[user_list][list_ids]" value="1" />

								<span class="mail_under"><?php the_field('opis_pod_newsletterem') ?></span>
							</form></div>
						</div><!--footer_prawy-->

						<div class="col-xs-12 footer_dol">
							<div class="col-xs-9 col-sm-offset-1 col-sm-9 footer_dol_lewy">
								<span class="copy">COPYWRIGHT INOV.PL 2016 - WSZELKIE PRAWA ZASTRZEŻONE</span>
							</div><!--footer_dol_lewy-->

							<div class="col-xs-offset-1 col-xs-2 col-sm-offset-1 col-sm-1 footer_dol_prawy">
								<a href="#"><img class="up" src="<?php bloginfo('template_url'); ?>/images/arrow-up.png" /></a>
							</div><!--footer_dol_prawy-->
						</div><!--footer_dol-->


					</div><!--row-->
				</div><!--center-->
			</div><!--footer-->

			<div class="footer_menu">
				<div class="row">
					<img class="col-xs-1 home" src="<?php bloginfo('template_url'); ?>/images/home.png" />

					<ul class="col-md-offset-2 col-md-5 col-md-offset-0 col-lg-9 menu2">
						<?php wp_nav_menu( array('theme_location'=>'footer_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>			
					</ul>

					<span class="hidden-xs hidden-sm hidden-md col-lg-2 inov">2012 ALL RIGHTS RESERVED - REALIZACJA: INOV.PL</span>
				</div><!--row-->
			</div><!--footer_menu-->

			<?php
		}
	} else {
	}
	wp_reset_postdata();
	?>


	<?php wp_footer() ?>
</body>
</html>