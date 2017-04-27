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
		<div class="tlo"></div>
		<div class="center1">
			<!-- menu  -->
			<div class="up">
				<div class="row">
					<div class="col-xs-6 col-sm-8 up_left">
						<img class="logo floatL img-responsive" src="<?php bloginfo('template_url'); ?>/images/logo.png" />
						<span class="text1 floatL"><?php the_field('opis_przy_logo') ?></span>
						<div class="clear"></div>
					</div><!--up_left-->

					<div class="col-xs-6 col-sm-4 up_right">
						<div class="row">
							<a href="#"><div class="col-xs-offset-5 col-xs-2 col-sm-offset-5 col-sm-2 col-md-offset-6 col-md-2 twitter floatL"></div></a>

							<ul class="menu floatL">
								<?php wp_nav_menu( array('theme_location'=>'main_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>			
							</ul>

							<div class="clear"></div>
						</div><!--row-->
					</div><!--up_right-->

				</div><!--row-->
			</div><!--up-->

			<span class="header_text"><?php the_field('naglowek') ?></span>
			<span class="header_text2"><?php the_field('opis_pod_nagłowkiem') ?></span>

			<div class="down">
				<div class="row">
					<div class="col-xs-6 col-sm-4 img">
						<img class="down_img" src="<?php bloginfo('template_url'); ?>/images/img1.png" /> 
						<span class="down_img_text">IVENTY<br/> PROMOCYJNE</span>
					</div><!--img1-->

					<div class="col-xs-6 col-sm-4 img">
						<img class="down_img" src="<?php bloginfo('template_url'); ?>/images/img2.png" /> 
						<span class="down_img_text">IVENTY<br/> biznesowe</span>
					</div><!--img1-->

					<div class="hidden-xs col-sm-4 img">
						<img class="down_img" src="<?php bloginfo('template_url'); ?>/images/img3.png" /> 
						<span class="down_img_text">IVENTY<br/> edukacyjne</span>
					</div><!--img1-->
				</div><!--row-->
			</div><!--down-->

			
		</div><!--center-->
	</div><!--header-->

