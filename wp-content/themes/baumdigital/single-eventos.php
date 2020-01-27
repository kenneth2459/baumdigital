<?php get_header(); ?>
<?php
$post_objects = get_field('relacion_con_artistas');
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
<?php $a=count($post_objects); ?>
<?php if( $post_objects ): ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $c = 0 ; ?>
					<?php foreach( $post_objects as $post):?>
						<?php $c++; ?>
						<?php if ($c==$a){ ?>
						<h3 class="title-evento-<?php echo $c ?>">
							<?php the_title(); ?>
						</h3>
						<hr />
							<?php //the_field('relacion_eventos'); ?>
							<div class="datos padding-bottom-lg padding-top-lg">
								<div class="row">
									<div class="col-md-4">correo: <?php the_field('correo_electronico'); ?></div>
									<div class="col-md-4">telefono: <?php the_field('telefono'); ?></div>
									<div class="col-md-4">descripcion: <?php //the_content();?></div>
								</div>
							</div>
					<?php } ?>
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