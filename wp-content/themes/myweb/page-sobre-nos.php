<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="box-content no-padding-top">			
			<div class="bloco-img grande title-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-tit-sobrenos.jpg');">
				<h2 class="center bg-cor6">SOBRE NÓS</h2>
			</div>

			<div class="container">	
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
						<li>Sobre Nós</li>
					</ul>
				</div>

				<div class="content sobre">
					<p>Nomeada pelos próprios clientes em reconhecimento a qualidade de seus produtos surge a empresa "Massas Da Boa", inicialmente voltada à produção de massa para pastel. Atualmente trabalhamos com uma pauta variada de produtos e temos este reconhecimento expandido a todo estado de Santa Catarina e parte do Paraná através de uma equipe de vendedores diretos e veículos próprios refrigerados.</p>

					<p>Somos uma das maiores empresas de massas frescas de Santa Catarina tendo alcançado este lugar pela atenção constante a qualidade de nossos produtos e por um relacionamento próximo de nossos clientes.</p>

					<p class="destaque"><span>"Alcançar a liderança de mercado no segmento de massas frescas em Santa Catarina sendo referência pela qualidade de nossos produtos e pelo aprimoramento contínuo de nossos serviços"</span></p>
			</div>
		</section>

		<section class="box-content">
			<div class="container container-mobile">	
				<div class="bloco-img grande title-top block-img-hide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-tit-parceiro.jpg');">
					<h2 class="mobile-750px-hide center bg-cor6">SEJA UM PARCEIRO</h2>
					<h2 class="mobile-750px-show center bg-cor6">SEJA PARCEIRO</h2>
				</div>

				<h3 class="mobile-750px-hide center">Dúvidas ou sugestões, entre em <strong class="cor6">CONTATO</strong> preenchendo esse formulário, ou fale conosco via telefone ou e-mail.</h3>
				<h3 class="mobile-750px-show center">Dúvidas ou sugestões, entre em contato:</h3>

				<div class="content form">
					<form class="fale-conosco form-cor6">
						<div class="row">
							<div class="col-6 esq">
								<fieldset>
									<input type="text" name="" placeholder="NOME">
								</fieldset>

								<fieldset>
									<input type="text" name="" placeholder="TELEFONE">
								</fieldset>

								<fieldset>
									<input type="text" name="" placeholder="E-MAIL">
								</fieldset>

								<fieldset>
									<input type="text" name="" placeholder="ASSUNTO">
								</fieldset>
							</div>

							<div class="col-6 dir">
								<fieldset>
									<textarea name="" placeholder="MENSAGEM"></textarea>
								</fieldset>
								<fieldset>
									<button class="enviar">Enviar</button>
								</fieldset>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>