<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="box-content no-padding-top">			
			<div class="bloco-img grande title-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-tit-contato.jpg');">
				<h2 class="center bg-cor5">CONTATO</h2>
			</div>

			<div class="container">	
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
						<li>Contato</li>
					</ul>
				</div>

				<h3 class="center">Dúvidas ou sugestões, entre em <strong class="cor5">CONTATO</strong> preenchendo esse formulário, ou fale conosco via telefone ou e-mail.</h3>

				<div class="content form">
			<form class="fale-conosco row">
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
						<button class="enviar">ENVIAR</button>
					</fieldset>
				</div>
			</form>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>