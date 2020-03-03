<?php 
/**
 * 	Template Name: Home Page
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>
	<div id="primary" class="row">
		<div id="content" role="main" class="span8 col-xs-12 col-md-12">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post row">
										
						<div class="the-content container">
						
							<?php the_content(); ?>
							<?php //wp_link_pages(); ?>

							<div class="row middle-aligner">
								
								<div class="col-xs-12 col-md-4 hello">
									<p class="naranja lets-build">LET'S BUILD SOMETHING AWESOMW TOGETHER</p>
									<p class="intro">
										¡Hola! somos <strong>Submit Communication,</strong> una agencia creativa en Guadalajara, <strong>conócenos.</strong>
									</p>
									<p class="mayus desarrollamos fira">
										Desarrolamos estrategias de comunicación para ayudar a conectar a tu negocio con tu mercado meta.
									</p>
									<p class="text-center">
										<a href="" class="btn-servicios fira">CONTÁCTANOS</a>
									</p>
								</div>

								<div class="col-xs-12 col-md-8 services">

									<div class="container">
										<div class="row">
											<div class="col-xs-12 col-md-6 col-lg-4 service">
												<div class="inner-container">
													<div class="title">Mkt Digital</div>
													<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At obcaecati, quia non recusandae quam doloribus quis blanditiis itaque error porro consequatur</div>
													<div class="ver-mas fira"><a href="#">Leer más</a></div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-4 service">
												<div class="inner-container">
													<div class="title">Audiovisuales</div>
													<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, minus dolorum animi tempora dolorem! Quos laborum corporis totam ab.</div>
													<div class="ver-mas fira"><a href="#">Leer más</a></div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-4 service">
												<div class="inner-container">
													<div class="title">RR.PP.</div>
													<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, dolor, rerum. Minus excepturi, consequuntur. Beatae mollitia,</div>
													<div class="ver-mas fira"><a href="#">Leer más</a></div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-4 service">
												<div class="inner-container">
													<div class="title">Branding</div>
													<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ducimus, ea modi error odit fuga repellat harum, in voluptatem deleniti</div>
													<div class="ver-mas fira"><a href="#">Leer más</a></div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-4 service">
												<div class="inner-container">
													<div class="title">Diseño Gráfico</div>
													<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, necessitatibus quas rerum natus nihil repellat quae amet, illo dolore quos</div>
													<div class="ver-mas fira"><a href="#">Leer más</a></div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-4 service">
												<div class="inner-container">
													<div class="title">Diseño Web</div>
													<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ullam minus nihil, quos iusto corporis eligendi. Dignissimos libero, atque</div>
													<div class="ver-mas fira"><a href="#">Leer más</a></div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							
							
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>
		</div><!-- #content .site-content -->

	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>