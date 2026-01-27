<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="w-full">
        <div class="container mx-auto mt-[8px] md:my-[10px] px-5 md:px-0 relative">
            <div class="flex flex-col gap-[18px] justify-start items-center">
                <div class="w-full">
                    <div class="flex flex-row justify-between items-center w-full h-[52px]">
                        <div class="custom-logo">
                            <?php if (has_custom_logo()): ?>
                                <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                                    <img decoding="async" src="<?php echo get_custom_logo(); ?>" alt="" loading="eager">
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="hidden md:flex flex-row items-center gap-10">
                            <ul class="flex flex-row gap-3">
                                <li><a href=""
                                        class="text-[14px] font-bold leading-[20px] text-[#5c5c5c] font-['Nunito_Sans']">Nosotros</a>
                                </li>
                                <span class="text-[#5c5c5c]">|</span>
                                <li><a href=""
                                        class="text-[14px] font-bold leading-[20px] text-[#5c5c5c] font-['Nunito_Sans']">Proyecto
                                        Social</a></li>
                                <span class="text-[#5c5c5c]">|</span>
                                <li><a href=""
                                        class="text-[14px] font-bold leading-[20px] text-[#5c5c5c] font-['Nunito_Sans']">Háblanos</a>
                                </li>
                                <span class="text-[#5c5c5c]">|</span>
                                <li><a href=""
                                        class="text-[14px] font-bold leading-[20px] text-[#5c5c5c] font-['Nunito_Sans'] inline-flex items-center gap-2">Español
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Polygon-6.png"
                                            class="size-2" alt="dropdown" /></a></li>
                            </ul>

                            <div class="flex flex-row gap-[6px] items-center bg-[#efede7] border border-[#5c5c5c] rounded-[8px] px-[4px] py-[4px]"
                                id="590_548_1512_33_48_22">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag.png"
                                    class="size-3" alt="flag" id="590:554" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Polygon-7.png"
                                    class="size-3" alt="dropdown" id="590:555" />
                            </div>
                        </div>
                        <div class="block md:hidden">
                            <button id="menuToggle" class="inline-flex flex-col justify-center items-center p-2 w-10 h-10 rounded-md hover:bg-gray-100 transition-colors">
                                <span class="hamburger-line w-6 h-0.5 bg-[#5c5c5c] transition-all duration-300 ease-in-out"></span>
                                <span class="hamburger-line w-6 h-0.5 bg-[#5c5c5c] my-1 transition-all duration-300 ease-in-out"></span>
                                <span class="hamburger-line w-6 h-0.5 bg-[#5c5c5c] transition-all duration-300 ease-in-out"></span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <?php
            wp_nav_menu([
                'theme_location' => 'header-main-menu',
                'container' => false,
                'menu_id' => 'mobileMenu',
                'menu_class' => 'w-full hidden top-3 left-0 z-50 flex-col md:flex-row items-center justify-center bg-white py-4 gap-5 md:static md:flex shadow-lg md:shadow-none rounded-lg md:rounded-none md:w-auto',
                'fallback_cb' => false,
            ]);
            ?>
        </div>
    </header>