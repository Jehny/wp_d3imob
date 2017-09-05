<?php 
	global $wpdb;
	if(isset($_POST['enviar_newaletter'])){
		$to = 'd3imob@gmail.com';
		$email = $_POST['mail_newslatter'];
		$subject = "Consulta D3imob ";
		$headers = "MIME-Version: 1.1 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		$message = "<html><body>";
		$message .= "<table style='border:1px solid #BD3F4B;width:97%;'>";
		$message .= "<tr><td style='text-align:left;padding-left:10px;padding-top:20px;'><img src='http://www.d3imob.com.br/wp-content/themes/cgf/img/logo.png' alt='D3imob' width=200></td></tr>";
		$message .= "<tr><td style='padding-left:10px;padding-top:20px;padding-bottom:20px;'>Segue os dados de contato: </td></tr>";
		$message .= "<tr><td style='padding-left:10px;'><strong>Assunto: </strong>Solicitação de consulta.</td></tr>";
		
		$message .= "<tr><td style='padding-left:10px;'><strong>E-mail: </strong>" . $email. "</td></tr>";
		
		$message .= "</table>";
		$message .= "</body></html>";

		if($email){
			$table = 'newsletter';
			$dados = array('email'=> $email);
			$wpdb->insert( $table, $dados, $format );
			
			// if(wp_mail( $to, $subject,  $message, $headers)){
				
				$teste_slider = "<input type='hidden' id='enviado_slider' />";
				$message_slider = "Seu e-mail foi enviado com sucesso!";
			// }
		}
	}

?>

<section class="bg_newslatter">
	<div class="container-fluid newsletter">
		<div class="simbolo">
			<img src="<?php bloginfo('template_url'); ?>/img/simbolo_mail_newsletter.png" alt="">
		</div>
		<div class="titulo col-md-12">
			<h1>Deseja receber notícias e informações?</h1>
			<div class="traco">
				<hr>
			</div>
		</div>
		<div class="subtitulo col-md-12">
			<p>Fique por dentro de notícias, dicas e informações, em primeira mão sobre imóveis e oportunidades imperdíveis para você!</p>
		</div>
		<div class="form col-md-12">
			<form action="" method="POST" accept-charset="utf-8">
				<input type="text" name="mail_newslatter" class="input_newsletter" placeholder="Insira o seu e-mail aqui!" required="required">
				<button type="submit" name="enviar_newaletter">Enviar</button>
			</form>
			<?php if(isset($teste_slider)){
				echo $teste_slider;
			} ?>
		</div>
	</div>	
</section>

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
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>