<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "register_js", 11);
function register_js() {  
 
 if (!is_admin()) {  
// zastąpienie skryptów jquery 
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_bloginfo('template_directory') .'/js/jquery.min.js');
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'hoverIntent', get_bloginfo('template_directory') .'/js/hoverIntent.js');
    wp_enqueue_script( 'hoverIntent' );

    wp_register_script( 'superfish', get_bloginfo('template_directory') .'/js/superfish.js');
    wp_enqueue_script( 'superfish' );

    wp_register_script( 'tinyNav', get_bloginfo('template_directory') .'/js/tinynav.min.js');
    wp_enqueue_script( 'tinyNav' );

    wp_register_script( 'skrypt', get_bloginfo('template_directory') .'/js/skrypt.js');
    wp_enqueue_script( 'skrypt' );

    wp_register_script( 'slick', get_bloginfo('template_directory') .'/js/slick.min.js');
    wp_enqueue_script( 'slick' );
	           
  }
}

//dodawanie css'a
if (!is_admin()) add_action('wp_enqueue_scripts', 'add_css', 11);
	function add_css() {  
	if (!is_admin()) {	
	wp_enqueue_style('bootstrap', get_bloginfo('template_directory') . '/css/bootstrap.css');

	wp_enqueue_style('superfish', get_bloginfo('template_directory') . '/css/superfish.css');	

	wp_enqueue_style('font', get_bloginfo('template_directory') . '/css/font-awesome.min.css');

    wp_enqueue_style('slick', get_bloginfo('template_directory') . '/css/slick.css');
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
register_nav_menu('podmenu', 'Podmenu');
}

// dodanie miniatur do wpisów i ikon wpisów
add_theme_support( 'post-thumbnails' );
add_image_size( 'mini-site', 233, 189, true);


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


function oferta() {

    $labels = array(
        'name'                  => _x( 'Oferty', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Oferta', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Oferty', 'text_domain' ),
        'name_admin_bar'        => __( 'Oferty', 'text_domain' ),
        'parent_item_colon'     => __( 'Nadrzędna oferta', 'text_domain' ),
        'all_items'             => __( 'Wszystkie', 'text_domain' ),
        'add_new_item'          => __( 'Nowa', 'text_domain' ),
        'add_new'               => __( 'Dodaj nowa', 'text_domain' ),
        'new_item'              => __( 'Nowa oferte', 'text_domain' ),
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
        'label'                 => __( 'oferta', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        );
    register_post_type( 'oferta', $args );

}
add_action( 'init', 'oferta', 0 );



function realizacja() {

    $labels = array(
        'name'                  => _x( 'Realizacje', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Realizacja', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Realizacje', 'text_domain' ),
        'name_admin_bar'        => __( 'Realizacje', 'text_domain' ),
        'parent_item_colon'     => __( 'Nadrzędna realizacja', 'text_domain' ),
        'all_items'             => __( 'Wszystkie', 'text_domain' ),
        'add_new_item'          => __( 'Nowa', 'text_domain' ),
        'add_new'               => __( 'Dodaj nowa', 'text_domain' ),
        'new_item'              => __( 'Nowa realizacja', 'text_domain' ),
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
        'label'                 => __( 'realizacja', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        );
    register_post_type( 'realizacja', $args );

}
add_action( 'init', 'realizacja', 0 );

?>
