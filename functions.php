<?php 
	
    #Aquí se crea una función que permitirá una ubicación del menú-----------------------------------------
	function register_my_menus(){
		register_nav_menus( 
				array(
					'menu-header' =>_('Menú del encabezado'),
					'menu-footer' =>_('Menú del footer')
				)
		);
	}

	#Aquí se le agrega la función a WP----------------------------------------------------------------------
	add_action( 'init', 'register_my_menus');

	add_theme_support( 'post-thumbnails' );

	// Register Custom Navigation Walker
		require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

		/**
 * Filter the CSS class for a nav menu based on a condition.
 *
 * @param array  $classes The CSS classes that are applied to the menu item's <li> element.
 * @param object $item    The current menu item.
 * @return array (maybe) modified nav menu class.
 */
function wpdocs_special_nav_class( $classes, $item ) {
    if ( 'Movilizarte en Yarumal' == $item->title ) {
        // Notice you can change the conditional from is_single() and $item->title
        $classes[] = "special-class";
    }
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_special_nav_class' , 10, 2 );