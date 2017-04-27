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

		<div class="tlo1"></div><!--tlo1-->

		<div class="center80">
			<div class="row">
				<!-- Logotyp -->
				<div class="col-xs-12 col-sm-6 col-md-4 logo"><a href="<?php bloginfo('url'); ?>"><img class="logo_logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"></a></div><!--logo-->	

				<div class="hidden-xs col-sm-offset-7 col-sm-5 col-md-offset-6 col-md-6 szukasz">SZUKASZ WSPÓŁPRACY? ZADZWOŃ!<span class="telefon"><?php the_field("numer_telefonu", 5) ?></span></div><!--szukasz-->

			</div><!--row-->

			<span class="word_white position1"><?php the_field("tytul", 5) ?></span>
			<span class="opis"><?php the_field("opis", 5) ?></span>

			<div class="button">
				<a href="#">ZACZYNAMY</a>
			</div><!--button-->

			<div class="social_media">
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
				<i class="fa fa-google-plus-square" aria-hidden="true"></i>
			</div><!--social_media-->
		</div><!--center80-->

		<div class="box">
			<div class="center80_2">
				<div class="slider"><img class="slider_img" src="<?php bloginfo('template_url'); ?>/images/slider.png" /></div><!--slider-->
			</div><!--center80-->
		</div><!--box-->

	</div><!--header-->

