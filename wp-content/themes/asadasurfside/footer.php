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
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15694.781033199757!2d-85.7649106!3d10.4457391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb323e80f88ea5c3f!2sSurfside%20Asada!5e0!3m2!1ses-419!2scr!4v1568755364204!5m2!1ses-419!2scr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
					<a href="https://wa.me/50686026012" target="_blank" class="social-item"><i class="fab fa-whatsapp"></i></a>
					<!-- <a href="#" class="social-item"><i class="fab fa-google-plus"></i></a> -->
	
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
