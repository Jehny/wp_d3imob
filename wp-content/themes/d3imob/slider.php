<?php 
	$display = "invisivel";

	if(isset($_POST['solicitar_consulta_imovel'])){
		$c =  $_POST['cidade'];
		$b =  $_POST['bairro'];
		$t =  $_POST['tipo_imovel'];

		$display = "visivel";
		$args2 = array(
			'posts_per_page'   => 10,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => '',
			'order'            => 'ASC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => 'bairro',
			'meta_value'       => $b,
			'meta_key'         => 'cidade',
			'meta_value'       => $c,
			'meta_key'         => 'tipo',
			'meta_value'       => $t,
			'post_type'        => 'imovel',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'author'	   	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);

		$imoveis_home2 = get_posts($args2);
	}


$args = array(
		'posts_per_page'   => 10,
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
<div class="banner">
	<div id="slider" class="hidden-xs espaco_xs">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		 

		  <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  	<?php 
					$banners = get_posts('post_type=banners');
					if($banners){
						foreach ($banners as $banner){
							if($i++ <= 1){
								$active = "active";
							}else{$active = "";}
				?>
							<div class="<?php echo $active; ?> item">
								<img alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($banner->ID)); ?>" class="img-responsive">
				<?php
								if(get_field('titulo', $banner->ID) != ""){
					?>				
								    <div class="carousel-caption">
								       	<h3><?php if(get_field('titulo', $banner->ID)) { echo get_field('titulo', $banner->ID); } ?></h3>
								        <p><?php if(get_field('sub_titulo', $banner->ID)) { echo get_field('sub_titulo', $banner->ID); } ?></p>
								    </div>
							<?php } ?>
							</div>	
							
				<?php  		
						}
					}
				?>
				
		  	</div>
		  	<!-- Controls -->
			 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span aria-hidden="true"><i class="icon-angle-left"></i></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon" aria-hidden="true"><i class="icon-angle-right"></i></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="boder_gradiente"></div>
	<div class="container-fluid solicite_consulta">
		<form action="" method="post" class="row-fluid"> 
			<p>Pesquise seu imóvel:</p>
			<div class="col-md-2 col-sm-3 col-xs-12 div-select">
				<select name="cidade">
					<option value="">Cidade</option>
					<?php
						if($imoveis_home){
							$array_cidade = array();
							foreach ($imoveis_home as $imoveis_item) {
								$cidade = get_field('cidade', $imoveis_item->ID);
								if($cidade !=""){
									array_push($array_cidade, $cidade);
								}
							}
						}
								$result = array_unique($array_cidade);
								if($result !=""){
									foreach ($result as $cit) {
										if($c == $cit){
					?>
											<option value="<?php echo $cit; ?>" selected><?php echo $cit; ?></option>
					<?php 				} else { ?>
											<option value="<?php echo $cit; ?>"><?php echo $cit; ?></option>
					<?php
										}
								}
							}
						
					?>
					
				</select>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-12 div-select">
				<select name="bairro">
					<option value="">Bairro</option>
					<?php
						if($imoveis_home){
							$array_bairro = array();
							foreach ($imoveis_home as $imoveis_item) {
								$bairro = get_field('bairro', $imoveis_item->ID);
								if($bairro !=""){
									array_push($array_bairro, $bairro);
								}
							}
						}
								$result = array_unique($array_bairro);
								if($result !=""){
									foreach ($result as $bair) {
										if($b == $bair){
					?>
											<option value="<?php echo $bair; ?>" selected><?php echo $bair; ?></option>
					<?php 				} else { ?>
											<option value="<?php echo $bair; ?>"><?php echo $bair; ?></option>
					<?php
										}
								}
							}
						
					?>
				</select>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-12 div-select-tipo">
				<select name="tipo_imovel">
					<option value="">Tipo</option>
					<?php
						if($imoveis_home){
							$array_tipo = array();
							foreach ($imoveis_home as $imoveis_item) {
								$tipo = get_field('tipo', $imoveis_item->ID);
								if($tipo !=""){
									array_push($array_tipo, $tipo);
								}
								
							}
						}
								$result = array_unique($array_tipo);
								if($result !=""){
									foreach ($result as $tip) {
										if($t == $tip){
					?>
											<option value="<?php echo $tip; ?>" selected><?php echo $tip; ?></option>
					<?php 				} else { ?>
											<option value="<?php echo $tip; ?>"><?php echo $tip; ?></option>
					<?php
										}
								}
							}
						
					?>
				</select>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-12">
				<button type="submit" name="solicitar_consulta_imovel" class="btn_busca_imovel">Buscar Imóvel </button>
			</div>
		</form>
		
	</div>
</div>

<div class="result_busca_imovel">
	<section class="container-fluid <?php echo $display; ?>">
		<div class="col-xs-12 col-sm-12 col-md-12 subtitulo">
			<p>Resultado da busca:</p>
		</div>
		<div class="imoveis row-fluid">
			<?php if($imoveis_home2){ 
				$i = 1;
				foreach ($imoveis_home2 as $imoveis_item2) {
					$miniatura = get_field('miniatura', $imoveis_item2->ID);
					$titulo = get_field('titulo', $imoveis_item2->ID);
					$valor = get_field('valor', $imoveis_item2->ID);
					$localizacao = get_field('localizacao', $imoveis_item2->ID);
					if($i==1 || $i==6){  

			?>
				<div class="row-fluid">
						<div class="item col-md-2 col-sm-6 col-md-offset-1">
							<p class="imagem"><img src="<?php echo $miniatura['url']; ?>" alt="<?php echo $miniatura['alt']; ?>" /></p>
							<p class="titulo"><?php echo $titulo; ?></p>
							<p class="valor"><?php echo $valor; ?></p>
							<p class="endereco">
								<span><i class="icon-location2"></i></span>
								<span class="texto"><?php echo $localizacao; ?> </span>
							</p>
							<p class="detalhe">
								<span><i class="icon-plus"></i></span>
								<a href="<?php echo get_permalink($imoveis_item2->ID);?>">detalhes</a>
							</p>
						</div>
			<?php	$i++; } else if($i==5){ ?>
						<div class="item col-md-2 col-sm-6">
							<p class="imagem"><img src="<?php echo $miniatura['url']; ?>" alt="<?php echo $miniatura['alt']; ?>" /></p>
							<p class="titulo"><?php echo $titulo?></p>
							<p class="valor"><?php echo $valor?></p>
							<p class="endereco">
								<span><i class="icon-location2"></i></span>
								<span class="texto"><?php echo $localizacao?> </span>
							</p>
							<p class="detalhe">
								<span><i class="icon-plus"></i></span>
								<a href="<?php echo get_permalink($imoveis_item2->ID);?>">detalhes</a>
							</p>
						</div>
					</div>
			<?php
				$i++; 	} else {
			?>
						<div class="item col-md-2 col-sm-6">
							<p class="imagem"><img src="<?php echo $miniatura['url']; ?>" alt="<?php echo $miniatura['alt']; ?>" /></p>
							<p class="titulo"><?php echo $titulo?></p>
							<p class="valor"><?php echo $valor?></p>
							<p class="endereco">
								<span><i class="icon-location2"></i></span>
								<span class="texto"><?php echo $localizacao?> </span>
							</p>
							<p class="detalhe">
								<span><i class="icon-plus"></i></span>
								<a href="<?php echo get_permalink($imoveis_item2->ID);?>">detalhes</a>
							</p>
						</div>
			<?php 
					 $i++;
					}

				}
			} else {
				echo "<p> Nenhum resultado encontrado!</p>";
			}
			?>
			

		</div>
	</section>
</div>

