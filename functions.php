<?php

function bootstrap_scripts_enqueue() {
	    // all styles
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), time() );

	    // all scripts
//	wp_enqueue_script( 'jquery-3-js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
//	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'bootstrap_scripts_enqueue' );

// Add class into menu
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);


function add_menu_link_class( $atts, $item, $args ) {
        $atts['class'] = 'nav-link';
        return $atts;
    }
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
    array(
        'main' => __( 'Primary', 'rn' ),
        'footer' => __( 'Footer Menu', 'rn' ),
        'social' => __( 'Social Links Menu', 'rn' ),
    )
);


// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h4 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="widget %2$s p-4 mb-3 " style="box-shadow: 0 0.3px 0.9px rgba(0, 0, 0, .12), 0 1.6px 3.6px rgba(0, 0, 0, .12);"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Left Sidebar', 'rn' ),
				'id'          => 'left-sidebar',
				'description' => __( 'Widgets in this area will be displayed in the left.', 'rn' ),
			)
		)
	);
	add_theme_support( 'post-thumbnails' );