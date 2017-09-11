<?php
	include "layout/header_2.php";
?>
<div class="bg_body">
	<div class="breadcrumb_custom">
		<ul>
			<li>Home</li>
			<li><?php echo the_title(); ?></li>
		</ul>
	</div>
	<div class="row-fluid">
		<section class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12">

			<?php if (have_posts()) {
					 $valor = get_field('valor', get_the_ID());
					 $descricao_detalhe = get_field('descricao_detalhe', get_the_ID());
					 $informacoes_sobre_imovel = get_field('informacoes_sobre_imovel', get_the_ID());
					 $localizacao = get_field('localizacao', get_the_ID());
					 $mapa = get_field('mapa', get_the_ID());
			?>
					<div class="post">
						
						
						<div class="titulo row-fluid">
							<div class="nome">
								<h1> <?php echo the_title(); ?> </h1>
								<p class="valor">Valor: <span><?php echo  $valor; ?></span></p>
							</div>
						</div>
						<?php include "slider_detalhe_imovel.php"; ?>
						<div class="corpo">
							<div class="detalhe">
								<h2>Descrição do imóvel</h2>
								<div class="texto">
									<?php  echo $descricao_detalhe; ?>
								</div>
							</div>	

							<div class="informacoes">
								<h2>Informações sobre o imóvel</h2>
								<div class="texto">
									<?php  echo $informacoes_sobre_imovel; ?>
								</div>
							</div>	

							<div class="local">
								<h2>Localização</h2>
								<div class="map">
									
									<?php  echo $mapa; ?>
								</div>
								
							</div>					
							
						</div>

					</div>
			<?php //}
					
				} 
			?>
			
			</div>

		</section>
		
	</div>
</div>

<?php
	include "time.php";
	include "layout/footer.php";
?>