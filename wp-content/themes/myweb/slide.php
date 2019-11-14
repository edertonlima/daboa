<div class="slide">

	<div id="slide-home" class="carousel slide" data-ride="carousel" data-interval="8000">

		<div class="carousel-inner">
			<?php 
				if(is_home()){
					$images = get_field('slide_principal',9);
				}else{
					if(is_category()){
						$images = get_field('slide_principal',$current_category->taxonomy.'_'.$current_category->term_id);
					}else{
						if((is_archive()) and (!is_tax())){
							$images = get_field('slide_receitas','option');
						}else{
							if(is_tax()){
								$images = get_field('slide_principal',$current_category->taxonomy.'_'.$current_category->term_id);
							}else{
								$images = get_field('slide_principal');
							}
						}
					}
				}
			$qtd_slide = 0;
			if( $images ): ?>
		        <?php foreach( $images as $image ): //var_dump($image);
		        	?>

		        		<div class="carousel-item<?php if($qtd_slide == 0){ echo ' active'; } ?>" style="background-image: url('<?php echo esc_url($image['sizes']['detalhe-post-page']); ?>');">
		        			
				        	<?php if($image['caption'] != ''){ ?>
				        		<a href="<?php echo $image['caption']; ?>"></a>
				        	<?php } ?>

		        		</div>

		        	<?php $qtd_slide = $qtd_slide+1;
		        endforeach; ?>
			<?php endif; ?>
		</div>

		<ol class="carousel-indicators <?php if((is_category()) or (is_tax())){ echo 'indicators-category'; } ?>">
			<?php for($i=0; $i < $qtd_slide; $i++) { ?>		
				<li data-target="#slide-home" data-slide-to="<?php echo $i; ?>"<?php if($i == 0){ echo ' class="active"'; } ?>></li>
			<?php } ?>				
		</ol>

		<a class="carousel-control-prev" href="#slide-home" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#slide-home" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

</div>