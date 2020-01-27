<?php get_header(); ?>
<section>
	<div class="contianer">
		<div class="row">
			<div class="col-md-12">
				<?php while(have_posts()) : the_post() ?> 
					<h1 class="artista-name padding-bottom-lg padding-top-lg"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<div class="datos padding-bottom-lg padding-top-lg">
						<div class="row">
							<div class="col-md-4">Correo: <?php the_field('correo_electrónico'); ?></div>
							<div class="col-md-4">Teléfono: <?php the_field('telefono'); ?></div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
