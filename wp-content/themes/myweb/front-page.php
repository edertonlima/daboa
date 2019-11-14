<?php get_header(); ?>

<!-- slide --> 
<section class="box-content box-slide"> 
	<?php include 'slide.php'; ?>
</section>

<?php
	$receitas_list = array(
			'posts_per_page' => 10,
			'post_type' => 'receitas'
		);
	query_posts( $receitas_list );

	if(have_posts()){ 
		$imagem_receita = get_field('imagem_bloco_principal_receitas','option'); ?>

		<section class="box-content list-receita">
			<div class="bloco-img title-top" style="background-image: url('<?php echo $imagem_receita['sizes']['wide']; ?>');">
				<a href="<?php echo get_home_url(); ?>/receitas"><h2 class="center bg-cor2">RECEITAS</h2></a>
			</div>

			<div class="container mobile-750px-hide">
				<h3 class="center uppercase"><strong class="cor2">EXPLORE</strong> nossas receitas e descubra sabores sem igual!</h3>
					
				<div class="carousel-itens owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<?php while ( have_posts() ) : the_post(); ?>
								<div class="owl-item">
									<?php get_template_part( 'content-receita', get_post_format() ); ?>
								</div>
							<?php endwhile;
							wp_reset_query(); ?>
								
						</div>
					</div>
				</div>	
			</div>
		</section>

	<?php }
?>

<section class="box-content list-linha-prod">
	<?php $imagem_produtos = get_field('imagem_bloco_principal_produtos','option'); ?>

	<div class="bloco-img title-top" style="background-image: url('<?php echo $imagem_produtos['sizes']['wide']; ?>');">
		<a href="<?php echo get_home_url(); ?>/produtos">
			<h2 class="title-mini center bg-cor3 mobile-750px-hide">LINHA DE PRODUTOS</h2>
			<h2 class="title-mini center bg-cor3 mobile-750px-show">PRODUTOS</h2>
		</a>
	</div>

	<div class="container mobile-750px-hide">
		<a href="<?php echo get_home_url(); ?>/produtos">
			<h3 class="center uppercase">Conheça nossa <strong class="cor3">LINHA COMPLETA</strong> de produtos daBoa!</h3>
		</a>

		<div class="row">
			<?php 
				$category = get_terms( array(
				    'taxonomy' => 'category',
				    'hide_empty' => false
				) );

				shuffle( $category );
				$qtd_linha = 0;

				if($category){ 
					foreach ($category as $key => $categoria) { //print_r($categoria);
						$qtd_linha = $qtd_linha+1; 
						if ($qtd_linha <= 2) { ?>
						 	
							<div class="col-6">
								
								<div class="carousel-itens-produtos owl-carousel owl-theme owl-loaded bg-cinza">
									<div class="owl-stage-outer">
										<div class="owl-stage">
											<?php
												$prods_categoria = get_posts(
													array(
														'post_type' => 'post',
														'category__in' => $categoria->term_id,
														'posts_per_page' => -1
													)
												);

												foreach ( $prods_categoria as $prod_categoria ) { 
													$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($prod_categoria->ID), '' ); 
													if($imagem[0]){ ?>
														<div class="owl-item">
															<a href="<?php echo get_term_link($categoria->term_id); ?>" class="hover-prod">
																<div class="vertical-center">
																	<div class="content-vertical">
																		<img src="<?php echo $imagem[0]; ?>">
																	</div>
																</div>
															</a>
														</div>
													<?php }
												}
											?>
										</div>
									</div>
								</div>

								<a href="<?php echo get_term_link($categoria->term_id); ?>">
									<h2 class="full center" style="background-color: <?php the_field('cor_categoria', $categoria->taxonomy.'_'.$categoria->term_id); ?>"><span><?php echo $categoria->name; ?></span></h2>
								</a>

							</div>

						<?php }
					}
				}
			?>
		</div>		
	</div>
</section>

<section class="box-content">
	<div class="container container-mobile">

		<?php
			$imagem = wp_get_attachment_image_src( get_post_thumbnail_id(get_page_by_path('contato')), 'detalhe-post-page' ); 
		?>

		<div class="bloco-img grande title-bottom block-img-hide" style="background-image: url('<?php if($imagem[0]){ echo $imagem[0]; } ?>');">
			<h2 class="center bg-cor5">FALE CONOSCO</h2>
		</div>

		<h3 class="mobile-750px-hide center">Dúvidas ou sugestões, entre em <strong class="cor5">CONTATO</strong> preenchendo esse formulário, ou fale conosco via telefone ou e-mail.</h3>
		<h3 class="mobile-750px-show center">Dúvidas ou sugestões, entre em contato:</h3>

		<div class="content form">
			<form class="fale-conosco">
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
							<button class="enviar">ENVIAR</button>
						</fieldset>
					</div>
				</div>
			</form>
		</div>

	</div>
</section>


<?php get_footer(); ?>

<!-- CAROUSEL -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">
	$('.carousel-itens').owlCarousel({
		loop:true,
		margin:40,
		responsiveClass:true,
		nav:true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:2,
				nav:true,
				loop:false
			}
		}
	})

	$('.carousel-itens-produtos').owlCarousel({
		loop:true,
		margin:0,
		responsiveClass:true,
		nav:true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:1,
				nav:true,
				loop:false
			}
		}
	})

	// centraliza
	/*
	var qtddot = $('.owl-dots').children().length;
	qtddot = (((qtddot*22)/2)+10)+'px';
	$('.owl-prev').css('margin-right',qtddot);
	$('.owl-next').css('margin-left',qtddot);
	*/
