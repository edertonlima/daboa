<?php get_header(); ?>
<?php 
	$current_category = get_queried_object();
	$cor_category = get_field('cor_categoria', $current_category->taxonomy.'_'.$current_category->term_id);
?>

	<section class="box-content box-slide no-padding-bottom"> 
		
		<?php include 'slide.php'; ?>

		<h2 class="center title-solo-bottom" style="background-color: <?php echo $cor_category; ?>">
			<span><?php echo $current_category->name; ?></span>
		</h2>

	</section>

	<section class="box-content no-padding">
		<div class="container">	
			<div class="breadcrumbs">
				<ul>
					<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
					<li><a href="<?php echo get_permalink(get_page_by_path('produtos')); ?>" title="Produtos">Produtos</a></li>
					<li><?php echo $current_category->name; ?></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="box-content no-padding list-prod">
		<div class="container">
			<div class="row">
				<?php
					while ( have_posts() ) : the_post(); ?>

						<div class="col-4">
							
							<div class="carousel-itens-produtos owl-carousel owl-theme owl-loaded bg-cinza">
								<div class="owl-stage-outer">
									<div class="owl-stage">

										<div class="owl-item">
											<a href="<?php the_permalink(); ?>" class="">

												<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($prod_categoria->ID), '' );
													if($imagem[0]){ ?>

														<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>">

													<?php } ?>

												<h4 style="color: <?php echo $cor_category; ?>"><?php the_title(); ?></h4>
											</a>
										</div>

									</div>
								</div>
							</div>

						</div>

					<?php endwhile;
				?>

				<?php paginacao(); ?>
			</div>
		</div>
	</section>

			<?php			/*$receitas = get_posts(
							array(
								'post_type' => 'receitas',
								'category__in' => $current_category->term_id,
								'posts_per_page' => 10
							)
						);

						var_dump($receitas);

						if($receitas){ 
							foreach ($receitas as $key => $receita) {
								var_dump($receita);
							}
						}*/
					?>

	<section class="box-content no-padding padding-bottom-100 list-receita">
		<h2 class="center bg-cor2 tit-slide-receita">RECEITAS</h2>
		<div class="carousel-itens owl-carousel owl-theme owl-loaded owl-nav-off">
			<div class="owl-stage-outer">
				<div class="owl-stage">

					<?php
						$receitas_list = array(
								'posts_per_page' => 10,
								'post_type' => 'receitas'
							);
						query_posts( $receitas_list );

						if(have_posts()){ 
							while ( have_posts() ) : the_post();
								$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'wide' );

								$categorias_produto = get_field('categoria_receita_produto');

								foreach ($categorias_produto as $key => $cat_produto) {
									if($cat_produto->term_id == $current_category->term_id){ ?>

										<div class="owl-item">
											<a href="<?php the_permalink(); ?>" class="bloco-img" style="background-image: url('<?php if($imagem[0]){ echo $imagem[0]; } ?>');" title="<?php the_title(); ?>">
												<div class="mask-item vertical-center">
													<span class="content-vertical">
														<span class="tit-receita"><?php the_title(); ?></span>
													</span>
												</div>
											</a>
										</div>

									<?php }
									}							
							endwhile;
							wp_reset_query();
						}
					?>

				</div>
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
			}
		}
	})

	$('.carousel-list-category').owlCarousel({
		loop:false,
		margin:10,
		responsiveClass:true,
		nav:true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:2,
				nav:true
			},
			350:{
				items:3,
				nav:true
			},
			540:{
				items:4,
				nav:true
			},
			640:{
				items:6,
				nav:true
			},
			740:{
				items:8,
				nav:true
			}
		}
	})
</script>