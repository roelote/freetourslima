                <div class="flex flex-col-reverse md:flex-col md:mb-[40px]">
                    <div class="flex flex-col items-start mb-[24px] md:mb-[32px]">
                         <?php
                            if (function_exists('yoast_breadcrumb') && !is_front_page()) {
                                yoast_breadcrumb('<nav class="breadcrumbs text-[14px] text-[#A49D9D] mb-[16px]">', '</nav>');
                            }
                            ?>
                            <h1
                                class="text-[26px] xl:text-[32px] font-bold leading-[39px] text-[#5c5c5c] font-['Inter'] !mb-[8px]">
                                <?php the_title(); ?>

                            </h1>
                        
                        <?php echo do_shortcode('[comentarios_resumen]'); ?>
                        <div class="flex flex-row items-start gap-[40px]">
                            <div class="flex flex-row items-center gap-[6px]">
                               
                            </div>
                        </div>
                    </div>
                    <?php
                    $images = get_field('block_slider');
                    if ($images):
                        $total_images = count($images);
                        $has_more = $total_images > 4;
                    ?>
                        <div class="flex flex-row gap-[4px] mb-[24px] md:mb-0">
                            <?php if (isset($images[0])): ?>
                                <div class="w-full md:w-[633px] h-[286px] md:h-[520px] cursor-pointer" onclick="openGalleryModal()">
                                    <img src="<?php echo esc_url($images[0]['sizes']['slidert']); ?>"
                                        class="w-full h-full rounded-[8px] object-cover" alt="<?php echo esc_attr($images[0]['alt']); ?>" />
                                </div>
                            <?php endif; ?>

                            <div class="hidden md:flex flex-col gap-[4px] w-[146px]">
                                <?php
                                for ($i = 1; $i <= 3; $i++):
                                    if (isset($images[$i])):
                                ?>
                                        <div class="relative w-full h-full cursor-pointer" onclick="openGalleryModal()">
                                            <img src="<?php echo esc_url($images[$i]['sizes']['slidert']); ?>"
                                                class="w-full h-full rounded-[8px] object-cover" alt="<?php echo esc_attr($images[$i]['alt']); ?>" />
                                            <?php if ($i === 3 && $has_more): ?>
                                                <div class="absolute inset-0 bg-black/60 rounded-[8px] flex items-center justify-center">
                                                    <span class="text-white text-[18px] font-bold">
                                                        <?php 
                                                        if (ICL_LANGUAGE_CODE == 'en') {
                                                            echo 'See more +' . ($total_images - 4);
                                                        } else {
                                                            echo 'Ver más +' . ($total_images - 4);
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                <?php
                                    endif;
                                endfor;
                                ?>
                            </div>
                        </div>

                        <!-- Modal con Swiper -->
                        <div id="galleryModal" class="hidden fixed inset-0 bg-black/90 z-50 flex items-center justify-center p-4">
                            <button onclick="closeGalleryModal()" class="absolute top-4 right-4 text-white text-4xl hover:text-gray-300 z-10">&times;</button>
                            <div class="swiper gallerySwiper w-full max-w-5xl">
                                <div class="swiper-wrapper">
                                    <?php foreach ($images as $image): ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo esc_url($image['sizes']['slidert']); ?>"
                                                class="w-full h-auto max-h-[80vh] object-contain mx-auto"
                                                alt="<?php echo esc_attr($image['alt']); ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>