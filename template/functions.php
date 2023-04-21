<?php 

// Registramos los Menus
register_nav_menus( array(
	'menu-top' => 'Menu Principal',
));


// Registramos la zona de widgets del inicio
register_sidebar(array(
	'name' => 'Inicio',
 ));

 //REGISTRAR EL SIDEBAR
add_action( 'widgets_init', 'registrar_sidebar' );
 
function registrar_sidebar() {
    register_sidebar( array(
        'name' =>'Sidebar',
        'id' => 'sidebar',
        'description' => 'Barra lateral',
        //DIVs del sidebar en documento HTML
        'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h5 class="card-header">',
        'after_title'   => '</h5>
        <div class="card-body">',
    ) );
}

// Registramos la zona de widgets del Footer para la entrada
register_sidebar(array(
	'name' => 'Footer entry',
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
 ));

 // Añade soporte post-thumbnails
 function my_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

//Añade soporte para logo
$logo_width  = 120; 
$logo_height = 90; 

add_theme_support( 
	 'custom-logo', 
	 array( 
		  'height'      => $logo_height, 
		  'width'       => $logo_width, 
		  'flex-height' => true, 
		  'flex-width'  => true, 
		  'header-text' => array( 'site-title', 'site-description' ),
	 ) 
); 

 function my_custom_post_type() {
    $args = array(
      'supports' => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'my_custom_post_type', $args );
  }
  add_action( 'init', ' my_custom_post_type ' );

?>