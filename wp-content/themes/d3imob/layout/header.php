<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dimob.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/medias.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icon_fonts.css" type="text/css" />
		
		<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.0.0.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.zaccordion.min.js"></script>
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
      	<div class="row-fluid div_redes" id="redes">
			<div class="container-fluid">
				<ul class="list-inline redes_sociais">
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
		<div class="menu_home">
			<div id="menu" class="navbar navbar-default navbar-header row-fluid">
				<div class="logo col-xs-4 col-sm-3 col-md-4">
					<h1><a href="#redes"><img src="<?php bloginfo('template_url'); ?>/img/logo_header.png" data-offset="85" class="logo_h logo_h_n_fixed img-responsive hidden-xs scroll"></a></h1>
					<h1><a href="#redes"><img src="<?php bloginfo('template_url'); ?>/img/logo_header_branca.png" data-offset="85" class="logo_h_fixed img-responsive scroll"></a></h1>
					<!-- <h1><a href=""><img src="<?php bloginfo('template_url'); ?>/img/logo_header_branca.png" class="img-responsive visible-xs"></a></h1> -->
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
					<ul class="text-uppercase nav navbar-nav col-xs-12 col-sm-9 col-md-7 col-md-offset-1">
						<li><a href="#redes" class="scroll" data-offset="85" id="home_link">Home</a></li>
						<li><a href="#sobre_empresa" id="empresa_link" class="scroll" data-offset="60">D3imob</a></li>
						<li><a href="#expertises" id="expertises_link" class="scroll" data-offset="60">Imóveis</a></li>
						<li><a href="#noticias_notas" id="noticias_link" class="scroll" data-offset="60">Blog</a></li>
						<li><a href="#time" id="time_link" class="scroll" data-offset="60">Consultores</a></li>
						<li><a href="#contato" id="contato_link" class="scroll" data-offset="60">Contato</a></li>
					</ul>
				</nav>
			</div>
		 	
		 </div>				
	</div>

			
		
