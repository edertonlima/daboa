<nav class="nav nav-principal">
	
		<ul>
			<li>
				<h1>
					<a href="<?php echo get_home_url(); ?>" title="<?php //the_field('titulo', 'option'); ?>">
						<img src="<?php //the_field('logo_header', 'option'); ?><?php echo get_template_directory_uri(); ?>/assets/images/daboa.png" alt="<?php //the_field('titulo', 'option'); ?>">
					</a>
				</h1>
			</li>
			
			<li class="<?php if ( is_front_page() ) : echo 'ativo'; endif ?>">
				<a href="<?php echo get_home_url(); ?>" title="">HOME</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('quienes-somos')); ?>" title="" class="<?php if ( is_page('quienes-somos') ) : echo 'ativo'; endif ?>">SOBRE NÓS</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('nuestra-historia')); ?>" title="" class="<?php if ( is_page('nuestra-historia') ) : echo 'ativo'; endif ?>">PRODUTOS</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('funcionamiento')); ?>" title="" class="<?php if ( is_page('funcionamiento') ) : echo 'ativo'; endif ?>">RECEITAS</a>
			</li>

			<li class="">
				<a href="<?php echo get_home_url(); ?>/servicios" title="" class="<?php if ( is_post_type_archive('servicios') ) : echo 'ativo'; endif ?>">SERVICIOS</a>
			</li>

			<li class="">
				<a href="<?php echo get_permalink(get_page_by_path('aporte-a-la-sociedad')); ?>" title="" class="<?php if ( is_page('aporte-a-la-sociedad') ) : echo 'ativo'; endif ?>">CONTATO</a>
			</li>
		</ul>
</nav>