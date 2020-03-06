<div class="row more-portfolio more-projects-todo">
	<div class="col-xs-12 col-md-10 ml-auto mr-auto portfolio mb-20">
		<div class="block-50 first-one"><?php
			$args = array( 'post_type' => 'proyecto', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="project" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					<a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="<?php echo get_the_ID(); ?>" data-title="<?php echo get_the_title(); ?>"></a>
				</div> <?php 
			endwhile;?>
		</div>
		<div class="block-50 second-one"><?php
			$args = array( 'post_type' => 'proyecto', 'posts_per_page' => 4, 'offset' => 1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="project _25" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					<a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="<?php echo get_the_ID(); ?>" data-title="<?php echo get_the_title(); ?>"></a>
				</div> <?php 
			endwhile;?>
		</div>
	</div>

	<div class="col-xs-12 col-md-12">
		<p class="text-center">
			<a id="ver-mas-proyectos" href="javascript: void(0);" class="btn-servicios fira">VER MÁS</a> <br><br><br>
		</p>
	</div>
</div>

<div class="row more-projects mb-20">
	<div class="col-xs-12 col-md-10 ml-auto mr-auto portfolio mb-20">
		
		<div class="block-50"><?php
			$args = array( 'post_type' => 'proyecto', 'posts_per_page' => 4, 'offset' => 5 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="project _25" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"><a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="<?php echo get_the_ID(); ?>" data-title="<?php echo get_the_title(); ?>"></a></div> <?php 
			endwhile;?>
		</div>

		<div class="block-50"><?php
			$args = array( 'post_type' => 'proyecto', 'posts_per_page' => 4, 'offset' => 9 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="project _25" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"><a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="<?php echo get_the_ID(); ?>" data-title="<?php echo get_the_title(); ?>"></a></div> <?php 
			endwhile;?>
		</div>
		
	</div>

</div>