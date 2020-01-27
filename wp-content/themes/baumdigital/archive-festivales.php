<?php get_header(); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title-festivales padding-top-lg padding-bottom-lg">Todos los festivales</h1>
				</div>
				<div class="col-md-12">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<h3 class="title-festival">
							<?php the_title(); ?>
						</h3>
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
							<hr />
							<p class="padding-bottom-md padding-top-md">
								<a type="button" href="<?php the_permalink(); ?>" class="btn btn-info btn-lg font-white">Ver festival</a>
							</p>
					<?php endwhile; ?>
					<?php else: ?>
						<h1 class="no-post">
							No hay entradas
						</h1>
						<p class="padding-top-lg padding-bottom-lg">
							No existen entradas en esta seccion
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>