<?php 
/**
 * 	Template Name: Home Page
*/
get_header(); // This fxn gets the header.php file and renders it ?>
<div class="container">
	
		<div id="primary" class="row">
			<div id="content" role="main" class="span8 col-xs-12 col-md-12">
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<article class="post row">
											
							<div class="the-content container">
							
								<?php the_content(); ?>

								<?php include('partials/hello-services-block.php'); ?>
								
							</div><!-- the-content -->
							
						</article>

					<?php endwhile; ?>

				<?php endif; ?>
			</div><!-- #content .site-content -->

		</div><!-- #primary .content-area -->

</div>

<div class="container-fluid back-blue">
	<div class="row">
		<div class="col-xs-12 col-md-10 ml-auto mr-auto white text-center mt-50 mb-30">	
			<p class="fira">Tu tienes la visión, nosotros la solución.</p>
			<h2 class="job-title">ALGO DE NUESTRO TRABAJO</h2>
			<ul class="services-list">
				<li><a class="active" href="#">TODO</a></li>
				<li><a href="#">DISEÑO WEB</a></li>
				<li><a href="#">DISEÑO GRÁFICO</a></li>
				<li><a href="#">RELACIONES PÚBLICAS</a></li>
				<li><a href="#">FOTOGRAFÍA</a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-10 ml-auto mr-auto portfolio mb-20">
			<div class="block-50 first-one">
				<div class="project" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/prod-audiovisual-1.jpg);"></div>
			</div>
			<div class="block-50 second-one">
				<div class="project _25" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/mkt-1.jpg);"></div>
				<div class="project _25" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/diseno-web-1.jpg);"></div>
				<div class="project _25" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/diseno-grafico-1.png);"></div>
				<div class="project _25" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/branding-1.jpg);"></div>
			</div>
		</div>

		<div class="col-xs-12 col-md-12">
			<p class="text-center">
				<a href="" class="btn-servicios fira">VER MÁS</a> <br><br><br>
			</p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-10 mr-auto ml-auto mt-50 text-center">
			<h2 class="title-contact bold">¿QUIERES TRABAJAR CON NOSOTROS?</h2>
			<p class="fira">CONTÁCTANOS</p>
		</div>
	</div>

	<form action="" method="post" class="mt-30 mb-50">
		<div class="row">	
			<div class="col-xs-12 col-md-4 col-lg-3 ml-auto">
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="Nombre">
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Correo Electrónico">
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3 mr-auto">
				<div class="form-group">
					<input type="text" name="asunto" class="form-control" placeholder="Asunto">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-9 ml-auto mr-auto">
				<div class="form-group">
					<textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="10" placeholder="Escribe tu Mensaje"></textarea>
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn-enviar-mail fira" value="ENVIAR">
				</div>
			</div>
		</div>
	</form>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-12" id="map">
			
		</div>
	</div>
</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>