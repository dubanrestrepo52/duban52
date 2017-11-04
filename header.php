<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo( name ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
		<link rel="stylesheet" href="<?php 	echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
	</head>

		<body>
			<!--Padre Fondo-->

			<div class="container-fluid fondo">

			<!--Div padre contenedor-->

			<div class="container">

				<!--Div busqueda y mapa del sitio (Principio del encabezado)-->

			<header>	
				<div class="row barra-superior pt-1 pb-1">
					<div class="">
						Mapa del sitio
					</div>

				<!--Traductor-->

					<div class="">
						<select id="inputState" class="form-control">
					        <option selected>Lenguaje</option>
					        <option>Inglés</option>
					        <option value="">Francés</option>
					        <option value="">Portugues</option>
					        <option value="">Alemán</option>
					     </select>
					</div>

				<!--Buscador-->

					<div class="">
						<div id=""><form role="search" method="get" id="searchform" action="">  <label for="s">    <i class="icon-search"></i>  </label>  <input type="text" value="" placeholder="search" class="" id="s" /></form></div>
					</div>
				
				</div>

				<!--Encabezado-->	
				<div class="row mt-1 pt-2 cabeza">
						
					<img class="logo ml-2" src="<?php 	echo get_template_directory_uri(); ?>/images/logo transito trans.png" alt="logo del tránsito">
						
				<!--Llamada del titulo del sitio-->

					<h1 class="titulo">
						<?php bloginfo(name); ?>
					</h1>

				<!--Logo alcaldía-->
						
					<img class="logo-alcaldia" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-alcaldía-transparente.png" alt="Logotipo alcaldía">

				<!--Escudo de Yarumal-->
																					
					<img class="escudo mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Escudo_yarumal.png" alt="Escudo Yarumal">
				</div>
				
				<!--Navegación-->	

				<div class="row ">
					<nav class="barra-menu container-fluid navbar navbar-expand-lg navbar-light ">
								  
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

				<!--Llamado del menú de Wordpress-->

							<?php
							    wp_nav_menu( array(
							                
							        'theme_location'    => 'menu-header',
							        'depth'             => 2,
							        'container'         => 'div',
							        'container_class'   => 'row collapse navbar-collapse',
							        'container_id'      => 'navbarNavDropdown',
							        'menu_class'        => 'navbar-nav',
							        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							        'walker'            => new WP_Bootstrap_Navwalker())
							        );
							?>
								 
					</nav>
				</div>	
			</header>

		<!--Llamadas a los Scripts de JavaScript-->	
					
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>	
			