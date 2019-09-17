<?php get_header(); ?>

		<div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li>Servicios</li>
			</ul>
		</div>

	<section class="box-content"> 
		<div class="container">

			<h2 class="center"><span>PARA QUÉ SIRVE UN OLEODUCTO</span></h2>
			<p class="sub-tituto center">¿Sabes cómo funciona un oleoducto?</p>

		</div>
	</section>

	<section class="box-content"> 
		<div class="container">

			<div class="iframe-video">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-servicios.jpg" >
			</div>

		</div>
	</section>

	<section class="box-content"> 
		<div class="container">

			<h2 class="center"><span>CÓNUESTROS SERVICIOS</span></h2>
			<p class="sub-tituto center">Conozca y entienda nuestros servicios y procesos.</p>

			<div class="link-mais margin-top-20 center">
				<a href="#" title="Catalogo de servicios" class="link cor3">
					<i class="fas fa-arrow-circle-down cor3"></i> Catalogo de servicios
				</a>
			</div>

		</div>
	</section>

	<section class="box-content"> 
		<div class="container">

			<div class="row">

				<?php if(have_posts()){ 
					while ( have_posts() ) : the_post(); ?>

						<div class="col-4">
							<div class="list-servicios bg-cinza center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-servico.png">
								<h4><?php the_title(); ?></h4>

								<div class="link-mais">
									<a href="javascript:" title="Conoce más" class="link cor1">
										<i class="fas fa-plus-circle"></i> Conoce más
									</a>
								</div>
							</div>
						</div>

					<?php endwhile;
				}else{ ?>

					<p class="text-destaque center"><br><br>No se encontraron proyectos</p>

				<?php } ?>

			</div>

		</div>
	</section>

<?php get_footer(); ?>