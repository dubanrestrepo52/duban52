<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php bloginfo( name ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
		<link rel="stylesheet" href="http://localhost/transitoyarumal/wp-content/themes/transito_theme/css/bootstrap.min.css">
	</head>

		<body>
			<!--Padre Fondo-->
			<div class="container-fluid fondo">
			<!--Div padre contenedor-->
			<div class="container">
				<!--Div busqueda y mapa-->
			<header>	
				<div class="row barra-superior pt-1 pb-1">
					<div class="">
						Mapa del sitio
					</div>
					<div class="">
					<!--Traductor-->
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
						
					<img class="logo ml-2" src="http://localhost/transitoyarumal/wp-content/themes/transito_theme/images/logo transito trans.png" alt="">
						
					
					<h1 class="titulo"><?php bloginfo(name); ?></h1>
						
					<img class="logo-alcaldia" src="http://localhost/transitoyarumal/wp-content/themes/transito_theme/images/logo-alcaldía-transparente.png" alt="logo_transito">
																					
					<img class="escudo mr-2" src="http://localhost/transitoyarumal/wp-content/themes/transito_theme/images/Escudo_yarumal.png" alt="logo_transito">
				</div>
				
				<!--Navegación-->			
				<div class="row text-center">
					<?php include TEMPLATEPATH . '/nav.php'; ?>
				</div>
			</header>	
			