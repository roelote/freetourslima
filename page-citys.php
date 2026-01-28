<?php

/** * Template Name: Citys */ 

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


 

<div class="container mx-auto px-5 md:px-0 mt-[20px] md:mt-[48px]">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav class="breadcrumbs text-[14px] text-[#A49D9D] mb-[16px] md:mb-0">', '</nav>');
    }
    ?>
    <h1 class="!mb-[24px] md:mb-0"><?= the_title(); ?></h1>

    <div class="w-full">
        <div class="w-full grid grid-cols-1 gap-y-[32px] md:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[48px] md:mb-[32px]">
            <?php
            $page_id = get_the_ID();

            $args = array(
                'post_parent' => $page_id,
                'post_type'   => 'page',
                'numberposts' => -1,
                'post_status' => 'publish',
                'orderby'     => 'publish_date',
                'order' => 'ASC',
            );

            $children = get_children($args);

            if ($children) {
                foreach ($children as $child) {
                    // Accede a los campos dentro del grupo "details"
                    $details = get_field('details', $child->ID);

                    // Extrae los campos del grupo
                    $price = isset($details['price']) ? $details['price'] : '';
                    $duration = isset($details['duration']) ? $details['duration'] : '';
                    $lang = isset($details['lang']) ? $details['lang'] : '';
                    $hours_tour = isset($details['hours_tour']) ? $details['hours_tour'] : '';
            ?>
                    <div class="w-full flex flex-col justify-start items-center mb-[24px]">
                        <?php 
                        echo get_the_post_thumbnail($child->ID, 'boxst', array(
                            'alt' => get_the_title($child->ID), 
                            'title' => get_the_title($child->ID),
                            'class' => 'w-full h-[252px] rounded-t-[8px] object-cover'
                        )); 
                        ?>
                        <div class="bg-white rounded-b-[8px] px-[12px] py-[20px] md:px-[24px] w-full">
                            <h2 class="text-center"><?php echo get_the_title($child->ID); ?></h2>
                            <ul class="flex flex-col gap-[12px] my-[1px] md:my-[24px]">
                                <?php if ($duration) : ?>
                                <li class="flex">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/1-4.png"
                                        class="w-[20px] h-[20px]" alt="duration" />
                                    <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]">
                                        <?php echo esc_html($duration); ?>
                                    </p>
                                </li>
                                <?php endif; ?>
                                
                                <?php if ($lang) : ?>
                                <li class="flex">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/2-4.png"
                                        class="w-[20px] h-[20px]" alt="language" />
                                    <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]">
                                        <?php echo esc_html($lang); ?>
                                    </p>
                                </li>
                                <?php endif; ?>
                                
                                <?php if ($hours_tour) : ?>
                                <li class="flex">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/3-4.png"
                                        class="w-[20px] h-[20px]" alt="time" />
                                    <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[6px]">
                                        <?php echo esc_html($hours_tour); ?>
                                    </p>
                                </li>
                                <?php endif; ?>
                                
                                <?php if ($price) : ?>
                                <li class="flex">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/sistema-de-comentarios-FWTC-12.png"
                                        class="w-[20px] h-[20px]" alt="price" />
                                    <p class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]">
                                        <?php echo esc_html($price); ?>
                                    </p>
                                </li>
                                <?php endif; ?>

                                <li class="flex">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/4-4.png"
                                        class="w-[20px] h-[20px]" alt="rating" />
                                    <div class="text-[16px] !mb-0 font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]">
                                        <?php echo do_shortcode('[comentarios_resumen post_id="' . $child->ID . '"]'); ?>
                                    </div>
                                </li>
                            </ul>
                            <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
                                <a href="<?php echo esc_url(get_permalink($child->ID)); ?>" 
                                   class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[12px] font-nunito inline-block hover:bg-[#159999] transition-colors">
                                    Book Now!
                                </a>
                            <?php } else { ?>
                                <a href="<?php echo esc_url(get_permalink($child->ID)); ?>" 
                                   class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] mb-[12px] font-nunito inline-block hover:bg-[#159999] transition-colors">
                                    ¡Reserva ya!
                                </a>
                            <?php } ?>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<p class="col-span-full text-center">No se encontraron tours para esta página.</p>';
            }
            ?>
        </div>
    </div>
    <div class="main-page-child">
        <?php
        while (have_posts()):
        ?>
        <?php
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
    <div class="w-full mb-[88px]">

		<?php echo do_shortcode( '[EntradasRecientes]' ); ?>

    </div>

</div>


<?php

get_footer();
