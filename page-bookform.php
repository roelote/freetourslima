<?php

/** * Template Name: Book en */ 

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
            // Recupera los parámetros de la URL
			
			$nametour = isset($_GET['nametour']) ? $_GET['nametour'] : '';
            $urlfoto = isset($_GET['urlfoto']) ? $_GET['urlfoto'] : '';
            $fechat = isset($_GET['date']) ? $_GET['date'] : '';
            $paxs = isset($_GET['personas']) ? $_GET['personas'] : '';

			$paxss = str_replace("/", "", $paxs);
?>
<section class="bg-[#efede7]">
	<div class="py-[48px] mx-auto max-w-[848px]"> 
		<h1 class="text-fwt text-2xl font-bold !mb-[24px] w-full xl:max-w-[400px]"><?=htmlspecialchars($nametour)?></h1>
	<div class="flex flex-wrap">
		<div class="w-full xl:w-[400px]">
			<div class="">
				
				 <img src="<?=$urlfoto?>" alt="book tour">
			</div>
		</div>	
		<div class="w-full xl:w-[448px]">
			<div class="py-1 px-12">
				<div class="w-[400px]">
					<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
							<p>Booking for the <b><?=htmlspecialchars($fechat)?></b></p>
							<p>People: <b><?=htmlspecialchars($paxss)?></b> </p>
                        <?php }
                        if (ICL_LANGUAGE_CODE == 'es') { ?>
								<p>Reservación para <b><?=htmlspecialchars($fechat)?></b></p>
								<p>Personas: <b><?=htmlspecialchars($paxss)?></b> </p>
                    
                        <?php }
                        ?>

				<div>
						<main id="primary" class="site-main ">

						 <?php
                            while (have_posts()):
                                the_post();
                                the_content();
                            endwhile;
                            ?>

						</main><!-- #main -->

				</div>

				</div>

						

			</div>

		</div>

	</div>
			


            


			

	</div>
</section>



	

<?php

get_footer();
