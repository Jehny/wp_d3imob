<?php 
	$args = array(
		'posts_per_page'   => 6,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => '',
		'order'            => 'ASC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'imovel',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   	=> '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
	$imoveis_home = get_posts($args);
	
?>
<section id="destaques" class="container-fluid">
	
	<h1>Veja os imóveis em destaque!</h1>
	<div class="traco">
		<hr>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 subtitulo">
		<p>Encontre aqui o melhor investimento residencial ou comercial, casa, apartamento ou terreno.</p>
	</div>
	<div class="imoveis row-fluid">
		<?php if($imoveis_home){ 
			$i = 1;
			foreach ($imoveis_home as $imoveis_item) {
				$miniatura = get_field('miniatura', $imoveis_item->ID);
				$titulo = get_field('titulo', $imoveis_item->ID);
				$valor = get_field('valor', $imoveis_item->ID);
				$localizacao = get_field('localizacao', $imoveis_item->ID);
				if($i==1 || $i==6){  

		?>
			<div class="row-fluid">
					<div class="item col-md-2 col-md-offset-1">
						<p class="imagem"><img src="<?php echo $miniatura['url']; ?>" alt="<?php echo $miniatura['alt']; ?>" /></p>
						<p class="titulo"><?php echo $titulo; ?></p>
						<p class="valor"><?php echo $valor; ?></p>
						<p class="endereco">
							<span><i class="icon-location2"></i></span>
							<span class="texto"><?php echo $localizacao; ?> </span>
						</p>
						<p class="detalhe">
							<span><i class="icon-plus"></i></span>
							detalhes
						</p>
					</div>
		<?php	$i++; } else if($i==5){ ?>
					<div class="item col-md-2">
						<p class="imagem"><img src="<?php echo $miniatura['url']; ?>" alt="<?php echo $miniatura['alt']; ?>" /></p>
						<p class="titulo"><?php echo $titulo?></p>
						<p class="valor"><?php echo $valor?></p>
						<p class="endereco">
							<span><i class="icon-location2"></i></span>
							<span class="texto"><?php echo $localizacao?> </span>
						</p>
						<p class="detalhe">
							<span><i class="icon-plus"></i></span>
							detalhes
						</p>
					</div>
				</div>
		<?php
			$i++; 	} else {
		?>
					<div class="item col-md-2">
						<p class="imagem"><img src="<?php echo $miniatura['url']; ?>" alt="<?php echo $miniatura['alt']; ?>" /></p>
						<p class="titulo"><?php echo $titulo?></p>
						<p class="valor"><?php echo $valor?></p>
						<p class="endereco">
							<span><i class="icon-location2"></i></span>
							<span class="texto"><?php echo $localizacao?> </span>
						</p>
						<p class="detalhe">
							<span><i class="icon-plus"></i></span>
							detalhes
						</p>
					</div>
		<?php 
				 $i++;
				}

			}
		}
		?>
		<!-- <div class="item col-md-2">
			<p class="imagem"><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></p>
			<p class="titulo">New townhouse in St. Louis, Missouri</p>
			<p class="valor">R$ 500.000</p>
			<p class="endereco">
				<span><i class="icon-location2"></i></span>
				2001-2099 Saint Charles Street, St. Louis, MO 63103, USA
			</p>
			<p class="detalhe">
				<span><i class="icon-plus"></i></span>
				detalhes
			</p>
		</div>
		<div class="item col-md-2">
			<p class="imagem"><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></p>
			<p class="titulo">New townhouse in St. Louis, Missouri</p>
			<p class="valor">R$ 500.000</p>
			<p class="endereco">
				<span><i class="icon-location2"></i></span>
				2001-2099 Saint Charles Street, St. Louis, MO 63103, USA
			</p>
			<p class="detalhe">
				<span><i class="icon-plus"></i></span>
				detalhes
			</p>
		</div>
		<div class="item col-md-2">
			<p class="imagem"><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></p>
			<p class="titulo">New townhouse in St. Louis, Missouri</p>
			<p class="valor">R$ 500.000</p>
			<p class="endereco">
				<span><i class="icon-location2"></i></span>
				2001-2099 Saint Charles Street, St. Louis, MO 63103, USA
			</p>
			<p class="detalhe">
				<span><i class="icon-plus"></i></span>
				detalhes
			</p>
		</div>
		<div class="item col-md-2">
			<p class="imagem"><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></p>
			<p class="titulo">New townhouse in St. Louis, Missouri</p>
			<p class="valor">R$ 500.000</p>
			<p class="endereco">
				<span><i class="icon-location2"></i></span>
				<span class="texto">2001-2099 Saint Charles Street, St. Louis, MO 63103, USA</span>
			</p>
			<p class="detalhe">
				<span><i class="icon-plus"></i></span>
				detalhes
			</p>
		</div>
		<div class="item col-md-1"></div> -->

	</div>
</section>