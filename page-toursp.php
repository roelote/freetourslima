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


<main class="container mx-auto px-4 md:px-0 mt-[20px] md:mt-[48px]">
    <section class="w-full">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<nav class="breadcrumbs text-[14px] text-[#A49D9D] mb-[16px]">', '</nav>');
        }
        ?>
        <h1
            class="text-[32px] font-bold leading-[39px] text-[#5c5c5c] font-['Inter'] !mb-[8px]">
            <?php the_title(); ?>

        </h1>

        <div class="flex flex-col lg:flex-row gap-0 md:gap-[40px] items-start">
            <div class="w-full md:w-[783px]">

                <div class="main-content-tour">
                    <?php
                    while (have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="w-full md:w-[374px]">
                <div class="w-full mt-[2em] flex flex-col-reverse md:flex-col gap-[32px] md:gap-[90px]">
                    <div class="w-full">
                        <div class="calendar-wrapper">
                            <form class="flex flex-col gap-[16px]" action="<?= $ruta ?>" method="get" id="bookingForm">
                                <input type="hidden" name="urlfoto" value="<?= urlencode(the_post_thumbnail_url()) ?>">
                                <input type="hidden" name="nametour" value="<?= the_title(); ?>">
                                <div id="calendar-inline" class="w-full"></div>
                                <input type="text" id="date-selected" name="date" placeholder="Fecha seleccionada" class="w-full p-3 rounded-[8px]" readonly>
                                <input type="number" name="personas" class="w-full p-3 rounded-[8px]" min="0" max="30" placeholder="Personas">
                                <button type="submit" class="w-full rounded-[8px] px-[34px] py-[16px] text-[16px] font-bold leading-[20px] text-white">Reservar</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="w-full flex flex-col gap-[8px] md:gap-[30px] mt-0 md:mt-[44px]">
                            <!-- Details Card -->
                            <div class="bg-[#efede7] border border-[#dad9d6] rounded-[8px] p-[20px]">
                                <div class="flex flex-col gap-[12px]">
                                    <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
                                        <h4 class="text-[24px] font-bold leading-[30px] text-[#5c5c5c] font-['Inter'] text-center">Details</h4>
                                    <?php } else { ?>
                                        <h4 class="text-[24px] font-bold leading-[30px] text-[#5c5c5c] font-['Inter'] text-center">Detalles</h4>
                                    <?php } ?>
                                    <div class="w-full h-[1px] bg-[#dad9d6]"></div>

                                    <?php
                                    $details = get_field('details');
                                    if ($details) {
                                        // Precio
                                        if (!empty($details['title_price']) || !empty($details['price'])) {
                                    ?>
                                            <div class="flex flex-row items-center gap-[8px]">
                                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/sistema-de-comentarios-FWTC-12.png"
                                                    class="w-[20px] h-[20px]" alt="price icon" />
                                                <div class="flex flex-nowrap gap-2">
                                                    <?php if (!empty($details['title_price'])) { ?>
                                                        <p class="!mb-0 font-semibold"><?php echo esc_html($details['title_price']); ?></p>
                                                    <?php } ?>
                                                    <?php if (!empty($details['price'])) { ?>
                                                        <p class="!mb-0"><?php echo esc_html($details['price']); ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        // Duración
                                        if (!empty($details['title_duration']) || !empty($details['duration'])) {
                                        ?>
                                            <div class="flex flex-row items-center gap-[8px]">
                                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/1-4.png" class="w-[20px] h-[20px]"
                                                    alt="duration icon" />
                                                <div class="flex flex-nowrap gap-2">
                                                    <?php if (!empty($details['title_duration'])) { ?>
                                                        <p class="!mb-0 font-semibold"><?php echo esc_html($details['title_duration']); ?></p>
                                                    <?php } ?>
                                                    <?php if (!empty($details['duration'])) { ?>
                                                        <p class="!mb-0"><?php echo esc_html($details['duration']); ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        // Idioma
                                        if (!empty($details['title_lang']) || !empty($details['lang'])) {
                                        ?>
                                            <div class="flex flex-row items-center gap-[8px]">
                                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/2-4.png" class="w-[20px] h-[20px]"
                                                    alt="language icon" />
                                                <div class="flex flex-nowrap gap-2">
                                                    <?php if (!empty($details['title_lang'])) { ?>
                                                        <p class="!mb-0 font-semibold"><?php echo esc_html($details['title_lang']); ?></p>
                                                    <?php } ?>
                                                    <?php if (!empty($details['lang'])) { ?>
                                                        <p class="!mb-0"><?php echo esc_html($details['lang']); ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- Contact Card -->
                            <?php
                            $details2 = get_field('details_2');
                            if ($details2) {
                            ?>
                                <div class="bg-[#efede7] border border-[#dad9d6] rounded-[8px] p-[22px]">
                                    <div class="flex flex-col gap-[10px]">
                                        <?php if (!empty($details2['consult'])) { ?>
                                            <h4 class="text-[24px] font-bold leading-[30px] text-[#5c5c5c] font-['Inter'] text-center">
                                                <?php echo esc_html($details2['consult']); ?></h4>
                                        <?php } ?>
                                        <div class="w-full h-[1px] bg-[#dad9d6] mb-[8px]"></div>
                                        <?php if (!empty($details2['question']) || !empty($details2['link'])) { ?>
                                            <div class="flex flex-row items-center gap-[8px]">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 0C13.7543 0 15.9163 0.86051 17.5104 2.39223C19.1045 3.92395 20 6.0014 20 8.16758C20 10.3338 19.1045 12.4112 17.5104 13.9429C15.9163 15.4746 13.7543 16.3352 11.5 16.3352H11V17.2864C11 17.414 10.9738 17.5402 10.923 17.6581C10.8722 17.7759 10.7977 17.8829 10.7038 17.973C10.6099 18.0632 10.4985 18.1346 10.3758 18.1833C10.2532 18.2321 10.1217 18.2571 9.989 18.2569C7.529 18.255 5.037 17.4661 3.146 15.8509C1.238 14.2193 0.002 11.7949 0 8.65667V8.16758C0 6.0014 0.895533 3.92395 2.48959 2.39223C4.08365 0.86051 6.24566 0 8.5 0H11.5ZM6.5 6.72624C6.10218 6.72624 5.72064 6.8781 5.43934 7.1484C5.15804 7.4187 5 7.78531 5 8.16758C5 8.54985 5.15804 8.91646 5.43934 9.18676C5.72064 9.45706 6.10218 9.60892 6.5 9.60892C6.89782 9.60892 7.27936 9.45706 7.56066 9.18676C7.84196 8.91646 8 8.54985 8 8.16758C8 7.78531 7.84196 7.4187 7.56066 7.1484C7.27936 6.8781 6.89782 6.72624 6.5 6.72624ZM13.5 6.72624C13.1022 6.72624 12.7206 6.8781 12.4393 7.1484C12.158 7.4187 12 7.78531 12 8.16758C12 8.54985 12.158 8.91646 12.4393 9.18676C12.7206 9.45706 13.1022 9.60892 13.5 9.60892C13.8978 9.60892 14.2794 9.45706 14.5607 9.18676C14.842 8.91646 15 8.54985 15 8.16758C15 7.78531 14.842 7.4187 14.5607 7.1484C14.2794 6.8781 13.8978 6.72624 13.5 6.72624Z" fill="#FF8110" />
                                                </svg>
                                                <?php if (!empty($details2['link'])) { ?>
                                                    <a href="<?php echo esc_url($details2['link']); ?>" class="!mb-0 text-[#1ab6b6] hover:underline font-semibold">
                                                        <?php echo esc_html($details2['question']); ?>
                                                    </a>
                                                <?php } else { ?>
                                                    <p class="!mb-0"><?php echo esc_html($details2['question']); ?></p>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>


</main>

<section>
    <div class="container continer-reviews">
        <?php echo do_shortcode('[comentarios_free]'); ?>
    </div>
</section>

<!-- Related Tours Section -->
<section class="py-[32px] md:py-[48px]">
    <div class="container">
        <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
            <h2 class="text-center text-[28px] md:text-[36px] font-bold mb-[32px] text-[#5c5c5c]">Related Tours</h2>
        <?php } else { ?>
            <h2 class="text-center text-[28px] md:text-[36px] font-bold mb-[32px] text-[#5c5c5c]">Tours Relacionados</h2>
        <?php } ?>

        <div class="w-full relative">
            <!-- Swiper Container -->
            <div class="swiper toursRelatedSwiper">
                <div class="swiper-wrapper mb-[48px]">
                    <?php
                    $page_id = get_the_ID();
                    $parent_id = wp_get_post_parent_id($page_id);
                    $current_lang = ICL_LANGUAGE_CODE;

                    if ($parent_id) {
                        $args = array(
                            'post_parent' => $parent_id,
                            'post_type'   => 'page',
                            'numberposts' => -1,
                            'post_status' => 'publish',
                            'post__not_in' => array($page_id),
                            'orderby'     => 'menu_order',
                            'order' => 'ASC',
                            'suppress_filters' => false,
                        );
                        $children = get_children($args);
                    } else {
                        $args = array(
                            'post_parent' => $page_id,
                            'post_type'   => 'page',
                            'numberposts' => -1,
                            'post_status' => 'publish',
                            'orderby'     => 'menu_order',
                            'order' => 'ASC',
                            'suppress_filters' => false,
                        );
                        $children = get_children($args);

                        if (empty($children)) {
                            $args = array(
                                'post_type'   => 'page',
                                'numberposts' => -1,
                                'post_status' => 'publish',
                                'post_parent__not_in' => array(0),
                                'post__not_in' => array($page_id),
                                'orderby'     => 'rand',
                                'order' => 'ASC',
                                'suppress_filters' => false,
                            );
                            $children = get_posts($args);
                        }
                    }

                    // Filtrar por idioma actual
                    if (!empty($children) && function_exists('icl_object_id')) {
                        $children = array_filter($children, function ($child) use ($current_lang) {
                            $lang_info = apply_filters('wpml_post_language_details', NULL, $child->ID);
                            return $lang_info && $lang_info['language_code'] === $current_lang;
                        });
                    }

                    if ($children) {
                        foreach ($children as $child) {
                            $details = get_field('details', $child->ID);

                            $price = isset($details['price']) ? $details['price'] : '';
                            $duration = isset($details['duration']) ? $details['duration'] : '';
                            $lang = isset($details['lang']) ? $details['lang'] : '';
                            $hours_tour = isset($details['hours_tour']) ? $details['hours_tour'] : '';
                    ?>
                            <div class="swiper-slide">
                                <div class="w-full flex flex-col justify-start items-center">
                                    <?php
                                    echo get_the_post_thumbnail($child->ID, 'boxst', array(
                                        'alt' => get_the_title($child->ID),
                                        'title' => get_the_title($child->ID),
                                        'class' => 'w-full h-[252px] rounded-t-[8px] object-cover'
                                    ));
                                    ?>
                                    <div class=" w-full md:h-full bg-white rounded-b-[8px] px-[12px] pt-[16px] pb-[28px] md:py-[20px] md:px-[24px]">
                                        <h2 class="text-center"><?php echo get_the_title($child->ID); ?></h2>
                                        <ul class="flex flex-col gap-[12px] my-[16px] md:my-[24px]">
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
                                                class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] font-nunito inline-block hover:bg-[#159999] transition-colors">
                                                Book Now!
                                            </a>
                                        <?php } else { ?>
                                            <a href="<?php echo esc_url(get_permalink($child->ID)); ?>"
                                                class="bg-[#1ab6b6] rounded-[8px] px-[28px] py-[10px] text-[16px] font-bold leading-[22px] text-[#fefefe] font-nunito inline-block hover:bg-[#159999] transition-colors">
                                                ¡Reserva ya!
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        if (ICL_LANGUAGE_CODE == 'en') {
                            echo '<div class="swiper-slide"><p class="text-center w-full">No related tours found.</p></div>';
                        } else {
                            echo '<div class="swiper-slide"><p class="text-center w-full">No se encontraron tours relacionados.</p></div>';
                        }
                    }
                    ?>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.toursRelatedSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>
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
