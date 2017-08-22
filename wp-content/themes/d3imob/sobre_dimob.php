<?php

	$q = get_page_by_title( 'Quem Somos' );
	$sobre_col_1 = get_field('sobre_a_empresa', $q->ID);
	$titulo_missao = get_field('titulo_missão', $q->ID);
	$missao = get_field('missao', $q->ID);
	$titulo_visao = get_field('titulo_visao', $q->ID);
	$visao = get_field('visao', $q->ID);
	$titulo_valores = get_field('titulo_valores', $q->ID);
	$valores = get_field('valores', $q->ID);
	$banner_sobre = get_field('banner_sobre', $q->ID);
	$banner_texto_titulo = get_field('texto_titulo_banner', $q->ID);
	$banner_texto_descricao = get_field('texto_descricao_banner', $q->ID);
	

?>

<section id="sobre_empresa" class="container-fluid sobre_empresa">
	
	<h1>Sobre a D3imob</h1>
	<div class="traco">
		<hr>
	</div>
	<div class="row-fluid empresa">
		
		<div class="col-xs-12 col-sm-12 col-md-12 sobre">
			<div class="col-md-12">
				<?php echo $sobre_col_1; ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 valores">
			<div class="col-md-4">
				<p><i class="icon-target"></i></p>
				<p class="titulo_empresa"><?php echo $titulo_missao; ?></p>
				<p class="texto"><?php echo $missao; ?></p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<p><i class="icon-binoculo"></i></p>
				<p class="titulo_empresa"><?php echo $titulo_visao; ?></p>
				<p class="texto"><?php echo $visao; ?></p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 bg_valor">
				<p><i class="icon-user5"></i></p>
				<p class="titulo_empresa"><?php echo $titulo_valores; ?></p>
				<p class="texto"><?php echo $valores; ?></p>
			</div>
		</div>
	</div>
</section>

<div class="sobre_banner_contato">
	<img src="<?php echo $banner_sobre['url']; ?>" alt="<?php echo $banner_sobre['alt']; ?>" />
	<div class="textos">
		<p class="titulo"><?php echo $banner_texto_titulo; ?></p>
		<p class="descricao"><?php echo $banner_texto_descricao; ?></p>
		<p class="botao"><a href="">Entre em contato!</a></p>
		
	</div>
</div>
