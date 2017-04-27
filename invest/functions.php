<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "register_js", 11);
function register_js() {  
	
	if (!is_admin()) {  
// zastąpienie skryptów jquery 
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_bloginfo('template_directory') .'/js/jquery.min.js');
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'tinynav', get_bloginfo('template_directory') .'/js/tinynav.min.js');
		wp_enqueue_script( 'tinynav' );
		wp_register_script( 'bxslider', get_bloginfo('template_directory') .'/js/jquery.bxslider.js');
		wp_enqueue_script( 'bxslider' );
		wp_register_script( 'fancybox', get_bloginfo('template_directory') .'/js/jquery.fancybox.js');
		wp_enqueue_script( 'fancybox' );
		wp_register_script( 'skrypt', get_bloginfo('template_directory') .'/js/skrypt.js');
		wp_enqueue_script( 'skrypt' );
		
	}
}

//dodawanie css'a
if (!is_admin()) add_action('wp_enqueue_scripts', 'add_css', 11);
function add_css() {  
	if (!is_admin()) {	
		wp_enqueue_style('bootstrap', get_bloginfo('template_directory') . '/css/bootstrap.min.css');	
		wp_enqueue_style('bxslider', get_bloginfo('template_directory') . '/css/jquery.bxslider.css');
		wp_enqueue_style('fancybox', get_bloginfo('template_directory') . '/css/jquery.fancybox.css');
		wp_enqueue_style('style', get_bloginfo('template_directory') . '/style.css');
		wp_enqueue_style('respons', get_bloginfo('template_directory') . '/css/respons.css');
	}
}




//inicjalizacja widgetów
if ( function_exists('register_sidebar') ) {
//
	register_sidebar(array(
		'name' => 'sidebar',
		'before_widget' => '',
		'before_title' =>'<h2>',
		'after_title' => '</h2>',
		'after_widget' => '',
		));
//
	register_sidebar(array(
		'name' => 'inny',
		'before_widget' => '',
		'before_title' =>'<h2>',
		'after_title' => '</h2>',
		'after_widget' => '',
		));

}

//Limit znakow dla excerpt
function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changes default [...] in excerpt to a real link
function codium_extend_excerpt_more($more) {
	global $post;
	$readmore = __('Czytaj wiecej', 'codium_extend' );
	return '';
}
add_filter('excerpt_more', 'codium_extend_excerpt_more');

//inicjalizacja nawigacji
add_action('init', 'register_custom_menu');
function register_custom_menu() {
	register_nav_menu('main_menu', 'Menu główne');
	register_nav_menu('footer_menu', 'Menu w stopce');
	register_nav_menu('menu_miasta', 'Menu miasta');
	register_nav_menu('menu_dzielnice', 'Menu dzielnice');
}

// dodanie miniatur do wpisów i ikon wpisów
add_theme_support( 'post-thumbnails' );
add_image_size( 'mini-site', 233, 189, true);
add_image_size( 'zdjecie-galeriaa', 456, 280, true);


// paginacja
function paginator($args = array()) {
	global $wp_query;

	$options = wp_parse_args($args, array(
		'near'=>2,
		'class'=>'paginator',
		'return'=>false,
		'prev'=>'Poprzednia',
		'next'=>'Nastepna',
		'reverse' => false)
	);

	$paged = (int)$wp_query->query_vars['paged'];
	if($paged < 1) $paged = 1;
	$max = (int)$wp_query->max_num_pages;
	if($max < 1) $max = 1;
	if($max == 1) return '';
	if($paged > $max) $paged = $max;

	$previous = ($paged==1) ? '' : '<a class="next" href="'.get_pagenum_link($paged-1).'">'.$options['prev'].'</a>';
	$next = ($paged == $max) ? '' : '<a class="next" href="'.get_pagenum_link($paged+1).'">'.$options['next'].'</a>';
	$current = '<span class="current">'.$paged.'</span>';

	$pagesAfter = $max - $paged;
	$bonus = 2 + (($pagesAfter > $options['near']) ? 0 : ($options['near'] - $pagesAfter));
	$pagesBefore = $options['near'] + $bonus;
	$beforeArr = array();
	if($paged-1 > $pagesBefore) {
		$beforeArr[] = '<a href="'.get_pagenum_link(1).'">1</a> ';
		$beforeArr[] = '<span class="faraway">. . .</span> ';

		for($i = $pagesBefore-2; $i > 0; $i--)
			$beforeArr[] = '<a href="'.get_pagenum_link($paged-$i).'">'.($paged-$i).'</a> ';
	}
	else {
		for($i=1; $i<$paged; $i++)
			$beforeArr[] = '<a href="'.get_pagenum_link($i).'">'.$i.'</a> ';
	}

	$pagesBefore = $paged - 1;
	$bonus = 2 + (($pagesBefore > $options['near']) ? 0 : ($options['near'] - $pagesBefore));
	$pagesAfter = $options['near'] + $bonus;
	$pagesLeft = $max - $paged;
	$afterArr = array();
	if($pagesLeft > $pagesAfter) {
		for($i = $paged+1; $i < $paged+$pagesAfter-1; $i++)
			$afterArr[] = '<a href="'.get_pagenum_link($i).'">'.$i.'</a> ';

		$afterArr[] = '<span class="faraway">. . .</span> ';
		$afterArr[] = '<a href="'.get_pagenum_link($max).'">'.$max.'</a> ';
	}
	else {
		for($i = $paged+1; $i <= $max; $i++)
			$afterArr[] = '<a href="'.get_pagenum_link($i).'">'.$i.'</a> ';
	}

	if($options['reverse']) {
		$out .='<p class="'.$options['class'].'">'.$next.' '.join(array_reverse($afterArr)).' '.$current.' '.join(array_reverse($beforeArr)).' '.$previous.'</p>';
	}
	else {
		$out = '<p class="'.$options['class'].'">'.$previous.' '.join($beforeArr).' '.$current.' '.join($afterArr).' '.$next.'</p>';
	}

	if($options['return'])
		return $out;

	echo $out;
}


