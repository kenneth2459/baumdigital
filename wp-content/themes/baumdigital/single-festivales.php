<?php get_header(); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<h1 class="title-festival">
							<?php the_title(); ?>
						</h1>
						<hr />
							<?php the_content(); ?>
							<div class="bk-festival">
								<img class="img-fluid" src="<?php the_field('imagen_de_fondo'); ?>" />
							</div>
							<div class="datos padding-bottom-lg padding-top-lg">
								<div class="row">
									<div class="col-md-4">Ubicacion: <?php the_field('ubicacion'); ?></div>
									<div class="col-md-4">Fecha Inicio: <?php the_field('fecha_de_inicio'); ?></div>
									<div class="col-md-4">Fecha Final: <?php the_field('fecha_final'); ?></div>
								</div>
							</div>
					<?php endwhile; ?>
					<?php else: ?>
						<h1 class="no-post">
							No hay entrada
						</h1>
						<p class="padding-top-lg padding-bottom-lg">
							No existen la entrada en esta seccion
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>