
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-5">

					<h1>
						<a href="<?php echo get_home_url(); ?>" title="<?php //the_field('titulo', 'option'); ?>">
							<img src="<?php //the_field('logo_header', 'option'); ?><?php echo get_template_directory_uri(); ?>/assets/images/daboa.png" alt="<?php //the_field('titulo', 'option'); ?>">
						</a>
					</h1>

					<h4>Sobre Nós</h4>
					<p class="sobre">“Nossa missão é alcançar a liderança de mercado no segmento de massas frescas em Santa Catarina sendo referência pela qualidade de nossos produtos e pelo aprimoramento contínuo de nossos serviços".</p>

				</div>

				<div class="col-4">
					<nav class="nav nav-footer">
						<ul>
							<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('sobre-nos')); ?>" title="">Sobre Nós</a></li>
							<li>
								<a href="#" title="">Produtos</a>
								<ul>
									<li><a href="#" title="">Pão de Alho</a></li>
									<li><a href="#" title="">Massas para Lasanha</a></li>
								</ul>
							</li>
							<li><a href="#" title="">Receitas</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('contato')); ?>" title="">Contato</a></li>
						</ul>
					</nav>
				</div>

				<div class="col-3 center">
					<h4>Contato</h4>

					<div class="contato-item">
						<span>Fones:</span><h4>(48) 3432.3196</h4>
						<span></span><h4 class="tel-2">(48) 9981.45736</h4>
					</div>

					<div class="contato-item">
						<span>SAC:</span><h4>0800 646 1416</h4>
					</div>

					<div class="contato-item mini">
						<span>Email:</span><a href="mailto:comercial@massasdaboa.com.br" title="comercial@massasdaboa.com.br"><h4>comercial@massasdaboa.com.br</h4></a>
					</div>

					<div class="redes-sociais">
						<span>Siga-nos nas redes sociais<span> e acompanhe as novidades</span>!</span>
						<a href="https://www.facebook.com/ocpecuadorsa " title=""><i class="fab fa-facebook-f"></i></a>
						<a href="<?php echo get_home_url(); ?>" title=""><i class="fab fa-instagram"></i></a>
					</div>
				</div>

				<p class="copy center"><strong>MDB Indústria Alimentiícia LTDA </strong>Rod. Lino Zanolli, nº 90, Distrito Ind., B. Aurora, Içara, SC</p>
			</div>
		</div>
	</div>	

	<?php wp_footer(); ?>

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){	

			$('.menu-mobile').click(function(){
				if($(this).hasClass('ativo')){
					$('.nav-principal ul').css('top','-100vh');
					$(this).removeClass('ativo');
					$('.header').removeClass('ativo');
				}else{
					$('.nav-principal ul').css('top','0px');
					$(this).addClass('ativo');
					$('.header').addClass('ativo');
				}
			});

		});


		$(window).scroll(function(){
			scroll_body = $(window).scrollTop();
			if(scroll_body > 10){
				$('body').addClass('scroll_body');
				$('.header').addClass('scroll_menu');
			}else{
				$('body').removeClass('scroll_body');
				$('.header').removeClass('scroll_menu');
			}
		});
	</script>

</body>
</html>