<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "register_js", 11);
function register_js() {  
 
 if (!is_admin()) {  
// zastąpienie skryptów jquery 
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_bloginfo('template_directory') .'/js/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    
    wp_register_script( 'tinynav', get_bloginfo('template_directory') .'/js/tinynav.js');
    wp_enqueue_script( 'tinynav' );
	
	wp_register_script( 'skrypt', get_bloginfo('template_directory') .'/js/skrypt.js');
    wp_enqueue_script( 'skrypt' );

	           
  }
}

//dodawanie css'a
if (!is_admin()) add_action('wp_enqueue_scripts', 'add_css', 11);
	function add_css() {  
	if (!is_admin()) {	
	wp_enqueue_style('bootstrap', get_bloginfo('template_directory') . '/css/bootstrap.css');	
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
 
?>
