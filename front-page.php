<?php get_header(); 
if (ICL_LANGUAGE_CODE == 'en') {
	$ruta = '/bookfwt';
} elseif (ICL_LANGUAGE_CODE == 'es') {
	$ruta = '/es/bookfwt';
}

?>


<main class="container mx-auto px-4 mt-[20px] md:mt-[48px] md:px-0">
    <section class="w-full">

    <h1
                            class="text-[32px] font-bold leading-[39px] text-[#5c5c5c] font-['Inter'] !mb-[8px]">
                            <?php the_title(); ?>

                        </h1>

        <div class="flex flex-col lg:flex-row justify-between gap-0 md:gap-[40px] items-start">
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
                <div class="w-full mt-0 md:mt-[3.5em] flex flex-col-reverse md:flex-col gap-[32px] md:gap-[100px]">
                    <div class="w-full">
                        <div class="calendar-wrapper">
                            <form class="flex flex-col gap-[16px]" action="<?=$ruta?>" method="get" id="bookingForm">
							<input type="hidden" name="urlfoto" value="<?= urlencode(the_post_thumbnail_url()) ?>">
							<input type="hidden" name="nametour" value="<?=the_title() ; ?>">
                                <div id="calendar-inline" class="w-full"></div>
                                <input type="text" id="date-selected" name="date" placeholder="Fecha seleccionada" class="w-full p-3 rounded-[8px]" readonly>
                                <input type="number" name="personas" class="w-full p-3 rounded-[8px]" min="0" max="30" placeholder="Personas">
                                <button type="submit" class="w-full rounded-[8px] px-[34px] py-[16px] text-[16px] font-bold leading-[20px] text-white">Reservar</button>
                            </form>
                        </div>
                    </div>
                    <div >
                        <div class="w-full flex flex-col gap-[8px] md:gap-[30px] mt-0 md:mt-[105px] sticky top-[20px]">
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
                                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/fd7236a2c69ae4d83a21f84343e60db85f3d05b7.png"
                                                    class="w-[20px] h-[20px]" alt="contact icon" />
                                                <?php if (!empty($details2['link'])) { ?>
                                                    <a href="<?php echo esc_url($details2['link']); ?>" class="!mb-0 hover:underline font-semibold">
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
<section class="mb-[88px] container-related-tours">
    <div class="container">
        <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
            <h2 class="text-[24px] md:text-[36px] font-inter mb-[32px] text-[#5c5c5c]">Things to do in Cusco</h2>
        <?php } else { ?>
            <h2 class="text-[24px] md:text-[36px] font-inter mb-[32px] text-[#5c5c5c]">Qué hacer en Cusco</h2>
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
                        $children = array_filter($children, function($child) use ($current_lang) {
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
                            <h2 class="text-center font-inter !text-[20px]"><?php echo get_the_title($child->ID); ?></h2>
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
                                        <?php echo do_shortcode('[comentarios_resumen_simple post_id="' . $child->ID . '"]'); ?>
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
    
    <style>
        .toursRelatedSwiper .swiper-button-next,
        .toursRelatedSwiper .swiper-button-prev {
            background: white;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            top: 35%;
        }
        
        .toursRelatedSwiper .swiper-button-next:after,
        .toursRelatedSwiper .swiper-button-prev:after {
            font-size: 20px;
            font-weight: bold;
            color: #ff8800;
        }
        
        .toursRelatedSwiper .swiper-button-next:hover,
        .toursRelatedSwiper .swiper-button-prev:hover {
            background: #f5f5f5;
        }
    </style>
    
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


<?php get_footer(); ?>