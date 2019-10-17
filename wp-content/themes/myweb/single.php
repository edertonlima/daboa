<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); 

		$cor = 'cor7';
		$produto_img = 'massaparalasanha.jpg';
		$categorias = wp_get_post_terms( $post->ID, 'category' )[0]; //var_dump($categorias); ?>
			

		<section class="box-content no-padding-top detalhe-prod">			
			<div class="bloco-img grande title-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-tit-pastel.jpg');">
				<h2 class="center bg-<?php echo $cor; ?>"><span><?php the_title(); ?></span></h2>
			</div>

			<div class="container">	
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
						<li><a href="<?php echo get_permalink(get_page_by_path('produtos')); ?>" title="Produtos">Produtos</a></li>
						<li><a href="<?php echo get_term_link($categorias->term_id); ?>" title="<?php echo $categorias->name; ?>"><?php echo $categorias->name; ?></a></li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>

				<div class="row">
					
					<div class="col-6">
						<div class="img-produto">
							<div class="mask-item vertical-center">
								<span class="content-vertical">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/massasparapastel-banana.png">
								</span>
							</div>
						</div>
					</div>
					<div class="col-6 no-padding cont-modo-preparo">
						<div class="modo-preparo">
							<h3 class="cor7">Modo de Preparo: <i class="fas fa-chevron-down cor7" id="toggle-preparo"></i></h3>
							<ul class="item-preparo">
								<li class="bg-cinza">
									<span class="nun-preparo"><span>1</span></span>
									<img class="ico-preparo" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-preparo-1.png">
									<span class="txt-preparo">Retire a massa da embalagem, separe em unidades, retire o filme plástico e recheie.</span>
								</li>

								<li class="bg-cinza">
									<span class="nun-preparo"><span>2</span></span>
									<img class="ico-preparo" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-preparo-2.png">
									<span class="txt-preparo">Em seguida feche o <strong>Pastel Da Boa</strong> (tipo envelope friccionando com um garfo nas extremidades).</span>
								</li>

								<li class="bg-cinza">
									<span class="nun-preparo"><span>3</span></span>
									<img class="ico-preparo" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-preparo-3.png">
									<span class="txt-preparo">Leve para fritar em gordura quente até o ponto dourado, deixe esfriar e sirva.</span>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<div class="row">

					<div class="col-6">
						<div class="img-tabela">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-tabela.jpg">
						</div>
					</div>
					<div class="col-6">
						<div class="content ingredientes">
							<p><strong class="tit-ingredientes">INGREDIENTES:</strong>Farinha de trigo enriquecida com ferro e ácido fólico, gordura animal e vegetal, sal refinado e iodado, lecitina de soja, antioxidantes (E330 e E270), conservante E202.</p>
							<p><strong>CONTÉM GLÚTEN NATURAL DO TRIGO. ALÉRGICOS: CONTÉM FARINHA DE TRIGO, E LECITINA DE SOJA. PODE CONTER TRAÇOS DE OVO.</strong></p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="box-content no-padding list-receita">
			<h2 class="center bg-cor2 tit-slide-receita">RECEITAS</h2>
			<div class="carousel-itens owl-carousel owl-theme owl-loaded owl-nav-off">
				<div class="owl-stage-outer">
					<div class="owl-stage">

						<div class="owl-item">
							<a href="javascript:" class="bloco-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-tit-receitainterna.jpg');">
								<div class="mask-item vertical-center">
									<span class="content-vertical"><span class="tit-receita">Pastel Recheado de Presunto e Tomate</span></span>
								</div>
							</a>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="box-content no-padding-top list-linha-prod padding-footer">
			<div class="container">
				<h3 class="center">Veja outros produtos:</h3>
				<div class="carousel-itens-prod owl-carousel owl-theme owl-loaded owl-dots-off">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<div class="owl-item">
								<a href="<?php echo get_term_link(3); ?>" class="hover-prod">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/massasparapastel-banana.png">
									<h2 class="full center bg-mini det-mini bg-cor7"><span>Massas pastel daboa aniversario 200g</span></h2>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>	




			<?php /* //get_template_part( 'content', get_post_format() ); /* ?>

		</section>

		<!-- NOTÍCIAS SECUNDÁRIA -->
		<section class="box-content no-padding-top">
			<div class="container">
				
				<div class="row">
					<div class="col-m-1 col-10">

						<div class="noticias list-noticias noticias-recentes">

							<h3 class="border mid">
								<span>NOTÍCIAS RECENTES</span>
								<a href="#" class="button pequeno transparent">mais notícias <i class="fas fa-chevron-right"></i></a>
							</h3>

							<div class="row row-mini">

								<?php
									$args_noticias = array(
										'posts_per_page' => 4,
										'post_type' => 'post'
									);

									$current_prod = $post->ID;
									query_posts( $args_noticias );
									$i = 0;
									while ( have_posts() ) : the_post();
										if($current_prod != $post->ID){

											$i++;
											if($i <= 3){
											
												$categorias = wp_get_post_terms( $post->ID, 'category' ); 
												$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'mini-post' ); ?>

												<div class="col-4 item-noticias">
													<div class="img-noticias">
														<?php foreach ( $categorias as $categoria ) { ?>
															<span class="label laranja"><?php echo $categoria->name; ?></span>
														<?php } ?>	
														<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>">
													</div>

													<div class="cont-noticias">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<h2><?php the_title(); ?></h2>
														</a>
														<span class="data"><?php echo get_the_date(); ?></span>
													</div>
												</div>
											
											<?php }

										}
									endwhile;
									wp_reset_query(); 
								?>

							</div>
						</div>

					</div>
				</div>

				

			</div>
		</section>
		<!-- NOTÍCIAS SECUNDÁRIA -->

		<?php */ ?>

	<?php endwhile; ?>

<?php get_footer(); ?>

<!-- CAROUSEL -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">
	if($(window).width() < 981){
		$('#toggle-preparo').click(function(){
			if($(this).hasClass('on')){
				$('.item-preparo').slideUp();
				$(this).removeClass('on');
				$(this).removeClass('fa-flip-vertical');
			}else{
				$('.item-preparo').slideDown('show');
				$(this).addClass('on');
				$(this).addClass('fa-flip-vertical');
			}
		});
	}

	if($(window).width() > 1201){
		height_img = $('.img-produto').height();
		height_preparo = $('.modo-preparo').height();
		if((height_preparo > height_img) && (height_preparo < (height_img*1.5))){
			$('.img-produto').height(height_preparo);
		}
	}

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
			}
		}
	})

	$('.carousel-itens-prod').owlCarousel({
		loop:true,
		margin:15,
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
				nav:true
			},
			1000:{
				items:3,
				nav:true
			}
		}
	})
</script>
