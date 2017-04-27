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
			<div class="row">
				<div class="center center1">

					<div class="logo_header floatL">
						<span class="logo_text"><?php the_field('nazwa_logo', 5) ?></span>
					</div><!--logo-->


					<!-- menu  -->
					<ul class="col-md-offset-2 col-md-10 menu floatL">
						<?php wp_nav_menu( array('theme_location'=>'main_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>			
					</ul>

					<div class="clear"></div><!--clear-->
				</div><!--center-->
			</div><!--row-->
	</div><!--header-->



