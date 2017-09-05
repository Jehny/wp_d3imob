<?php
	if(isset($_POST['submit'])){

			$to = 'd3imob@gmail.com';
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$tel = $_POST['telefone'];
			$subject = "Contato D3imob - ". $_POST['assunto'];
			$headers = "MIME-Version: 1.1 \r\n";
			$headers .= "Content-type: text/html; charset=utf-8 \r\n";
			$message = "<html><body>";
			$message .= "<table style='border:1px solid #BD3F4B;width:97%;'>";
			$message .= "<tr><td style='text-align:left;padding-left:10px;padding-top:20px;'><img src='http://www.d3imob.com.br/wp-content/themes/cgf/img/logo.png' alt='D3imob' width=200></td></tr>";
			$message .= "<tr><td style='padding-left:10px;padding-top:20px;padding-bottom:20px;'>Segue os dados de contato: </td></tr>";
			$message .= "<tr><td style='padding-left:10px;'><strong>Assunto: </strong>" . $_POST['assunto']. "</td></tr>";
			$message .= "<tr><td style='padding-left:10px;'><strong>Nome: </strong>" . $nome . "</td></tr>";
			$message .= "<tr><td style='padding-left:10px;'><strong>E-mail: </strong>" . $email. "</td></tr>";
			$message .= "<tr><td style='padding-left:10px;'><strong>Telefone: </strong>" . $tel. "</td></tr>";
			$message .= "<tr><td style='padding-left:10px;padding-bottom:30px;'><strong>Mensagem: </strong>" . $_POST['mensagem']. "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

			if($email != "" && $message != "" && $nome != ""){
				
				// if(wp_mail( $to, $subject,  $message, $headers)){
					$teste = "<input type='hidden' id='enviado' />";
					$message = "Seu e-mail foi enviado com sucesso!";
				// }
			}
		}
?>

<?php 
	$c = get_page_by_title( 'Fale Conosco' );
	$localizacao = get_field('localizacao', $c->ID);
	$telefone = get_field('telefone', $c->ID);
	$fax = get_field('fax', $c->ID);
	$email = get_field('email', $c->ID);
	$horario_de_atendimento = get_field('horario_de_atendimento', $c->ID);
	
?>

<div class="bg_body">
	<div class="breadcrumb_custom">
		<ul>
			<li>Home</li>
			<li>Contato</li>
		</ul>
	</div>
	<section class="container-fluid" id="contato">
		
		<h2>Nesta página você poderá solicitar informações, sugerir e opinar sobre o nosso site.  Estamos aqui para ajudar.</h2>
		<div class="row-fluid" id="form_contato">
			<form action="" method="POST">
				<div class="col-md-12">
					<div class="linh_form">
						<label>Nome*</label>
						<input type="text" name="nome" required>
					</div>
					<div class="linh_form">
						<label>E-mail*</label>
						<input type="email" name="email" required>
					</div>
					<div class="linh_form">
						<label>Telefone</label>
						<input type="tel" name="telefone" id="telefone" class="phone" maxlength="15">
					</div>
				</div>
				<div class="col-md-12">
					<div class="linh_form_m">
						<label>Qual o motivo do seu contato?*</label>
						<input type="text" name="assunto" required>
					</div>
					<div class="linh_form">
						<label>Mensagem*</label>
						<textarea name="mensagem" cols="30" rows="8" required></textarea> 
					</div>
				</div>
				<div class="div_btn row-fluid">
					<button class="btn btn-vermelho" type="submit" name="submit">Enviar</button>
				</div>
			</form>
			<?php if(isset($teste)){
				echo $teste;
				} ?>
		</div>
	</section>
	
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sucesso!</h4>
      </div>
      <div class="modal-body">
        <?php if(isset($message)){ echo $message; } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
