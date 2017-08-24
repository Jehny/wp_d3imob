<?php
	$q = get_page_by_title( 'Time' );
	
	$rita = get_field("nome_rita", $q->ID);
	$foto_rita = get_field('foto_rita', $q->ID);		
	$creci_rita = get_field('creci_rita', $q->ID);
	$telefone_rita = get_field('tel_rita', $q->ID);

	$cris = get_field("nome_cris", $q->ID);
	$foto_cris = get_field('foto_cris', $q->ID);		
	$creci_cris = get_field('creci_cris', $q->ID);
	$telefone_cris = get_field('tel_cris', $q->ID);

	$rogaciano = get_field("nome_rogaciano", $q->ID);
	$foto_rogaciano = get_field('foto_rogaciano', $q->ID);
	$creci_rogaciano = get_field('creci_rogaciano', $q->ID);
	$telefone_rogaciano = get_field('tel_rogaciano', $q->ID);

?>

<div id="time" class="row-fluid time">
	<div class="container-fluid">
		<h1>Não encontra o que você precisa?</h1>
		<div class="traco"><hr></div>
		<div class="subtitulo">
			Entre em contato através do número 85 99749.1539 e fale com um de nossos consultores. Teremos o maior prazer em ajudar na solução do seu problema!
		</div>
	</div>

	<div id="equipe">
		<div class="container-fluid">
			<h3>Entre em contato com nossos consultores!</h3>
			<div class="traco"><hr></div>
			<div class="col-xs-12 col-sm-12 col-md-12 item">
				<div class="col-md-4">
					<p class="foto"><?php echo $foto_rita; ?></p>
					<p class="nome"><?php echo $rita; ?></p>
					<p class="creci"><?php echo $creci_rita; ?></p>
					<p class="tel"><?php echo $telefone_rita; ?></p>
				</div>
				<div class="col-md-4">
					<p class="foto"><?php echo $foto_cris; ?></p>
					<p class="nome"><?php echo $cris; ?></p>
					<p class="creci"><?php echo $creci_cris; ?></p>
					<p class="tel"><?php echo $telefone_cris; ?></p>
				</div>
				<div class="col-md-4">
					<p class="foto"><?php echo $foto_rogaciano; ?></p>
					<p class="nome"><?php echo $rogaciano; ?></p>
					<p class="creci"><?php echo $creci_rogaciano; ?></p>
					<p class="tel"><?php echo $telefone_rogaciano; ?></p>
				</div>
			</div>
		</div>

	</div>
	

</div>