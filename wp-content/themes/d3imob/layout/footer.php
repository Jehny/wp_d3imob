		<div class="boder_gradiente"></div>
		<footer>
			<div class="container-fluid logo_footer">
				<img src="<?php bloginfo('template_url'); ?>/img/logo_footer.png">
			</div>
			<div class="endereco">
				<?php 
					
					if ( dynamic_sidebar('rodape_widgets') ) : else : endif;
				?>
			</div class="endereco">
			<div>
				d3imob copyright: © 2017. All rights reserved.	
			</div>
		</footer>

	</body>
</html>