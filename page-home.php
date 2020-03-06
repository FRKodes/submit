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
				<li><a data-activate="more-projects-todo" class="active" href="javascript: void(0)">TODO</a></li>
				<li><a data-activate="more-projects-branding" href="javascript: void(0)">BRANDING</a></li>
				<li><a data-activate="more-projects-diseno" href="javascript: void(0)">DISEÑO GRÁFICO</a></li>
				<li><a data-activate="more-projects-audiovisual" href="javascript: void(0)">AUDIOVISUALES</a></li>
				<li><a data-activate="more-projects-mkt" href="javascript: void(0)">MKT DIGITAL</a></li>
				<li><a data-activate="more-projects-rp" href="javascript: void(0)">RRPP</a></li>
				<li><a data-activate="more-projects-web" href="javascript: void(0)">DISEÑO WEB</a></li>
			</ul>
		</div>
	</div>

	<?php include 'partials/block-projects-all.php'; ?>
	<?php include 'partials/block-projects-web.php'; ?>
	<?php include 'partials/block-projects-diseno.php'; ?>
	<?php include 'partials/block-projects-rp.php'; ?>
	<?php include 'partials/block-projects-audiovisual.php'; ?>
	<?php include 'partials/block-projects-branding.php'; ?>
	<?php include 'partials/block-projects-mkt.php'; ?>
	
</div>

<div class="container" id="contact-block">
	<div class="row">
		<div class="col-xs-12 col-md-10 mr-auto ml-auto mt-50 text-center">
			<h2 class="title-contact bold">¿QUIERES SABER MÁS DE NOSOTROS?</h2>
			<p class="fira">LET’S BUILD SOMETHING AMAZING TOGETHER</p>
		</div>
	</div>

	<form action="/sendmail" method="post" class="mt-30 mb-50" id="contactForm">
		<div class="row">	
			<div class="col-xs-12 col-md-4 col-lg-3 ml-auto">
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="Nombre" data-validate="required">
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Correo Electrónico" data-validate="required|email">
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3 mr-auto">
				<div class="form-group">
					<input type="text" name="asunto" class="form-control" placeholder="Asunto" data-validate="required">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-9 ml-auto mr-auto">
				<div class="text-danger">Los datos con * son obligatorios</div>
				<div class="form-group">
					<textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="10" placeholder="Escribe tu Mensaje"></textarea data-validate="required">
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn-enviar-mail fira" value="ENVIAR">
					<div class="sent_mail_alert text-center">
						<p>
							<b>¡Gracias!</b><br>
							Tu correo ha sido enviado correctamente, nos pondremos en contacto contigo a la brevedad.
						</p>
					</div>
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