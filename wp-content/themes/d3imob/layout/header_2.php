<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dimob.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/medias.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icon_fonts.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/barousel.css" type="text/css" />
		
		<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.0.0.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.barousel.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.maskedinput.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/d3.js"></script>

		<title>D3imob</title>
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" type="image/x-icon" />
		<link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
	</head>

	<body>
	<div class="cabecalho">
      	<div class="row-fluid div_redes_2" id="redes_2">
			<div class="container-fluid">
				<ul class="list-inline redes_sociais_2">
					<?php
						$redes = get_posts('post_type=redes_sociais');
						$facebook = "";
						$youtube = "";
						$in = "";
						$twitter = "";
						$instagram = "";
						foreach ($redes as $rede) {
							$facebook = get_field('facebook', $rede->ID);
							$youtube = get_field('youtube', $rede->ID);
							$in = get_field('linkedin', $rede->ID);
							$instagram = get_field('instagram', $rede->ID);
						 } 
					?>
					<li><a href="<?php echo $facebook; ?>" target="blank"><i class="icon-facebook"></i></a></li>
					<li><a href="<?php echo $instagram; ?>" target="blank"><i class="icon-instagram"></i></a></li>
					<li><a href="<?php echo $in; ?>" target="blank"><i class="icon-linkedin2"></i></a></li>
					<li><a href="<?php echo $youtube; ?>" target="blank"><i class="icon-youtube"></i></a></li>

				</ul>
			</div>
		</div>
		<div class="menu_home_2">
			<div id="menu_2" class="navbar navbar-default navbar-header menu_2">
				<div class="logo_2 col-xs-4 col-sm-3 col-md-4">
					<h1><a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo_footer.png" data-offset="85" class="img-responsive hidden-xs"></a></h1>
					<h1><a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logoMobile.png" data-offset="85" class="img-responsive hidden-md hidden-sm hidden-lg"></a></h1>
				</div>
				<div class="navbar-header nav_cel_header">
			        <button type="button" class="navbar-toggle nav_cel_button" data-toggle="collapse" data-target="#navbar-collapse">
			          <span class="sr-only">Toggle navigation</span>
			          <!-- <span class="glyphicon glyphicon-align-justify"></span> -->
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			        </button>
			    </div>
				<nav id="navbar-collapse" class="collapse navbar-collapse nav_cel">
					<ul class="text-uppercase nav navbar-nav col-xs-12 col-sm-6 col-md-6">
						<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
						<li><a href="<?php echo get_home_url(); ?>/#sobre_empresa">D3imob</a></li>
						<li><a href="<?php echo get_home_url(); ?>/#destaques">Imóveis</a></li>
						<li><a href="http://www.d3imob.com.br/blog">Blog</a></li>
						<li><a href="<?php echo get_home_url(); ?>/#time">Consultores</a></li>
						<li><a href="<?php echo get_home_url(); ?>/contato">Contato</a></li>

					</ul>
					<div class="col-md-2 col-sm-3 hidden-xs contato_header">
						<p class="texto">Entre em contato!</p>
						<i class="icon-phone"></i><p class="tel">(85) 99749.1539</p>
					</div>
				</nav>
				
			</div>
			
		</div>				
	</div>

			
		
