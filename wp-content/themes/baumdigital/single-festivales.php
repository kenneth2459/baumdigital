<?php get_header(); ?>
<?php
$post_objects = get_field('relacion_eventos');
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="padding-bottom-lg padding-top-lg"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<?php if( $post_objects ): ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php foreach( $post_objects as $post):?>
						<h3 class="title-evento">
							<?php the_title(); ?>
						</h3>
						<hr />
							<?php //the_field('relacion_eventos'); ?>
							<div class="datos padding-bottom-lg padding-top-lg">
								<div class="row">
									<div class="col-md-4">Fecha de evento: <?php the_field('fecha_del_evento'); ?></div>
									<div class="col-md-4">Hora Inicio: <?php the_field('hora_de_inicio'); ?></div>
									<div class="col-md-4">Hora Final: <?php the_field('hora_final'); ?></div>
								</div>
								<div class="row">
									<div class="col-md-12 padding-bottom-lg padding-top-lg">
										<a type="button" href="<?php the_permalink(); ?>" class="btn btn-info btn-lg font-white">Ver festival</a>
									</div>
								</div>
							</div>
					<?php endforeach; ?>
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