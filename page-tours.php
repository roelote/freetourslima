<?php

/** * Template Name: Tours */

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

<main class="container mx-auto px-4 md:px-0 mt-[20px] md:mt-[48px]">
    <section class="w-full">
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
                <div class="w-full mt-0 md:mt-[6.5em] flex flex-col-reverse md:flex-col gap-[32px] md:gap-[100px]">
                    <div class="w-full">
                        <div class="calendar-wrapper">
                            <form  class="flex flex-col gap-[16px]" action="<?php the_field('ruta_tours_free')?>" method="get" id="bookingForm">
                                <input type="hidden" name="urlfoto" value="<?= urlencode(the_post_thumbnail_url()) ?>">
							     <input type="hidden" name="nametour" value="<?=the_title() ; ?>">
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
                                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/fd7236a2c69ae4d83a21f84343e60db85f3d05b7.png"
                                                    class="w-[20px] h-[20px]" alt="contact icon" />
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
