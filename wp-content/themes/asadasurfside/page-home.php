<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Home
 * @package asadasurfside
 */

get_header();
?>

<section class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/02-acueductos.jpg');">
		<!--<div class="banner-overlay"></div>-->	
		<div class="inner">
				<div class="banner-overlay"></div>	
	  	  		<div class="item-info txt-center">
	  	  			<h1>Asociación Administradora del Acueducto y Alcantarillado de Playa Potrero</h1>
	  	  			<p>-Surfside-Santa Cruz</p>
	  	  			
	  	  		</div>
	  	  		<div class="cotizador">
	  	  			
					<?php dynamic_sidebar( 'banner-info' ); ?>
	  	  		</div>
	  	  		
	  	 </div>
	  
	</section>
	<section class="icons">
		<div class="inner">
			<a href="https://www.cisaweb.com/AcueductosRecibos/" target="_blank" class="icons-item">
				<div class="icon"><i class="fas fa-edit"></i></div>
				<span>Consulta Facturas</span>
</a>
			<a href="https://www.bnonline.fi.cr/Login/" target="_blank" class="icons-item">
				<div class="icon">
					<i class="fas fa-credit-card"></i>
				</div>
				<span>Pago Banco Nacional</span>
</a>
			<a href="http://bancobcr.com/" target="_blank" class="icons-item">
				<div class="icon">
					<i class="fas fa-dollar-sign"></i>
				</div>
				<span>Pago Banco Costa Rica</span>
</a>
			<a href="<?php echo esc_url( home_url( '/documentos' ) ); ?>" class="icons-item">
				<div class="icon"><i class="fas fa-user"></i></div>
				<span>Documentos</span>
</a>
			
		</div>
	</section>
	<section class="properties">
                
            <h1 class="properties-title txt-center">Información Destacada</h1>
            <div id="properties-slider" class="owl-carousel owl-theme">
					<?php	
						$args = array(
						'post_type' => 'provider',
						//'order' => 'ASC',
						'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
						'posts_per_page' => 6,
						'paged' => 1
					
					);
      

					$items = new WP_Query($args);
					// Pagination fix
					$temp_query = $wp_query;
					$wp_query   = NULL;
					$wp_query   = $items;

						if ($items->have_posts()) {
							while ($items->have_posts()) {
								$items->the_post();

								?>
								<div class="properties-slider-item">
									<div class="properties-slider-item-image">
										
										<a href="<?php echo rwmb_meta( 'rw_provider_link' );?>" target="_blank" class="properties-slider-item-link">
											<?php if (has_post_thumbnail()) :

											$id = get_post_thumbnail_id($post->ID);
											$thumb_url = wp_get_attachment_image_src($id, 'item-provider-thumb', true);
											?>

											<?php endif; ?>
											<img src="<?php echo $thumb_url[0] ?>" alt="<?php the_title(); ?>" />
											<div class="overlay">
												<div class="icon">
													<i class="fas fa-plus"></i>
												</div>
											</div>
										</a>
									</div>
									<!-- <div class="properties-slider-item-details">
										<h4>Lorem ipsum dolor sit amet</h4>
										<h3>Formularios</h3>  
										
									</div> -->
								
									
								</div>
								
								
							

							<?php


						}
                    }
                    wp_reset_postdata();
					?>

            </div>

	</section>
	<section class="main">
		<div class="inner">
			
			
		</div>
		
	</section>
	<section id="latest-news" class="latest-news">
		<div class="inner">
			<h1 class="latest-news-title txt-center">Ultimas Noticias</h1>
			<div class="latest-news-container">
            <?php	
						$args = array(
						'post_type' => 'post',
						//'order' => 'DESC',
						'orderby' => array('menu_order' => 'DESC', 'title' => 'DESC'),
						'posts_per_page' => 3,
						'paged' => 1
					
					);
      

					$items = new WP_Query($args);
					// Pagination fix
					$temp_query = $wp_query;
					$wp_query   = NULL;
					$wp_query   = $items;

						if ($items->have_posts()) {
							while ($items->have_posts()) {
								$items->the_post();

								?>
								<article class="latest-news-item">
                                    <div class="latest-news-inner">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="latest-news-item-image">
                                                <?php if (has_post_thumbnail()) :

                                                    $id = get_post_thumbnail_id($post->ID);
                                                    $thumb_url = wp_get_attachment_image_src($id, 'large', true);
                                                    ?>



                                                    <?php endif; ?>
                                                <figure class="bg-image" style="background-image: url('<?php echo $thumb_url[0] ?>");"></figure>
                                            </div>
                                        </a>
                                        <div class="latest-news-item-text">
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                                <div class="metadata"></div>
                                                <div class="bodytext"><?php the_excerpt(); ?></div>
                                            </a>
                                            <a href="<?php the_permalink(); ?>" class="readmore">Leer más</a>
                                        </div>
                                    </div>	
                                </article>
								
							

							<?php


						}
                    }
                    wp_reset_postdata();
					?>
					
				
				
				
			</div>
		</div>
	</section>

<?php
//get_sidebar();
get_footer();
