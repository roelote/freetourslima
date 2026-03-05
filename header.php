<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- header -->
    <header class="w-full sticky top-0 z-40 bg-[#efede7] lg:static lg:z-auto">
        <div class="container mx-auto mt-[14px] md:my-[16px] px-4 md:px-0 relative">
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

                        <div class="hidden lg:flex flex-row items-center">
                            <div class="flex items-center gap-3">


                                <?php
                                if (have_rows('box_top', 'option')):
                                    while (have_rows('box_top', 'option')) : the_row(); ?>
                                        <?php if (get_row_index() > 1): ?>
                                            <span class="text-[#5c5c5c]">|</span>
                                        <?php endif; ?>
                                        <a href="<?php echo get_sub_field('url'); ?>" class="text-[14px] font-bold leading-[20px] text-[#5c5c5c] hover:text-[#FF8110] transition-colors !no-underline"><?php echo get_sub_field('texto'); ?></a>
                                <?php
                                    endwhile;
                                endif;
                                ?>

                                <span class="text-[#5c5c5c]">|</span>
                                <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                            </div>

                            <!-- Seccion login -->
                            <?php if (is_user_logged_in()) :
                                $current_user = wp_get_current_user();
                                $user_name = $current_user->display_name;
                                $user_initial = mb_strtoupper(mb_substr($user_name, 0, 1));
                            ?>
                                <!-- Usuario logueado -->
                                <div class="relative ml-[20px]" id="user-dropdown-container">
                                    <button id="user-dropdown-trigger" class="flex items-center gap-2 hover:bg-[#FF8110] bg-[#5c5c5c] text-white rounded-[8px] px-3 py-1 transition-all border border-[#5c5c5c]">
                                        <div class="w-5 h-5 rounded-full bg-[#FF8110] flex items-center justify-center text-white font-bold text-sm">
                                            <?php echo esc_html($user_initial); ?>
                                        </div>
                                        <svg class="w-4 h-4 transition-transform" id="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="user-dropdown-menu" class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 hidden z-50">
                                        <div class="py-2">
                                            <a href="<?php echo admin_url('admin.php?page=comentarios-free-user-panel'); ?>" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#FF8110]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                </svg>
                                                <span class="font-medium"><?php _e('Mis comentarios', 'freewalking'); ?></span>
                                            </a>
                                            <div class="border-t border-gray-200 my-2"></div>
                                            <a href="<?php echo wp_logout_url(home_url()); ?>" class="flex items-center px-4 py-2 text-red-600 hover:bg-red-50 transition-colors">
                                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                </svg>
                                                <span class="font-medium"><?php _e('Cerrar sesión', 'freewalking'); ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <!-- Usuario no logueado -->
                                <div class="relative ml-3" id="user-dropdown-container">
                                    <button id="user-dropdown-trigger" class="flex items-center gap-2  border-[#5c5c5c] border-2 rounded-full hover:text-white  text-white  px-3 py-1 transition-all">
                                        <svg class="w-4 h-4" fill="none" stroke="#FF8110" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 transition-transform" id="dropdown-arrow" fill="none" stroke="#FF8110" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="user-dropdown-menu" class="absolute right-0 mt-2 w-48 z-[999] bg-white rounded-lg shadow-lg border border-gray-200 hidden">
                                        <div class="py-2">
                                            <button id="open-login-modal" class="w-full text-left flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#FF8110]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                                </svg>
                                                <span class="font-medium"><?php echo fw_trans('login_title', 'Iniciar sesión'); ?></span>
                                            </button>
                                            <button id="open-register-modal" class="w-full text-left flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#FF8110]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                                </svg>
                                                <span class="font-medium"><?php echo fw_trans('register_title', 'Registrarse'); ?></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="block lg:hidden">
                            <div class="max-w-7xl mx-auto px-4">
                                <div class="flex items-center justify-between">
                                    <div class="hidden lg:flex justify-center flex-1">
                                        <?php renderMenuDesktop($menu_items, $current_url); ?>
                                    </div>

                                    <button onclick="openMenu()" class="lg:hidden text-3xl">
                                        ☰
                                    </button>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="relative" id="fwt-nav-bar">
        <?php
        $api_url = "https://freewalkingtourcusco.org/wp-json/wp/v2/top-nav";
        $response = file_get_contents($api_url);
        $menu_items = json_decode($response, true);

        $current_url = home_url(add_query_arg([], $_SERVER['REQUEST_URI']));
        $current_url = rtrim($current_url, '/');

        function isActive($url, $current_url)
        {
            return rtrim($url, '/') === $current_url;
        }

        function renderMenuDesktop($items, $current_url)
        {
            if (!empty($items)) {
                echo "<ul class='flex gap-8' id='desktopMenu'>";

                foreach ($items as $item) {

                    $active_class = isActive($item['href'], $current_url) ? 'menu-active' : '';

                    echo "<li class='relative group'>";
                    echo "<a href='" . htmlspecialchars($item['href']) . "' 
                        class='menu-link font-medium transition $active_class'>";
                    echo htmlspecialchars($item['name']);
                    echo "</a>";

                    if (!empty($item['children'])) {
                        echo "<ul class='absolute left-0 top-full hidden group-hover:block bg-white shadow-lg rounded-lg mt-3 min-w-[200px] p-4 space-y-2'>";

                        foreach ($item['children'] as $child) {

                            $child_active = isActive($child['href'], $current_url) ? 'menu-active' : '';

                            echo "<li>";
                            echo "<a href='" . htmlspecialchars($child['href']) . "' 
                                class='menu-link block transition $child_active'>";
                            echo htmlspecialchars($child['name']);
                            echo "</a>";
                            echo "</li>";
                        }

                        echo "</ul>";
                    }

                    echo "</li>";
                }

                echo "</ul>";
            }
        }

        function renderMenuMobile($items, $current_url)
        {
            if (!empty($items)) {
                echo "<ul class='mobileMenu' class='text-center underline'>";

                foreach ($items as $index => $item) {

                    $hasChildren = !empty($item['children']);
                    $active_class = isActive($item['href'], $current_url) ? 'menu-active' : '';

                    echo "<li>";

                    if ($hasChildren) {

                        echo "
                <button onclick='toggleSubmenu($index)' 
                    class='flex justify-between items-center w-full text-left text-lg font-medium py-3 border-b border-neutral-200'>
                    " . htmlspecialchars($item['name']) . "
                    <span>+</span>
                </button>
                ";

                        echo "<ul id='submenu-$index' class='hidden mt-3 px-4 border-l bg-gray-200 rounded-lg'>";

                        foreach ($item['children'] as $child) {

                            $child_active = isActive($child['href'], $current_url) ? 'menu-active' : '';

                            echo "<li>";
                            echo "<a href='" . htmlspecialchars($child['href']) . "' 
                            class='menu-link text-base py-3 block border-b border-white $child_active'>";
                            echo htmlspecialchars($child['name']);
                            echo "</a>";
                            echo "</li>";
                        }

                        echo "</ul>";
                    } else {

                        echo "<a href='" . htmlspecialchars($item['href']) . "' 
                        class='menu-link block border-b border-neutral-200 text-lg font-medium py-3 $active_class'>";
                        echo htmlspecialchars($item['name']);
                        echo "</a>";
                    }

                    echo "</li>";
                }

                echo "</ul>";
            }
        }
        ?>

        <nav class="bg-white border-b absolute top-[10px] right-0 lg:relative hidden lg:flex lg:items-center h-[56px]">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex items-center justify-between">
                    <div class="justify-center flex-1">
                        <?php renderMenuDesktop($menu_items, $current_url); ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="mobileMenu"
        class="fixed top-0 right-0 w-full min-h-screen bg-white transform translate-x-full transition-transform duration-300 ease-in-out z-50 lg:hidden">

        <div class="flex items-center justify-between p-6 border-b">
            <div class="text-2xl font-bold mobilelogo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold" style="color: #3E593C;">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php
                }
                ?>
            </div>
            <button onclick="closeMenu()" class="text-3xl">✕</button>
        </div>
        <div class="p-5 overflow-auto">
            <?php renderMenuMobile($menu_items, $current_url); ?>
            <!-- contenido adicional menu -->
            <div class="py-5">
                
                <div class="flex items-center justify-center gap-3">
                    <div class="w-full">
                        <a href="tel:+51987654321" class="font-medium flex items-center justify-center gap-1 bg-green outline-1 outline-green py-3 w-full text-white text-center rounded-lg text-[14px]">
                            <svg fill="currentColor" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                            </svg> +51 987 654 321</a>
                    </div>
                    <div class="w-full">
                        <a href="tel:+51987654321" class="font-medium flex items-center justify-center outline outline-[#25d366] py-3 w-full text-black text-center rounded-lg text-[14px]">
                            <svg fill="#25d366" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z" />
                            </svg> +51 987 654 321</a>
                    </div>
                </div>
              
                <!-- <div class="my-5 text-center">
                    <a href="" class="uppercase bg-[linear-gradient(135deg,#3E593C_0%,#FACC15_100%)] text-white py-3 px-7 inline-block rounded-lg font-medium"> Plan Your Trip</a>
                </div> -->
                <!-- <div class="w-full flex items-center justify-center space-x-3">
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#3E593C] hover:text-white transition-colors" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#3E593C] hover:text-white transition-colors" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#3E593C] hover:text-white transition-colors" aria-label="Pinterest">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#3E593C] hover:text-white transition-colors" aria-label="TikTok">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z" />
                        </svg>
                    </a>
                </div> -->
                <hr class="my-5 text-gray-icon" />
                <div class="w-full">
                    <p class="text-gray-icon font-sm text-center">FreeWalkingTourCusco.Org Copyright © 2023 - 2026, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openMenu() {
            document.getElementById('mobileMenu')
                .classList.remove('translate-x-full');

            document.querySelector("body").style.overflow = "hidden"
        }

        function closeMenu() {
            document.getElementById('mobileMenu')
                .classList.add('translate-x-full');
            document.querySelector("body").style.overflow = "visible"
        }

        function toggleSubmenu(id) {
            const submenu = document.getElementById('submenu-' + id);
            submenu.classList.toggle('hidden');
        }
    </script>

    <script>
        (function() {
            var bar = document.getElementById('fwt-nav-bar');
            var hdr = document.querySelector('header');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    if (bar) bar.classList.add('fwt-scrolled');
                    if (hdr) hdr.classList.add('fwt-header-scrolled');
                } else {
                    if (bar) bar.classList.remove('fwt-scrolled');
                    if (hdr) hdr.classList.remove('fwt-header-scrolled');
                }
            }, {
                passive: true
            });
        })();
    </script>


    <!-- Script del dropdown de usuario (debe estar fuera del condicional para funcionar con usuarios logueados) -->
    <script>
        jQuery(document).ready(function($) {
            // Funcionalidad del dropdown de usuario
            $('#user-dropdown-trigger').on('click', function(e) {
                e.stopPropagation();
                $('#user-dropdown-menu').toggleClass('hidden');
                $('#dropdown-arrow').toggleClass('rotate-180');
            });

            // Cerrar dropdown al hacer clic fuera
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#user-dropdown-container').length) {
                    $('#user-dropdown-menu').addClass('hidden');
                    $('#dropdown-arrow').removeClass('rotate-180');
                }
            });
        });
    </script>

    <!-- Modal de Login/Registro -->
    <?php if (!is_user_logged_in()) : ?>
        <!-- Modal de autenticación compartido -->
        <div id="cf-auth-modal" class="cf-modal" style="display: none;">
            <div class="cf-modal-backdrop"></div>
            <div class="cf-modal-content">
                <div class="cf-modal-header">
                    <h3 class="text-[18px] xl:text-[20px]" id="cf-auth-modal-title"><?php echo fw_trans('login_title', 'Iniciar sesión'); ?></h3>
                    <button class="cf-modal-close">×</button>
                </div>

                <!-- Info de autenticación -->
                <div class="cf-auth-info" style="background: #fff5ed; border: 1px solid #ffd9b3; border-radius: 8px; padding: 15px; margin-bottom: 20px; text-align: center;">
                    <p style="margin: 0; color: #333;"><?php echo function_exists('lf_trans') ? lf_trans('auth_welcome_message') : '👋 Inicia sesión o crea una cuenta para continuar.'; ?></p>
                </div>

                <div class="cf-auth-container">
                    <?php
                    // Usar el shortcode de loginfree con modo modal
                    if (function_exists('do_shortcode')) {
                        echo do_shortcode('[advanced_registration_form no_redirect="true" modal_mode="true"]');
                    } else {
                        echo '<p style="color: red; text-align: center;">Error: Plugin LoginFree requerido</p>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <script>
            jQuery(document).ready(function($) {
                // Abrir modal cuando se hace clic en login/registro del header
                $('#header-login-btn, #header-register-btn, #open-login-modal, #open-register-modal').on('click', function(e) {
                    e.preventDefault();

                    // Cerrar dropdown primero
                    $('#user-dropdown-menu').addClass('hidden');
                    $('#dropdown-arrow').removeClass('rotate-180');

                    // Abrir el modal de autenticación del header (shortcode único)
                    $('#cf-auth-modal').fadeIn(300);
                    $('body').css('overflow', 'hidden');

                    // Reinicializar botón de Google después de un momento
                    setTimeout(function() {
                        if (typeof google !== 'undefined' && google.accounts && typeof arp_ajax !== 'undefined' && arp_ajax.google_client_id) {
                            var googleButtonContainer = document.getElementById('gmail-signin-button');
                            if (googleButtonContainer) {
                                googleButtonContainer.innerHTML = '';
                                try {
                                    google.accounts.id.renderButton(googleButtonContainer, {
                                        type: 'standard',
                                        theme: 'outline',
                                        size: 'large',
                                        text: 'signup_with',
                                        locale: 'es',
                                        shape: 'pill'
                                    });
                                } catch (error) {
                                    console.error('Error al renderizar botón de Google:', error);
                                }
                            }
                        }
                    }, 300);
                });

                // Cerrar modal de autenticación
                $(document).on('click', '#cf-auth-modal .cf-modal-close, #cf-auth-modal .cf-modal-backdrop', function(e) {
                    if (e.target === this) {
                        $('#cf-auth-modal').fadeOut(300);
                        $('body').css('overflow', 'auto');
                    }
                });

                // Listener para evento de login exitoso desde loginfree
                window.addEventListener('cf_user_logged_in', function(event) {
                    if (event.detail && event.detail.success) {
                        // Cerrar cualquier modal abierto
                        $('#cf-auth-modal, #cf-comment-modal').fadeOut(300);
                        $('body').css('overflow', 'auto');

                        // Verificar si venimos de "escribir reseña" para reabrir el modal después del login
                        var returnToReview = sessionStorage.getItem('cf_return_to_review');
                        if (returnToReview === 'true') {
                            sessionStorage.setItem('cf_open_review_on_load', 'true');
                        }
                        sessionStorage.removeItem('cf_return_to_review');

                        // Recargar la página para actualizar el estado de autenticación
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                });

                // Al cargar la página, verificar si debemos abrir el modal de reseña
                $(document).ready(function() {
                    var shouldOpenReview = sessionStorage.getItem('cf_open_review_on_load');
                    if (shouldOpenReview === 'true' && $('#cf-comment-modal').length > 0) {
                        sessionStorage.removeItem('cf_open_review_on_load');
                        // Esperar un momento para que la página cargue completamente
                        setTimeout(function() {
                            $('#cf-add-comment-btn').trigger('click');
                        }, 500);
                    }
                });
            });
        </script>
    <?php endif; ?>