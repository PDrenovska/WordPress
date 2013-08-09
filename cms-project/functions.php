<?php

include 'theme_options.php';

/* SIDEBARS */

$sidebarArgs = array(
	'name' => 'sidebar-1',
	'before_widget' => '<section>',
        'after_widget' => '</section>');


register_sidebar($sidebarArgs);

$sidebarArgs2 = array(
	'name' => 'sidebar-2',
	'before_widget' => '<div class="sbox1">',
	'after_widget' => '</div>' );

register_sidebar($sidebarArgs2);

/* CUSTOM MENUS */

register_nav_menus( array(
		'main' => __( 'Main Navigation', '' ),
	) );

function fallbackmenu(){ 
	echo '<p id="menu-tip">Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</p>';
 }


/* CUSTOM EXCERPTS */
	
function wpe_excerptlength_archive($length) {
    return 70;
}
function wpe_excerptlength_index($length) {
    return 100;
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    echo $output;
}

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-background' );

/* CUSTOM HEADER */
$args = array(
    'flex-width'    => true,
    'width'         => 1140,
    'flex-height'    => true,
    'height'        => 73,
    'default-image' => get_template_directory_uri() . '/images/telerik-academy.png',
);
add_theme_support( 'custom-header', $args );

function theme_styles()  
{ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  wp_register_style( 'custom-style', 
    get_template_directory_uri() . '/css/custom-style.css', 
    array(), 
    '20120208', 
    'all' );

  // enqueing:
  wp_enqueue_style( 'custom-style' );
}
add_action('wp_enqueue_scripts', 'theme_styles');

/* PAGINATION */

function numeric_posts_nav() {
    if( is_singular() ){
       return; 
    }
        
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 ){
        return;
    }
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="navigation"><ul>' . "\n";
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    echo '</ul></div>' . "\n";
}

?>