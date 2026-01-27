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
 *
 * @package freewalking
 */

get_header();
?>

<section style="background-image: url(<?php the_post_thumbnail_url() ?>);" class="h-96 bg-center bg-cover"> 
    <div class="flex h-full w-full items-center justify-center bg-black bg-opacity-70"> 
        <div>
            <h1 class="text-2xl xl:text-4xl font-bold uppercase text-white  mb-2"><?php the_title() ?></h1> 
        </div>
        
        
    </div> 
</section>

<section class="py-8 px-3 xl:px-0">
	<div class="container">

			<main id="primary" class="site-main">

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
</section>


<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
	<section class="bg-fwt">
		<div class="container py-10">
					<h3 class="text-center text-xl xl:text-3xl text-white font-bold uppercase ">Book your vacations in Cusco with us</h3>
					<a href="/" class="uppercase bg-white font-bold px-4 text-xl xl:text-base py-1 table mx-auto mt-5 rounded hover:bg-gray-800 hover:text-white transition-all delay-150">Book your tour</a>
		</div>
</section>	
										<?php }
										if (ICL_LANGUAGE_CODE == 'es') { ?>
										<section class="bg-fwt">
		<div class="container py-10">
					<h3 class="text-center text-xl xl:text-3xl text-white font-bold uppercase ">Reserva tus vacaciones en Cusco con nosotros</h3>
					<a href="/es/" class="uppercase bg-white font-bold px-4 text-xl xl:text-base py-1 table mx-auto mt-5 rounded hover:bg-gray-800 hover:text-white transition-all delay-150">Reserva tu tour</a>
		</div>
</section>	
									
										<?php }
?>




	

<?php

get_footer();