/* acf */

// acf w google 

add_filter('acf/options_page/settings', 'my_options_page_settings');

function my_options_page_settings ($options){
	$options['title'] = __('Opcje');
	$options['pages'] = array(
		__('Główna')		
		);
	
	return $options;
}

 // Register Custom Post Type
function slider() {

	$labels = array(
		'name'                  => _x( 'Slider', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Slider', 'text_domain' ),
		'name_admin_bar'        => __( 'Slider', 'text_domain' ),
		'parent_item_colon'     => __( 'Nadrzędny slide', 'text_domain' ),
		'all_items'             => __( 'Wszystkie', 'text_domain' ),
		'add_new_item'          => __( 'Nowy', 'text_domain' ),
		'add_new'               => __( 'Dodaj nowy', 'text_domain' ),
		'new_item'              => __( 'Nowy slide', 'text_domain' ),
		'edit_item'             => __( 'Edytuj', 'text_domain' ),
		'update_item'           => __( 'Zaktualizuj', 'text_domain' ),
		'view_item'             => __( 'Zobacz', 'text_domain' ),
		'search_items'          => __( 'Szukaj', 'text_domain' ),
		'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
		'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
		'items_list'            => __( 'Lista elementów', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
	$args = array(
		'label'                 => __( 'slide', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-collapse',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'slider', 0 );


// Register Custom Post Type
function miasto() {

	$labels = array(
		'name'                  => _x( 'Miasta', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Miasto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Miasta', 'text_domain' ),
		'name_admin_bar'        => __( 'Miasta', 'text_domain' ),
		'parent_item_colon'     => __( 'Nadrzędne miasto', 'text_domain' ),
		'all_items'             => __( 'Wszystkie', 'text_domain' ),
		'add_new_item'          => __( 'Nowy', 'text_domain' ),
		'add_new'               => __( 'Dodaj nowe', 'text_domain' ),
		'new_item'              => __( 'Nowe miasto', 'text_domain' ),
		'edit_item'             => __( 'Edytuj', 'text_domain' ),
		'update_item'           => __( 'Zaktualizuj', 'text_domain' ),
		'view_item'             => __( 'Zobacz', 'text_domain' ),
		'search_items'          => __( 'Szukaj', 'text_domain' ),
		'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
		'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
		'items_list'            => __( 'Lista elementów', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' )
		);
	$args = array(
		'label'                 => __( 'miasto', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page'
		);
	register_post_type( 'miasto', $args );

}
add_action( 'init', 'miasto', 0 );

/*-------------------------------------------------------------------------------------------*/
/* gallery Post Type */
/*-------------------------------------------------------------------------------------------*/
class gallery {

	function gallery() {
		add_action('init',array($this,'create_post_type'));
	}

	function create_post_type() {
		$labels = array(
			'name' => 'Galeria',
			'singular_name' => 'Galeria',
			'add_new' => 'Dodaj nową',
			'all_items' => 'Wszystkie galerie',
			'add_new_item' => 'Dodaj nową galerię',
			'edit_item' => 'Edytuj galerię',
			'new_item' => 'Nowa galeria',
			'view_item' => 'Zobacz galerię',
			'search_items' => 'Szukaj galerii',
			'not_found' =>  'Nie znaleziono',
			'not_found_in_trash' => 'Nie znaleziono w koszu',
			'parent_item_colon' => 'Nadrzędna galeria',
			'menu_name' => 'Galeria'
			);
		$args = array(
			'labels' => $labels,
			'description' => "",
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 20,
			'menu_icon' => 'dashicons-format-gallery',
			'capability_type' => 'post',
			'hierarchical' => true,
			'supports' => array('title','editor','thumbnail'),
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true
			);
		register_post_type('gallery',$args);
	}
}

$gallery = new gallery();

?>