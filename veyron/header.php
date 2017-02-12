<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">

		<script src="js/modernizr.custom.js"></script>

		<?php wp_head(); ?>
	</head>

	<body>
		<nav>  <!-- navegation bar -->
		  <div>
		  	<a href="<?php echo site_url(); ?>">
		  		<img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/v_logos/logo.jpg">
		  	</a>
		  </div>	
		  <div>
		      <ul> 
		        <li ><a class="hvr-underline-from-center" href="<?php bloginfo('url'); ?>/consultoria">Consultoría</a></li>     
		        <li ><a class="hvr-underline-from-center" href="<?php bloginfo('url'); ?>/ifs"> I F S </a></li>
		        <li ><a class="hvr-underline-from-center" href="<?php bloginfo('url'); ?>/industrias"> Industrias </a></li>
	            <li ><a class="hvr-underline-from-center" href="<?php bloginfo('url'); ?>/soluciones"> Soluciones</a></li>
               	<li ><a class="hvr-underline-from-center" href="<?php bloginfo('url'); ?>/clientes"> Clientes </a></li>
		        <li ><a class="hvr-underline-from-center" href="<?php bloginfo('url'); ?>/noticias">Noticias </a></li>
		       	<li ><a class="hvr-underline-from-center" href="<?php bloginfo('url'); ?>/contacto">Contacto</a></li>
		      </ul>
		  </div>
		</nav>	<!-- navegation bar -->
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
