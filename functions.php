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