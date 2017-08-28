<?php 
	if(isset($_POST['solicitar_consulta'])){
		$to = 'cgfjuridico@cgfjuridico.com.br';
		$nome = $_POST['nome_consulta'];
		$email = $_POST['email_consulta'];
		$tel = $_POST['telefone_consulta'];
		$subject = "Consulta CGF Jurídico ";
		$headers = "MIME-Version: 1.1 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		$message = "<html><body>";
		$message .= "<table style='border:1px solid #BD3F4B;width:97%;'>";
		$message .= "<tr><td style='text-align:left;padding-left:10px;padding-top:20px;'><img src='http://www.cgfjuridico.com.br/wp-content/themes/cgf/img/logo.png' alt='CGF Jurídico' width=200></td></tr>";
		$message .= "<tr><td style='padding-left:10px;padding-top:20px;padding-bottom:20px;'>Segue os dados de contato: </td></tr>";
		$message .= "<tr><td style='padding-left:10px;'><strong>Assunto: </strong>Solicitação de consulta.</td></tr>";
		$message .= "<tr><td style='padding-left:10px;'><strong>Nome: </strong>" . $nome . "</td></tr>";
		$message .= "<tr><td style='padding-left:10px;'><strong>E-mail: </strong>" . $email. "</td></tr>";
		$message .= "<tr><td style='padding-left:10px;'><strong>Telefone: </strong>" . $tel. "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";

		if($email != "" && $nome != ""){
			
			if(wp_mail( $to, $subject,  $message, $headers)){
				
				$teste_slider = "<input type='hidden' id='enviado_slider' />";
				$message_slider = "Seu e-mail foi enviado com sucesso!";
			}
		}
	}

?>
<div id="slider" class="hidden-xs">
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
			<!-- Indicators -->
		 	<!-- <ol class="carousel-indicators">
		    <?php $i = 0; foreach ($banners as $banner) { 
						if($i == 0){ ?>
							<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="active"></li>
				<?php	} else { ?>
							<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"></li>
				<?php 	} $i++;?>
				<?php } ?>
		  	</ol> -->
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

<div class="container-fluid solicite_consulta hidden-sm hidden-xs">
	<form action="" method="post" class="row-fluid"> 
		<p>Pesquise seu imóvel:</p>
		<div class="col-md-2 div-select">
			<select name="cidade">
				<option value="Cidade 1">Cidade 1</option>
				<option value="Cidade 2">Cidade 2</option>
				<option value="Cidade 3">Cidade 3</option>
			</select>
		</div>
		<div class="col-md-2 div-select">
			<select name="bairro">
				<option value="bairro 1">bairro 1</option>
				<option value="bairro 2">bairro 2</option>
				<option value="bairro 3">bairro 3</option>
			</select>
		</div>
		<div class="col-md-2 div-select-tipo">
			<select name="tipo_imovel">
				<option value="Tipo 1">Tipo 1</option>
				<option value="Tipo 2">Tipo 2</option>
				<option value="Tipo 3">Tipo 3</option>
			</select>
		</div>
		<div class="col-md-2">
			<button type="submit" name="solicitar_consulta" class="btn_busca_imovel">Buscar Imóvel </button>
		</div>
	</form>
	<?php if(isset($teste_slider)){
		echo $teste_slider;
		} ?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModalSlider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sucesso!</h4>
      </div>
      <div class="modal-body">
        <?php if(isset($message_slider)){ echo $message_slider; } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-vermelho" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>