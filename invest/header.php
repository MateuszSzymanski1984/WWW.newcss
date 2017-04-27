<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<meta name="robots" content="index,follow" />
	<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="navbar">
				
				<div class="center">
					<div class="col-xs-12 col-md-offset-0 col-md-2 col-lg-2 logo floatL">
						<a href="<?php bloginfo('url'); ?>"><img class="i" id="logo1" src="<?php the_field('logo_strony', 5); ?>" alt="<?php bloginfo('name'); ?>"></a>	
					</div><!--logo-->
					
					<div class="col-xs-8 col-sm-8 col-md-10 col-lg-10 menu floatL">
						<ul id="nav">
							<?php wp_nav_menu( array('theme_location'=>'main_menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>			
						</ul>
					</div><!--menu-->
					
					<div class="clear"></div>
				</div><!--center-->
			</div><!--navbar-->
		</div><!--row-->

		
		
		
