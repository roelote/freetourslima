<?php
/** * Template Name: Tours Pagados */ 

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package freewalking
 */


 
get_header();
?>

<?php 

  // Asignación del valor de $ruta según el idioma
  if (ICL_LANGUAGE_CODE == 'en') {
	$ruta = '/bookpayment';
} elseif (ICL_LANGUAGE_CODE == 'es') {
	$ruta = '/es/bookpayment';
}


?>

				
<section class="pb-5">
					<div>
							<main id="primary" class="site-main toursp px-0 xl:px-3">

									 <?php
        while (have_posts()):
        ?>
        <?php
            the_post();
            the_content();
        endwhile;
        ?>

								</main><!-- #main -->
					
               		 </div>


						<div class="block sm:hidden xl:hidden py-5 px-3 xl:px-0">
				   		<div id="datepicker2"></div>
						   <form class="bg-white rounded p-1 mt-2 border border-gray-50" action="<?=$ruta?>" method="get" id="bookingForm">
							<input type="hidden" name="urlfoto" value="<?= urlencode(the_post_thumbnail_url()) ?>">
							<input type="hidden" name="nametour" value="<?=the_title() ; ?>">
							<span class="block my-2">
								<label for="datesf" class="text-gray-700">Selected Date: </label>
								<input type="text" id="selectedDate2" name="fechat" class="border border-gray-300 text-gray-700 py-0.5 font-nunito rounded px-2 w-full bg-gray-100 " readonly>
							</span>
							<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
															
															<label for="paxs" class="text-gray-700">People: </label>
																	<?php }
																	if (ICL_LANGUAGE_CODE == 'es') { ?>
																		
																		<label for="paxs" class="text-gray-700">Personas: </label>
																
																	<?php }
																	?>
							<select name="paxs" id="paxs" class="border border-gray-300 text-gray-700 py-0.5 font-nunito rounded px-2 w-full bg-gray-100 ">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>

							<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
											
							<button type="submit" class="bg-fwt text-white px-6 py-2 uppercase text-lg table mt-5 hover:bg-gray-800 transition-all delay-150 font-bold rounded-lg w-full">Book Now </button>
										<?php }
										if (ICL_LANGUAGE_CODE == 'es') { ?>
											
							<button type="submit" class="bg-fwt text-white px-6 py-2 uppercase text-lg table mt-5 hover:bg-gray-800 transition-all delay-150 font-bold rounded-lg w-full">Reservar</button>
									
										<?php }
										?>

						</form>
						
				   </div>
				   
</section>

<section>
	<div class="container">
		<?php echo do_shortcode( '[comentarios_free]' ); ?>
	</div>
</section>


<section class="bg-fwt py-10 px-3 xl:px-0">
		<div class="container">
		
			           <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
                             <h2 class="text-white text-2xl font-bold mb-5 text-center uppercase">Things you can do in Cusco </h2>
                        <?php }
                        if (ICL_LANGUAGE_CODE == 'es') { ?>
                             <h2 class="text-white text-2xl font-bold mb-5 text-center uppercase">Cosas que puedes hacer en Cusco</h2>
                    
                        <?php }
                        ?>
                        
                           
               

                        <div class="swiper section01">
							<div class="swiper-wrapper">

                            <?php
                                $args = array(
                                    'post_type' => 'page',
                                    'post_parent' => $post->post_parent,
                                    'post__not_in' => array($post->ID),
                                    'posts_per_page' => 10,
                                    'orderby' => 'rand',
                                );

                                $the_query = new WP_Query($args);

                                ?>
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                    <?php
                                    // Accede a los campos dentro del grupo "details"
										$details = get_field('details');

										// Extrae los campos del grupo
										$price = isset($details['price']) ? $details['price'] : '';
										$duration = isset($details['duration']) ? $details['duration'] : '';
										$lang = isset($details['lang']) ? $details['lang'] : '';
										$hours_tour = isset($details['hours_tour']) ? $details['hours_tour'] : '';

                                    ?>
                                        
										<div class="swiper-slide">
											<div class="bg-gray-100 pb-3 rounded-lg">
													<div class="relative">
															<div class="overflow-hidden ">
																<?php if ( has_post_thumbnail() ) { the_post_thumbnail('boxst', array( 'alt' => get_the_title(), 'title' => get_the_title(), 'class' => 'h-56 rounded-lg' ) ); }else{?> 
																<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/default.jpg" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"> 
																	<?php } ?>
															</div>
														<div class="absolute bg-gray-900/60 bottom-0 w-full">
															<span class="text-white block text-center py-1 font-semibold"><?php echo esc_html($price); ?></span>
														</div>
													</div>
													<div>
														<h2 class=" text-fwt text-lg font-extrabold py-2 text-center"><?php the_title(); ?></h2>
														<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
															<a href="<?php the_permalink() ?>" class="uppercase font-extrabold text-white bg-fwt px-4 hover:bg-gray-700 py-1 rounded table mx-auto mb-3">Book Now!</a>
															<?php }
															if (ICL_LANGUAGE_CODE == 'es') { ?>
																<a href="<?php the_permalink() ?>" class="uppercase font-extrabold text-white bg-fwt px-4 hover:bg-gray-700 py-1 rounded table mx-auto mb-3">¡Reserva Ya!</a>
														
															<?php }
															?>


														
													</div>
													
											</div>
										</div>


                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php wp_reset_query(); ?>

									</div>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
			
							
									

								

					 

		</div>	

</section>
	


<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
											<section class="fixed bottom-0 left-0 right-0 block xl:hidden py-2  bg-[#333333] z-50  text-center">
														<a href="#datepicker2" class="text-2xl text-white font-semibold ">Check availability</a>
											</section>
										<?php }
										if (ICL_LANGUAGE_CODE == 'es') { ?>
										<section class="fixed bottom-0 left-0 right-0 block xl:hidden py-2  bg-[#333333] z-50  text-center">
													<a href="#datepicker2" class="text-2xl text-white font-semibold ">Ver disponibilidad</a>
										</section>
									
										<?php }
										?>
										
<?php

get_footer();
