<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<footer class="site-footer">
	<div class="site-info container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-4 ml-auto mr-auto">
				<ul class="social-links-footer">
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="link facebook"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="link instagram"></a></li>
				</ul>
				<p class="text-center white">
					TODOS LOS DERECHOS RESERVADOS SUBMIT COMMUNICATION
					<br>
					<a href="/aviso-de-privacidad" class="white">AVISO DE PRIVACIDAD</a>
				</p>
			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>
<script>
	function initMap() {
		var pin_map = {lat: 20.689623, lng: -103.424389};
		var map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: pin_map});
		var marker_fede = new google.maps.Marker({position: pin_map, map: map});
	}
</script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&amp;callback=initMap"> </script>
</body>
</html>
