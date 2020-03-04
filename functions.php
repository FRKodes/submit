<?php
define( 'NAKED_VERSION', 1.0 );

/*  Set the maximum allowed width for any content in the theme*/
if ( ! isset( $content_width ) ) $content_width = 900;

/* Add Rss feed support to Head section*/
add_theme_support( 'automatic-feed-links' );

/* Add post thumbnail/featured image support*/
add_theme_support( 'post-thumbnails' );

/* Register main menu for Wordpress use*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'naked' ), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);

/* Activate sidebar for Wordpress use*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/* Enqueue Styles and Scripts*/

function naked_scripts()  { 
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/assets/css/submit-styles.css');
	wp_enqueue_script( 'naked-fitvid', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array( 'jquery' ), NAKED_VERSION, true );
	wp_enqueue_script( 'naked', get_template_directory_uri() . '/assets/js/theme.min.js', array(), NAKED_VERSION, true );
	wp_enqueue_script( 'submit-js', get_template_directory_uri() . '/assets/js/app.js', array(), array(), true );
}
add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header


add_action( 'init', 'create_submit_project' );

function create_submit_project() {
    register_post_type( 'proyecto',
        array(
            'labels' => array(
                'name' => 'Proyectos',
                'singular_name' => 'Proyecto',
                'add_new' => 'Agregar nuevo',
                'add_new_item' => 'Agregar nuevo Proyecto',
                'edit' => 'Editar',
                'edit_item' => 'Editar Proyecto',
                'new_item' => 'Nueva Proyecto',
                'view' => 'Ver',
                'view_item' => 'Ver Proyecto',
                'search_items' => 'Buscar Proyecto',
                'not_found' => 'No se encontró el Proyecto',
                'not_found_in_trash' => 'No se encontró el Proyecto en la papelera',
                'parent' => 'Proyecto padre'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
}

add_action( 'init', 'create_project_taxonomies', 0 );

function create_project_taxonomies() {
    register_taxonomy(
        'categoria',
        'proyecto',
        array(
            'labels' => array(
                'name' => 'Categorías',
                'add_new_item' => 'Agregar Nueva categoría',
                'new_item_name' => "Nueva Categoría"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}