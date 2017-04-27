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
		<div class="container">
			
			
			<div class="row">
					<div class="center1 center">
						<div class="col-xs-12 col-sm-2 col-md-3 floatL logo">
							<!-- Logotyp -->
							<a href="<?php bloginfo('url'); ?>">
								<img class="logo_left" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
							</a>
						</div><!--logo-->	

						<!-- menu  -->
						<ul class="col-xs-12 col-sm-10 col-md-9 floatL menu header_menu">
							<?php wp_nav_menu( array('theme_location'=>'main_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>			
						</ul>

						<div class="clear"></div>
					</dic><!--center-->
			</div><!--row-->
		</div><!-- container -->
	</div><!-- header -->
