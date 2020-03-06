<div class="row more-portfolio more-projects-branding mb-20">
	<div class="col-xs-12 col-md-10 ml-auto mr-auto portfolio mb-20">
		<div class="block-projects-container"><?php
			$args = array( 'post_type' => 'proyecto', 'tax_query' => array(array ('taxonomy' => 'categoria', 'field' => 'slug', 'terms' => 'branding', ) ) );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="project _25" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"><a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="<?php echo get_the_ID(); ?>" data-title="<?php echo get_the_title(); ?>"></a></div> <?php 
			endwhile;?>
		</div>
	</div>
</div>