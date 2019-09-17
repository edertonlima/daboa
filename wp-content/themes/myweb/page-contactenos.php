<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li>Contactenos</li>
			</ul>
		</div>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>CONTACTO</span></h2>

						<ul class="list-category contacto">
							<li class="">
								<a href="<?php echo get_permalink(get_page_by_path('contactenos')); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato-general.png" align="">
									<span class="">General</span>
								</a>
							</li>
							<li class="<?php //if($category->term_id != 3): echo 'off'; endif; ?>">
								<a href="<?php  ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato-comunidad.png" align="">
									<span class="">Comunidad</span>
								</a>
							</li>
							<li class="<?php //if($category->term_id != 3): echo 'off'; endif; ?>">
								<a href="<?php  ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato-trabaje.png" align="">
									<span class="">Trabaje con nosostros</span>
								</a>
							</li>
							<li class="<?php //if($category->term_id != 4): echo 'off'; endif; ?>">
								<a href="<?php  ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato-registro.png" align="">
									<span class="">Registro proveedores</span>
								</a>
							</li>
							<li class="<?php //if($category->term_id != 5): echo 'off'; endif; ?>">
								<a href="<?php  ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato-facturacion.png" align="">
									<span class="">Facturación Electrónica</span>
								</a>
							</li>
						</ul>

					</div>
				</div>

			</div>
		</section>

		<section class="box-content bg-cinza"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<ul class="list-category rede-social">
							<li class="">
								<a href="https://www.facebook.com/ocpecuadorsa " title=""><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="<?php //if($category->term_id != 3): echo 'off'; endif; ?>">
								<a href="https://www.youtube.com/user/ocpecuador" title=""><i class="fab fa-youtube"></i></a>
							</li>
							<li class="<?php //if($category->term_id != 3): echo 'off'; endif; ?>">
								<a href="<?php echo get_home_url(); ?>" title=""><i class="fab fa-twitter"></i></a>
							</li>
						</ul>

					</div>
				</div>

			</div>
		</section>

		<section class="box-content"> 
			<div class="container">

				<div class="row">
					<div class="col-12">

						<h2 class="center"><span>CONTACTO</span></h2>
						<p class="text-destaque justify">Si desea ofertar sus servicios o productos haga en <a href="#" class="link cor3">registro de proveedores.</a> Si desea registrar su hoja de vida haga en <a href="#" class="link cor3">trabaje con nosotros.</a> Para cualquier otro asunto, llene el siguiente formulario:</p>

						<form class="contacto">
							<fieldset>
								<label>Nombre*</label>
								<input type="text" name="">
							</fieldset>	
							<fieldset>
								<label>Teléfono*</label>
								<input type="text" name="">
							</fieldset>	
							<fieldset>
								<label>Dirección*</label>
								<input type="text" name="">
							</fieldset>	
							<fieldset>
								<label>Correo electrónico*</label>
								<input type="text" name="">
							</fieldset>	
							<fieldset>
								<label>Mensaje*</label>
								<textarea></textarea>
							</fieldset>	
							<fieldset>
								<button class="button enviar">Enviar <i class="fas fa-chevron-right"></i></button>
							</fieldset>	
						</form>


					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>