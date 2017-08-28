<?php
	include "layout/header_2.php";

?>
<div class="bg_body">

	<div class="row-fluid">
		<section class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12">

			<?php if (have_posts()) {
					 // while (have_posts()) {
			?>
					<div class="post">
						<div class="titulo row-fluid">
							<div class="nome">
								<h1> <?php echo the_title(); ?> </h1>
								<p>Posted by: <?php the_author(); ?> - <?php the_time('d/m/Y'); ?></p>
							</div>
						</div>
						<div class="corpo">
														
							<div class="resumo" ><?php the_content(); ?></div>
							
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
	include "layout/footer.php";
?>