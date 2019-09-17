<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asadasurfside
 */

?>
<footer class="footer">
		<div class="footer-contact">
			<div class="footer-map">
				<img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="map">
			</div>
			<div class="right-color"></div>
			<div class="inner">
				
				
				<div class="footer-contact-info">
					<?php dynamic_sidebar( 'footer-contact' ); ?>
					
				</div>
				
				
				
				
				
			</div>
		</div>
		<div class="footer-bottom">
			<div class="inner">
				<h3>Siguenos</h3>
				
				<div class="social">
					<a href="https://www.facebook.com/ASADA.Surfside" target="_blank" class="social-item"><i class="fab fa-facebook"></i></a>
					<a href="#" class="social-item"><i class="fab fa-twitter"></i></a>
					<a href="#" class="social-item"><i class="fab fa-google-plus"></i></a>
	
				</div>
			</div>
		</div>	
		<div class="copy">
			<div class="inner">
				
				Asada Surftside &copy; <?php echo date('Y') ?>. <span class="avotz">Desarrollado por <a href="#"><i class="icon-avotz"></i></a></span>
			</div>
		</div>
		
	</footer>
	

<?php wp_footer(); ?>

</body>
</html>