</script>






















<?php /*

<section class="box-content box-content-blog">
	<span id="continue_sonhando" class="link_page_ancora"></span>
	<div class="container">

		<p class="sub-tituto borda-efeito">Nós tiramos do papel sua ideia e concretizamos seus sonhos</p>

		<?php if( have_rows('ico_page_superior') ): ?>
			<ul class="ico-page">
				<?php while ( have_rows('ico_page_superior') ) : the_row(); ?>

					<li>
						<img src="<?php the_sub_field('icone'); ?>" class="" alt="<?php the_sub_field('titulo'); ?>"/>
						<span><?php the_sub_field('titulo'); ?></span>
					</li>

				<?php endwhile; ?>
			</ul>
		<?php endif; ?>	

		<?php
			$prod_list = get_posts(
				array(
					'posts_per_page' => 5,
					'post_type' => 'projetos'
				)
			);

			if(count($prod_list) > 0){ ?>
				<div class="grid">
					<div class="grid-sizer"></div>

					<?php foreach ( $prod_list as $produto ) { $terms = wp_get_post_terms( $produto->ID, 'categoria_projeto' ); ?>

						<div class="grid-item">
							<div class="">
								<a href="<?php the_permalink($produto->ID); ?>" title="<?php echo $produto->post_title; ?>">
									<article class="item">

										<img src="<?php the_field('imagem_listagem', $produto->ID); ?>" class="img-grid" alt="<?php echo $produto->post_title; ?>"/>

										<div class="hover-grid">
											<div class="cont-hover">
												<img src="<?php the_field('ico_listagem',$terms[0]->taxonomy.'_'.$terms[0]->term_id); ?>" class="" alt=""/>
												<span><?php echo $produto->post_title; ?></span>
												<?php echo $terms[0]->name; ?>
											</div>
										</div>
									</article>
								</a>
							</div>
						</div>

					<?php } ?>

				</div>
			<?php }
		?>		

		<p class="sub-tituto borda-efeito">Trabalhamos para transformar ideias em serviços e produtos referências em seu segmento.</p>
		
		<?php if( have_rows('ico_page_inferior') ): ?>
			<ul class="ico-page ico-page-inferior">
				<?php while ( have_rows('ico_page_inferior') ) : the_row(); ?>

					<li>
						<img src="<?php the_sub_field('icone'); ?>" class="" alt="<?php the_sub_field('titulo'); ?>"/>
						<span><?php the_sub_field('titulo'); ?></span>
					</li>

				<?php endwhile; ?>
			</ul>
		<?php endif; ?>	
	
	</div>
</section>

<section class="box-content box-msg" style="background-image: url('<?php the_field('imagem_destaque'); ?>');">
	<div class="box-height">
		<div class="box-texto">
			
			<p class="texto"><?php the_field('texto_destaque'); ?></p>
			<?php if(get_field('sub_texto_destaque')){ ?>
				<p class="sub-texto"><?php the_field('sub_texto_destaque'); ?></p>
			<?php } ?>

		</div>
	</div>
</section>

<section class="box-content box-sobre sombra">
	<div class="container">
		
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_cafe.png" class="ico_cafe" alt=""/>
		<p class="sub-tituto borda-efeito">Trabalhamos para transformar ideias em serviços e produtos referências em seu segmento.</p>
		<a href="#" class="button" title="Quero Agendar">Quero Agendar</a>

		<p class="sub-tituto sub-titulo-icone borda-efeito">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_news.png" class="" alt=""/>
			Newsletter
		</p>

		<form class="news" action="javascript:">
			<input type="text" name="email_news" placeholder="Escreva seu email aqui...">
			<button class="news"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/button_news.png" class="" alt=""/></button>
		</form>

	</div>
</section>



<script type="text/javascript">
	jQuery(document).ready(function(){	    

		// FORM
		jQuery(".enviar").click(function(){
			jQuery('.enviar').html('ENVIANDO').prop( "disabled", true );
			jQuery('.msg-form').removeClass('erro ok').html('');
			var nome = jQuery('#nome').val();
			var email = jQuery('#email').val();
			var telefone = jQuery('#telefone').val();
			var assunto = jQuery('#assunto').val();
			var mensagem = jQuery('#texto').val();
			var para = '<?php get_field('email', 'option'); ?>';
			var nome_site = '<?php get_field('titulo', 'option'); ?>';

			if(email!=''){
				jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, telefone:telefone, assunto:assunto, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
					if(result=='ok'){
						resultado = 'Enviado com sucesso! Obrigado.';
						classe = 'ok';
					}else{
						resultado = result;
						classe = 'erro';
					}
					jQuery('.msg-form').addClass(classe).html(resultado);
					jQuery('form').trigger("reset");
					jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
				});
			}else{
				jQuery('.msg-form').addClass('erro').html('Por favor, digite um e-mail válido.');
				jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
			}
		});
		
	});

	jQuery(window).load(function(){
		jQuery('.grid-item').each(function(){
			jQuery('.hover-grid',this).height(jQuery(this).height());
		});
	});

	jQuery(window).resize(function(){
		jQuery('.grid-item').each(function(){
			jQuery('.hover-grid',this).height(jQuery(this).height());
		});
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.pkgd.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.js" type="text/javascript"></script>
<script type="text/javascript">
	var $grid = jQuery('.grid').masonry({
		itemSelector: '.grid-item',
		percentPosition: true,
		columnWidth: '.grid-sizer'
	});
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
		$grid.masonry();
	});  
</script>

*/ ?>