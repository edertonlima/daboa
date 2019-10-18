<?php get_header(); ?>
<?php $category = get_queried_object(); //var_dump($category); 

	switch ($category->name) {
		case 'Pão de Alho':
			$cor = 'cor4';
			$produto_img = 'paodealho-tradicional.jpg';
			break;

		case 'Massa para Pastel':
			$cor = 'cor7';
			$produto_img = 'massasparapastel-banana.jpg';
			break;

		case 'Massas para Lasanha':
			$cor = 'cor2';
			$produto_img = 'massaparalasanha.jpg';
			break;
		
		default:
			# code...
			break;
	}

?>

	<section class="box-content no-padding-top">			
		<div class="bloco-img grande title-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-tit-massaparapastel.jpg');">
			<h2 class="center bg-<?php echo $cor; ?>"><span><?php echo $category->name; ?></span></h2>
		</div>

		<div class="container">	
			<div class="breadcrumbs">
				<ul>
					<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
					<li><a href="<?php echo get_permalink(get_page_by_path('produtos')); ?>" title="Produtos">Produtos</a></li>
					<li><?php echo $category->name; ?></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="box-content list-prod padding-bottom-60">
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
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $produto_img; ?>">
									<h4 class="<?php echo $cor; ?>"><?php the_title(); ?></h4>
								</a>
							</div>

						</div>
					</div>
				</div>

			</div>

			<div class="col-4">
				
				<div class="carousel-itens-produtos owl-carousel owl-theme owl-loaded bg-cinza">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<div class="owl-item">
								<a href="<?php the_permalink(); ?>" class="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $produto_img; ?>">
									<h4 class="<?php echo $cor; ?>"><?php the_title(); ?></h4>
								</a>
							</div>

						</div>
					</div>
				</div>

			</div>

			<div class="col-4">
				
				<div class="carousel-itens-produtos owl-carousel owl-theme owl-loaded bg-cinza">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<div class="owl-item">
								<a href="<?php the_permalink(); ?>" class="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $produto_img; ?>">
									<h4 class="<?php echo $cor; ?>"><?php the_title(); ?></h4>
								</a>
							</div>

						</div>
					</div>
				</div>

			</div>

						<?php //get_template_part( 'content-receita', get_post_format() );
					endwhile;
				?>

				<?php paginacao(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>







<?php /*
<?php get_header(); ?>

<?php $terms = get_queried_object(); ?>

<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="controle-slide">
			<a class="left" href="#slide" role="button" data-slide="prev"></a>
			<a class="right" href="#slide" role="button" data-slide="next"></a>
		</div>
		<div class="carousel slide" data-ride="carousel" data-interval="1000000" id="slide">

			<div class="carousel-inner" role="listbox"> 

				<?php if( have_rows('slide_categoria',$terms->taxonomy.'_'.$terms->term_id) ):
					$slide = 0;
					while ( have_rows('slide_categoria',$terms->taxonomy.'_'.$terms->term_id) ) : the_row();

							$slide = $slide+1; ?>

							<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>');"></div>

					<?php
					endwhile;
				endif; ?>

			</div>

			<ol class="carousel-indicators">
				
				<?php 
					if($slide > 1){ 
						for($i=0; $i<$slide; $i++){ ?>
							<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
						<?php }
					}
				?>
				
			</ol>

		</div>
	</div>
</section>

<section class="box-content">
	<h2 class="bege"><?php single_term_title(); ?></h2>
	<div class="list-produto">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'content-list-produto', 'post' );

		endwhile;
		?>

	</div>
</section>


<?php get_footer(); ?>
*/ ?>